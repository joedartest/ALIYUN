<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 用户是否登录
include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/PROGRAM/front/user/sign.in.check.php';

// user_avatar update
function user_avatar(){
	//--------------------------
	//    首先判断是否登录
	//--------------------------
	$userId = _USERID_();

	$avatar = !empty($_REQUEST['avatar']) ? $_REQUEST['avatar'] : '';
	// 如果没有传 avatar
	if(!$avatar){
		returnData(array('success' => false, 'msg' => '请添加头像图片'));
		exit;
	}
	// 更新数据库confirmed的值
	$sql = "UPDATE AUTISM_USER_LIST SET avatar = '$avatar' WHERE id = '$userId'";
	if(mysql_query($sql)){
		$data = array(
			'img' => $avatar
		);
		returnData(array('success' => true, 'data' => $data));
	}else{
		returnData(array('success' => false, 'msg' => '更新头像失败'));
	}
}
user_avatar();

?>