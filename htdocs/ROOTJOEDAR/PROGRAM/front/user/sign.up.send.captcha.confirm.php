<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/send.email.php';

// 开启session
session_start();
// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];

$session_email = (isset($_SESSION['userEmail']) && !empty($_SESSION['userEmail'])) ? $_SESSION['userEmail'] : '';
$request_email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
$email = $session_email ? $session_email : $request_email;
// 如果没有email
if(!$email){
	returnData(array('success' => false, 'msg' => 'no email'));
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
$captchaConfirm = '';
for($i=0; $i<8; $i++){
	// 设置字体内容
	$fontcontent = substr($content, mt_rand(0, strlen($content)), 1);
	$captchaConfirm .= $fontcontent;
}
$_SESSION['captchaConfirm'] = array(
	// 验证码
	$captchaConfirm
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
	$cookieStr = 'CC'.substr(str_shuffle($cookieStr),5,10);
	setcookie('CAPTCHASESSIONID',$cookieStr);
}
insertCookie();

//--------------------------------------------
// 			发送验证码去邮箱
//--------------------------------------------
$title = 'JOEDAR.COM - 确认验证码';
$body = '<div style="width:400px; margin:0 auto;">'
			.'<div style="height:80px; line-height:80px; text-align:center; background:#222; color:orange;"><b style="font-size:20px;">JOEDAR.COM 确认验证码</b></div>'
			.'<div style="border:1px #ddd solid; border-top:none; background:#f9f9f9; padding:20px; font-size:14px;">'
				.'<div>亲爱的 '.$email.' 用户：</div>'
				.'<div style="padding:15px 0;">此次的验证码为 ： <b style="font-size:24px;">'.$_SESSION['captchaConfirm'][0].'</b></div>'
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















// echo $email;

return;

// type = reg(注册) | edit(修改) | complete(完善资料)
empty($_REQUEST['type']) ? $type = '' : $type = $_REQUEST['type'];
empty($_REQUEST['email']) ? $email = '' : $email = $_REQUEST['email'];

// 如果没有type
if(!$type){
	returnData(array('success' => false, 'msg' => 'no type'));
	exit;
}
// 如果没有email
if(!$email){
	returnData(array('success' => false, 'msg' => 'no email'));
	exit;
}


if($type == 'SIGNUP'){

	$title = 'joedar.com - 确认注册验证码';
	$body = '<div style="width:400px; margin:0 auto;">'
				.'<div style="height:80px; line-height:80px; text-align:center; background:#f66; color:#fff;"><b style="font-size:20px;">JOEDAR.COM 验证码</b></div>'
				.'<div style="border:1px #ddd solid; border-top:none; background:#f9f9f9; padding:20px; font-size:14px;">'
					.'<div>亲爱的 '.$email.' 用户：</div>'
					.'<div style="padding:15px 0;">此次的验证码为 ： <b style="font-size:24px;">5f9d8s5</b></div>'
					.'<div>有效期为10分钟，如果过期请重新发送验证码</div>'
					.'<div style="padding:15px 0; text-align:right;">webmaster@zmean.com</div>'
				.'</div>'
			.'</div>'
	;

	if(sendEmail($email,$title,$body) == 'sendok'){
		returnData(array('success' => true));
	}
}




?>