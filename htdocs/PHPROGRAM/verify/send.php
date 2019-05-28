<?php
include $_SERVER['DOCUMENT_ROOT'].'/WEB2018/_PROGRAM_/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/WEB2018/_PROGRAM_/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/WEB2018/_PROGRAM_/send.email.php';


// type = reg(注册) | edit(修改) | complete(完善资料)
empty($_REQUEST['type']) ? $type = '' : $type = $_REQUEST['type'];
empty($_REQUEST['email']) ? $email = '' : $email = $_REQUEST['email'];

// 如果没有type
if(!$type){
	returnData('false','no type','');
	exit;
}
// 如果没有email
if(!$email){
	returnData('false','no email','');
	exit;
}


if($type == 'REG'){

	$title = 'zmean.com - 验证码';
	$body = '<div style="width:400px; margin:0 auto;">'
				.'<div style="height:80px; line-height:80px; text-align:center; background:#f66; color:#fff;"><b style="font-size:20px;">ZMEAN.COM 验证码</b></div>'
				.'<div style="border:1px #ddd solid; border-top:none; background:#f9f9f9; padding:20px; font-size:14px;">'
					.'<div>亲爱的 '.$email.' 用户：</div>'
					.'<div style="padding:15px 0;">此次的验证码为 ： <b style="font-size:24px;">5f9d8s5</b></div>'
					.'<div>有效期为10分钟，如果过期请重新发送验证码</div>'
					.'<div style="padding:15px 0; text-align:right;">webmaster@zmean.com</div>'
				.'</div>'
			.'</div>'
	;

	if(sendEmail($email,$title,$body) == 'sendok'){
		returnData('true','','');
	}
}







// returnData('true','','');





mysql_close($con);
?>