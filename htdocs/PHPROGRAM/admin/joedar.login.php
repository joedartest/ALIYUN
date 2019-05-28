<?php
// 开启session
// session_start();

include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';


empty($_REQUEST['username']) ? $username = '' : $username = htmlspecialchars($_REQUEST['username']);
empty($_REQUEST['password']) ? $password = '' : $password = $_REQUEST['password'];


$check_query = mysql_query("SELECT id FROM ADMIN WHERE username='$username' and password='$password' limit 1");

if($result = mysql_fetch_array($check_query)){  
    // 登录成功
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $result['id'];
    returnData(array('success' => true));
    exit;
}
else{
	returnData(array('success' => false, 'msg' => '登录失败'));
    exit;
}  

// echo 'login';


?>