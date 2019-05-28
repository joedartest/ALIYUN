<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 开启session
session_start();

function SIGNINCHECK(){
	$userid = (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) ? true : false;
	$userConfirmed = (isset($_SESSION['userConfirmed']) && !empty($_SESSION['userConfirmed'])) ? true : false;
	if($userid && $userConfirmed && $userConfirmed == 1){
		returnData(array('success' => true));
	}else{
		returnData(array('success' => false, 'msg' => 'not sign in'));
	}
}
SIGNINCHECK();


?>