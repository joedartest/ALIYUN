<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 用户是否登录
include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/PROGRAM/front/user/sign.in.check.php';


// user_info get
function user_info(){
	//--------------------------
	//    首先判断是否登录
	//--------------------------
	$userId = _USERID_();

	$userId_check_query = mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE id='$userId' limit 1");
	$userId_result = mysql_fetch_array($userId_check_query);
	if($userId_result){
		$data = array(
			'userId' => $userId
			,'email' => $userId_result['email']
			,'username' => $userId_result['username']
			,'nickname' => $userId_result['nickname']
			,'babyname' => $userId_result['babyname']
			,'babyparent' => $userId_result['babyparent']
			,'babysex' => $userId_result['babysex']
			,'babybirth' => $userId_result['babybirth']
		);
		returnData(array('success' => true, 'data' => $data));
	}else{
		returnData(array('success' => false, 'msg' => '没有信息'));
	}
}
user_info();

?>