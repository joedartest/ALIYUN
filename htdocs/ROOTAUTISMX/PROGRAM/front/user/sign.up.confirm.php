<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

// 开启session
session_start();
// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];
// 缓存邮件验证码对象
$SCC = $_SESSION['captchaConfirm'];
// 确认验证码
$captchaConfirm = !empty($_REQUEST['captchaConfirm']) ? $_REQUEST['captchaConfirm'] : '';
// 邮件
$email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';

if(!$captchaConfirm){
	returnData(array('success' => false, 'msg' => '请输入确认验证码'));
	exit;
}
//-------------------------
// 	 校验验证码是否过期
//-------------------------
// 如果服务器当前时间 大于 缓存确认验证码的过期时间
if($NOWTIME > $SCC[2]){
	$SCC = '';
	returnData(array('success' => false, 'msg' => '确认验证码已过期'));
	exit;
}
//-------------------------
// 	 校验邮件是否正确
//-------------------------
if(strtolower($SCC[3]) != strtolower($email)){
	returnData(array('success' => false, 'msg' => '邮箱地址不正确'));
	exit;
}
//-------------------------
// 	 比较确认验证码是否正确
//-------------------------
if(strtolower($SCC[0]) == strtolower($captchaConfirm)){
	$SCC = '';
}else{
	returnData(array('success' => false, 'msg' => '确认验证码不正确'));
	exit;
}




//-----------------------------------
// 更新User的Confirm的值
// 查询数据库 将confirm的值变为1
// update `AUTISM_USER_LIST` set `confirmed`=1 where `id`=4;
//-----------------------------------
function updateUserConfirm(){
	$id = $_SESSION['userid'];
	// 更新数据库confirmed的值
	$sql = "UPDATE AUTISM_USER_LIST SET confirmed = 1 WHERE id = '$id'";
	if(mysql_query($sql)){
		$_SESSION['userConfirmed'] = 1;
		returnData(array('success' => true));
	}else{
		$_SESSION['userConfirmed'] = 0;
		returnData(array('success' => false, 'msg' => '未知错误'));
	}
}
updateUserConfirm();





mysql_close($con);
?>