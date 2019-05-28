<?php
// 开启session
// session_start();
// $CHECK_userid = (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) ? true : false;
// $CHECK_userConfirmed = (isset($_SESSION['userConfirmed']) && !empty($_SESSION['userConfirmed'])) ? true : false;
// $CHECK_CONDITION = ($CHECK_userid && $CHECK_userConfirmed && $CHECK_userConfirmed == 1) ? true : false;
// if(!$CHECK_CONDITION){
// 	returnData(array('success' => false, 'msg' => 'not sign in'));
// 	exit;
// }
function SIGNINCHECK(){
	session_start();
	$userid = (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) ? true : false;
	$userConfirmed = (isset($_SESSION['userConfirmed']) && !empty($_SESSION['userConfirmed'])) ? true : false;
	$condition = ($userid && $userConfirmed && $userConfirmed == 1) ? true : false;
	if(!$condition){
		returnData(array('success' => false, 'msg' => '请先登录'));
		exit;
	}
}
SIGNINCHECK();
?>