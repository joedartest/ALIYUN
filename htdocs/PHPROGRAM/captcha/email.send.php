<?php
// 开启session
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/WEB2018/_PROGRAM_/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/WEB2018/_PROGRAM_/send.email.php';

// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];
// 缓存图形验证码对象
$SCI = $_SESSION['captchaImage'];


// 图形验证码
empty($_REQUEST['captchaImage']) ? $captchaImage = '' : $captchaImage = $_REQUEST['captchaImage'];
// 邮件地址
empty($_REQUEST['email']) ? $email = '' : $email = $_REQUEST['email'];
// type = reg(注册) | edit(修改) | complete(完善资料)
empty($_REQUEST['type']) ? $type = '' : $type = $_REQUEST['type'];

// 如果没有传图形验证码和邮箱 则返回错误
if(!$captchaImage || !$email || !$type){
	returnData('false','no parameter request','');
	exit;
}


//----------------------------------
// 	获取缓存验证码 及 判断是否过期
// 	如果过期就删除此缓存验证码
//----------------------------------
// 如果 服务器当前时间 大于 如果过期时间
if($NOWTIME > $SCI[2]){
	// 删除图形验证码
    $SCI = '';
    returnData('false','图形验证码已过期','');
    exit;
}



// 校验图形验证码是否正确
if(strtolower($SCI[0]) == strtolower($captchaImage)){
	// 删除图形验证码
    $SCI = '';
}else{
	returnData('false','图形验证码不正确','');
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
// 如果是注册

if($type == 'REG'){
	$title = 'zmean.com - 验证码';
	$body = '<div style="width:400px; margin:0 auto;">'
				.'<div style="height:80px; line-height:80px; text-align:center; background:#f66; color:#fff;"><b style="font-size:20px;">ZMEAN.COM 验证码</b></div>'
				.'<div style="border:1px #ddd solid; border-top:none; background:#f9f9f9; padding:20px; font-size:14px;">'
					.'<div>亲爱的 '.$email.' 用户：</div>'
					.'<div style="padding:15px 0;">此次的验证码为 ： <b style="font-size:24px;">'.$_SESSION['captchaEmail'][0].'</b></div>'
					.'<div>有效期为10分钟，如果过期请重新发送验证码</div>'
					.'<div style="padding:15px 0; text-align:right;">webmaster@zmean.com</div>'
				.'</div>'
			.'</div>'
	;

	if(sendEmail($email,$title,$body) == 'sendok'){
		returnData('true','','');
	}
}
















// 如果SESSION的图形验证码值 == 传来的值
// 则清空
// if($_SESSION['captchaImage'] == $captchaImage){
//     $_SESSION['captchaImage'] = '';
// 	returnData('true','','');
// }else{
// 	returnData('false','验证码提交不正确','');
// }

?>