<?php
// 开启session
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

$username = $_SESSION['username'];

if($username){
	$data = array(
		'username' => $username
	);
	returnData(array('success' => true, 'data' => $data));
}
else{
	returnData(array('success' => false, 'msg' => ''));
}

?>