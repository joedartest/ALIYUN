<?php
// 开启session
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
unset($_SESSION['id']);
unset($_SESSION['username']);
echo returnData(array('success' => true));
exit;
?>