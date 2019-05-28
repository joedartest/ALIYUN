<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// PHP正则表达式
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.regexp.php';
// 发送邮件方法
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/send.email.php';

// 开启session
session_start();
// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];
// 缓存邮件验证码对象
$SCE = $_SESSION['captchaEmail'];


// 邮件地址
$email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
// 邮件验证码
$captchaEmail = !empty($_REQUEST['captchaEmail']) ? $_REQUEST['captchaEmail'] : '';
// pass
$pass = !empty($_REQUEST['pass']) ? $_REQUEST['pass'] : '';
// password
$password = !empty($_REQUEST['password']) ? $_REQUEST['password'] : '';


//------------------------
//       校验邮件
//------------------------
// 如果没有传 邮箱地址
if(!$email){
	returnData(array('success' => false, 'msg' => '请输入邮箱地址'));
	exit;
}
// 如果 邮箱地址不符合php正则
if(!emailExp($email)){
	returnData(array('success' => false, 'msg' => '邮箱地址输入不正确'));
	exit;
}

//------------------------
//   校验captchaEmail
//------------------------
// 如果没有传 captchaEmail
if(!$captchaEmail){
	returnData(array('success' => false, 'msg' => '请输入邮件验证码'));
	exit;
}

//------------------------
//   校验password
//------------------------
// 如果没有传 password
if(!$password){
	returnData(array('success' => false, 'msg' => '请输入密码'));
	exit;
}




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
// 	 比较邮件验证码是否正确
//-------------------------
if(strtolower($SCE[0]) == strtolower($captchaEmail)){
	$SCE = '';
}else{
	returnData(array('success' => false, 'msg' => '邮件验证码不正确'));
	exit;
}


// 不管是否有缓存的userid和userConfirmed 都删除！
unset($_SESSION['userid']);
unset($_SESSION['userConfirmed']);

//==================================
// 			用户 - 添加
//==================================
function userAdd($email,$pass,$password){
	// 校验邮箱是否存在
	$hasEmail = mysql_fetch_array(mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE email = '$email'"));
	// 如果邮箱存在
	if($hasEmail){
		returnData(array('success' => false, 'msg' => '该邮箱已注册'));
		exit;
	}
	// 插入数据库
	$sql = "INSERT INTO AUTISM_USER_LIST (id,email,pass,password) VALUES (NULL,'$email','$pass','$password')";

	if(mysql_query($sql)){
		$info = mysql_fetch_array(mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE email = '$email'"));
		if($info){
			// 设置缓存userid
			$_SESSION['userid'] = (int)$info['id'];
			$data = array(
				'id' => (int)$info['id']
				,'email' => $info['email']
			);
			returnData(array('success' => true, 'data' => $data));
		}else{
			returnData(array('success' => true));
		}
	}else{
		returnData(array('success' => false, 'msg' => '注册失败'));
	}
}


// 如果email和password都有传
if(!empty($email) && !empty($password)){
	// 用户添加
	userAdd($email,$pass,$password);
}



mysql_close($con);
?>