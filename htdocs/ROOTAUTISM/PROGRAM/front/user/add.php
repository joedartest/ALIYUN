<?php
// 开启session
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// PHP正则表达式
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.regexp.php';

// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];
// 缓存邮件验证码对象
$SCE = $_SESSION['captchaEmail'];


// type = SIGNUP(注册) | EDIT(修改) | COMPLETE(完善资料)
$type = !empty($_REQUEST['type']) ? $_REQUEST['type'] : '';
// id = userId
$id = !empty($_REQUEST['id']) ? (int)$_REQUEST['id'] : '';
// email
$email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
// captchaEmail
$captchaEmail = !empty($_REQUEST['captchaEmail']) ? $_REQUEST['captchaEmail'] : '';
// password
$password = !empty($_REQUEST['password']) ? $_REQUEST['password'] : '';


//==================================
// 			用户 - 添加
//==================================
function userAdd($id,$email,$password){
	// 校验邮箱是否存在
	$hasEmail = mysql_fetch_array(mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE email = '$email'"));
	// 如果邮箱存在
	if($hasEmail){
		returnData(array('success' => false, 'msg' => '该邮箱已注册'));
		exit;
	}
	// 插入数据库
	$sql = "INSERT INTO AUTISM_USER_LIST (id,email,password) VALUES (NULL,'$email','$password')";

	if(mysql_query($sql)){
		returnData(array('success' => true));
	}else{
		returnData(array('success' => false, 'msg' => '注册失败'));
	}
}
userAdd($id,$email,$password);



// ----------------------------------
//        如果是注册
// ----------------------------------
if($type == 'SIGNUP'){
	//-------------------------
	// 	 校验验证码是否过期
	//-------------------------
	// 如果服务器当前时间 大于 缓存邮件验证码的过期时间
	if($NOWTIME > $SCE[2]){
		$SCE = '';
		returnData(array('success' => false, 'msg' => '邮件验证码已过期'));
		exit;
	}

	//-------------------------
	// 	 校验邮件是否正确
	//-------------------------
	if(strtolower($SCE[3]) != strtolower($email)){
		returnData(array('success' => false, 'msg' => '邮箱地址不正确'));
		exit;
	}

	//-------------------------
	// 	 比较验证码是否正确
	//-------------------------
	if(strtolower($SCE[0]) == strtolower($captchaEmail)){
		$SCE = '';
	}else{
		returnData(array('success' => false, 'msg' => '邮件验证码不正确'));
		exit;
	}

	// 如果email和password都有传
	if(!empty($email) && !empty($password)){
		// 用户添加
		userAdd($id,$email,$password);
	}
}









mysql_close($con);
?>