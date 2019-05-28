<?php
// 开启session
session_start();

if(empty($_SESSION['username'])){
	returnData(array('success' => false, 'msg' => 'plase login'));
	mysql_close($con);
	exit;
}

?>