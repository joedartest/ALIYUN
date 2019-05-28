<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 开启session
session_start();
// 注销登录
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['userEmail']);
unset($_SESSION['userConfirmed']);
unset($_SESSION['userSigninTime']);
// 返回成功
returnData(array('success' => true));
exit;
?>