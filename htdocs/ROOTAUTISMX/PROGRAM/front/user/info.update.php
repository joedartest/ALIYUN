<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 用户是否登录
include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/PROGRAM/front/user/sign.in.check.php';

// user_info update
function user_info(){
	//--------------------------
	//    首先判断是否登录
	//--------------------------
	$userId = _USERID_();

	//-------------------
	//    校验用户名
	//-------------------
	$username = !empty($_REQUEST['username']) ? $_REQUEST['username'] : '';
	if(!$username){
		returnData(array('success' => false, 'msg' => '请输入用户名'));
		return;
	}elseif(!preg_match('/^[\x{4e00}-\x{9fa5}A-Za-z0-9]{1,20}$/u',$username)){
		returnData(array('success' => false, 'msg' => '仅可包含中英文数字,20位以内'));
		return;
	}

	//-------------------
	//    校验昵称
	//-------------------
	$nickname = !empty($_REQUEST['nickname']) ? $_REQUEST['nickname'] : '';
	if(!$nickname){
		returnData(array('success' => false, 'msg' => '请输入昵称'));
		return;
	}elseif(!preg_match('/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]{1,20}$/u',$nickname)){
		returnData(array('success' => false, 'msg' => '仅可包含中英文数字下划线,20位以内'));
		return;
	}

	//-------------------
	//    校验宝宝名字
	//-------------------
	$babyname = !empty($_REQUEST['babyname']) ? $_REQUEST['babyname'] : '';
	if(!$babyname){
		returnData(array('success' => false, 'msg' => '请输入宝宝名字'));
		return;
	}elseif(!preg_match('/^[\x{4e00}-\x{9fa5}A-Za-z0-9]{1,20}$/u',$babyname)){
		returnData(array('success' => false, 'msg' => '仅可包含中英文数字,20位以内'));
		return;
	}

	//-------------------
	//    校验宝宝性别
	//-------------------
	$babysex = !empty($_REQUEST['babysex']) ? $_REQUEST['babysex'] : '';
	if(!$babysex){
		returnData(array('success' => false, 'msg' => '请选择宝宝性别'));
		return;
	}

	//-------------------
	//    校验宝宝出生
	//-------------------
	$babybirth = !empty($_REQUEST['babybirth']) ? $_REQUEST['babybirth'] : '';
	if(!$babybirth){
		returnData(array('success' => false, 'msg' => '请选择宝宝出生年月'));
		return;
	}elseif(!preg_match('/^[0-9]{4}\/[0-9]{2}$/',$babybirth)){
		returnData(array('success' => false, 'msg' => '日期格式不正确'));
		return;
	}

	//-------------------
	//    校验宝宝监护人
	//-------------------
	$babyparent = !empty($_REQUEST['babyparent']) ? $_REQUEST['babyparent'] : '';
	if(!$babyparent){
		returnData(array('success' => false, 'msg' => '请选择宝宝监护人'));
		return;
	}


	// update `AUTISM_USER_LIST` set `username`='',`nickname`='',`babyparent`='',`babyname`='',`babysex`='',`babybirth`='' where `id`=4;
	

	// 更新数据库confirmed的值
	$sql = "UPDATE AUTISM_USER_LIST SET
			username = '$username'
			,nickname = '$nickname'
			,babyname = '$babyname'
			,babysex = '$babysex'
			,babybirth = '$babybirth'
			,babyparent = '$babyparent'
			WHERE id = '$userId'";
	if(mysql_query($sql)){
		returnData(array('success' => true));
	}else{
		returnData(array('success' => false, 'msg' => '更新失败'));
	}
}
user_info();

?>
