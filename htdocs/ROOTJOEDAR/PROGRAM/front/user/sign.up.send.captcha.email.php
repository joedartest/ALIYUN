<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// PHP正则表达式
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.regexp.php';
// 发送邮件方法
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/send.email.php';

// 开启session
session_start();
// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];
// 缓存图形验证码对象
$SCI = $_SESSION['captchaImage'];

// 邮件地址
$email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
// 图形验证码
$captchaImage = !empty($_REQUEST['captchaImage']) ? $_REQUEST['captchaImage'] : '';


//------------------------------------------
// 思路：
// 1、校验email(是否有传 及 是否符合php正则)
// 2、校验captchaImage (是否有传 及 是否正确)
// 3、校验图片验证码是否正确
// 4、生成发送邮件的验证码
//------------------------------------------

//------------------------
//       校验邮件
//------------------------
// 如果没有传 邮箱地址
if(!$email){
	returnData(array('success' => false, 'msg' => '请输入邮箱地址'));
	exit;
}
// 如果 邮箱地址不符合php正则
if(!emailExp($email)){
	returnData(array('success' => false, 'msg' => '邮箱地址输入不正确'));
	exit;
}

//------------------------
//   校验captchaImage
//------------------------
// 如果没有传 captchaImage
if(!$captchaImage){
	returnData(array('success' => false, 'msg' => '请输入图形验证码'));
	exit;
}
//----------------------------------
// 	获取缓存验证码 及 判断是否过期
// 	如果过期就删除此缓存验证码
//----------------------------------
// 如果 服务器当前时间 大于 如果过期时间
if($NOWTIME > $SCI[2] || !$SCI){
	// 删除图形验证码
    $SCI = '';
    returnData(array('success' => false, 'msg' => '图形验证码已过期'));
    exit;
}
// 校验图形验证码是否正确
if(strtolower($SCI[0]) == strtolower($captchaImage)){
	// 删除图形验证码
    $SCI = '';
}else{
	returnData(array('success' => false, 'msg' => '图形验证码不正确'));
	exit;
}


//============================================
//--------------------------------------------
// 			生成发送邮件的验证码
//--------------------------------------------
//============================================
// 设置验证码内容
$content = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
// 创建一个变量存储产生的验证码数据，便于用户提交核对
$captchaEmail = '';
for($i=0; $i<8; $i++){
	// 设置字体内容
	$fontcontent = substr($content, mt_rand(0, strlen($content)), 1);
	$captchaEmail .= $fontcontent;
}
$_SESSION['captchaEmail'] = array(
	// 验证码
	$captchaEmail
	// 开始时间
	,$NOWTIME
	// 过期时间 10分钟
	,$NOWTIME + (10 * 60)
	// 用户邮箱
	,$email
);


//--------------------------------
//      向COOKIE写入随机数
//--------------------------------
function insertCookie(){
	$cookieStr = 'QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm';
	$cookieStr = 'CE'.substr(str_shuffle($cookieStr),5,10);
	setcookie('CAPTCHASESSIONID',$cookieStr);
}
insertCookie();


//--------------------------------------------
// 			发送验证码去邮箱
//--------------------------------------------
$title = 'JOEDAR.COM - 注册验证码';
$body = '<div style="width:400px; margin:0 auto;">'
			.'<div style="height:80px; line-height:80px; text-align:center; background:#222; color:orange;"><b style="font-size:20px;">JOEDAR.COM 注册验证码</b></div>'
			.'<div style="border:1px #ddd solid; border-top:none; background:#f9f9f9; padding:20px; font-size:14px;">'
				.'<div>亲爱的 '.$email.' 用户：</div>'
				.'<div style="padding:15px 0;">此次的验证码为 ： <b style="font-size:24px;">'.$_SESSION['captchaEmail'][0].'</b></div>'
				.'<div>有效期为10分钟，如果过期请重新发送验证码</div>'
				.'<div style="padding:15px 0; text-align:right;">webmaster@joedar.com</div>'
			.'</div>'
		.'</div>'
;

if(sendEmail($email,$title,$body) == 'sendok'){
	returnData(array('success' => true));
}
else{
	returnData(array('success' => false, 'msg' => '邮件发送失败'));
}

mysql_close($con);
?>