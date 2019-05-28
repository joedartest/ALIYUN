<?php

/**
* 字母+数字的验证码生成
*/

// 开启session
session_start();

// 4 设置验证码内容
// 4.1 定义验证码的内容
$content = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

// 4.2 创建一个变量存储产生的验证码数据，便于用户提交核对
$captchaEmail = '';
for($i=0; $i<8; $i++){
	// 设置字体内容
	$fontcontent = substr($content, mt_rand(0, strlen($content)), 1);
	$captchaEmail .= $fontcontent;
}
$_SESSION['captchaEmail'] = $captchaEmail;

echo $_SESSION['captchaEmail'];

?>