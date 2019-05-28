<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 上传图片
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/upload/image.add.php';
// 用户是否登录
include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/PROGRAM/front/user/sign.in.check.php';


function UPLOADIMAGE_AUTISM_AVATAR(){
	$userId = _USERID_();
	$OBJ = array(
		'userId' => $userId
		,'path' => '/autism/avatar'
	);
	UPLOADIMAGE($OBJ);
}
UPLOADIMAGE_AUTISM_AVATAR();

?>