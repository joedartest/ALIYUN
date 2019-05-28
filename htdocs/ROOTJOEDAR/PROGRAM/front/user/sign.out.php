<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 开启session
session_start();
// 注销登录
unset($_SESSION['userid']);
// 返回成功
returnData(array('success' => true));
exit;
?>