<?php
// 开启session
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

// 服务器当前时间
$NOWTIME = $_SERVER['REQUEST_TIME'];
// 缓存邮件验证码对象
$SCE = $_SESSION['captchaEmail'];


// type = reg(注册) | edit(修改) | complete(完善资料)
empty($_REQUEST['type']) ? $type = '' : $type = $_REQUEST['type'];
// id = userId
empty($_REQUEST['id']) ? $id = '' : $id = (int)$_REQUEST['id'];

empty($_REQUEST['email']) ? $email = '' : $email = $_REQUEST['email'];
empty($_REQUEST['captchaEmail']) ? $captchaEmail = '' : $captchaEmail = $_REQUEST['captchaEmail'];
empty($_REQUEST['password']) ? $password = '' : $password = $_REQUEST['password'];


//==================================
//----------------------------------
// 			用户 - 添加
//----------------------------------
//==================================
function userAdd($id,$email,$password){
	//-------------------------
	// 	 校验邮箱是否存在
	//-------------------------
	$hasEmail = mysql_fetch_array(mysql_query("SELECT * FROM USER_INFO WHERE email = '$email'"));
	// 如果邮箱存在
	if($hasEmail){
		returnData(array('success' => false, 'msg' => '该邮箱已注册'));
		exit;

	// 如果邮箱不存在
	}else{
		$nickname = '';
		$headimg = '';
		$regdate = date('Y-m-d H:i:s',time());
		$sex = '';
		$age = '';
		$area = '';
		$interest = '';
		$whoyouare = '';
		$integral = 1;
		$grade = '';
		$verifyReg = 1;
		$verifyEdit = 1;

		$sql = "INSERT INTO USER_INFO (id,nickname,email,password,headimg,regdate,sex,age,area,interest,whoyouare,integral,grade,verifyReg,verifyEdit) 
				VALUES (NULL,'$nickname','$email','$password','$headimg','$regdate','$sex','$age','$area','$interest','$whoyouare','$integral','$grade','$verifyReg','$verifyEdit')";
		if(mysql_query($sql)){
			returnData(array('success' => true));
		}else{
			returnData(array('success' => false, 'msg' => '注册失败'));
		}
	}
}













//----------------------------------
// 			如果是注册
//----------------------------------
if($type == 'REG'){
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

















// mysql_close($con);
?>