<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

/**
* 接受用户登陆时提交的验证码
*/

// 开启session
session_start();

// 1 获取到用户提交的验证码
$captcha = !empty($_REQUEST['captcha']) ? $_REQUEST['captcha'] : '';
// 如果未提交验证码 则 提示错误并退出
if(!$captcha){
	returnData(array('success' => false, 'msg' => 'no captcha request'));
	exit;
}

// 2 将session中的验证码和用户提交的验证码进行核对
// 	当成功时提示验证码正确，并销毁之前的session值
//  不成功则重新提交
if(strtolower($_SESSION["captchaimg"]) == strtolower($captcha)){
    $_SESSION['captcha'] = '';
    returnData(array('success' => true));
}else{
	returnData(array('success' => false, 'msg' => '验证码提交不正确！'));
}
?>