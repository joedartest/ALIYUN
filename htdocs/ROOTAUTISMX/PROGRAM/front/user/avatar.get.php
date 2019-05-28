<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 用户是否登录
include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/PROGRAM/front/user/sign.in.check.php';

// user_avatar get
function user_avatar(){
	//--------------------------
	//    首先判断是否登录
	//--------------------------
	$userId = _USERID_();

	$userId_check_query = mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE id='$userId' limit 1");
	$userId_result = mysql_fetch_array($userId_check_query);
	if($userId_result){
		$data = array(
			'img' => $userId_result['avatar']
		);
		returnData(array('success' => true, 'data' => $data));
	}else{
		returnData(array('success' => false, 'msg' => '没有头像'));
	}
}
user_avatar();

?>