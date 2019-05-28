<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// PHP正则表达式
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.regexp.php';

// 开启session
session_start();

// 登录名
$signinName = !empty($_REQUEST['signinName']) ? $_REQUEST['signinName'] : '';
// 登录密码
$password = !empty($_REQUEST['password']) ? $_REQUEST['password'] : '';

if(!$signinName){
	returnData(array('success' => false, 'msg' => '请输入登录名'));
	exit;
}
if(!$password){
	returnData(array('success' => false, 'msg' => '请输入密码'));
	exit;
}

// 判断登录名类型 email or username
$email = emailExp($signinName) ? $signinName : '';
$username = usernameExp($signinName) ? $signinName : '';


function signinCheck($email,$username,$password){
	//----------------------
	//    如果是邮箱登录
	//----------------------
	if($email){
		$email_check_query = mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE email='$email' limit 1");
		$email_result = mysql_fetch_array($email_check_query);
		if($email_result){
			$password_check_query = mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE password='$password' limit 1");
			$password_result = mysql_fetch_array($password_check_query);
			if(!$password_result){
				returnData(array('success' => false, 'msg' => '密码不正确'));
				exit;
			}
			// 登录成功
			$_SESSION['userid'] = $email_result['id'];
			$_SESSION['userEmail'] = $email_result['email'];
			$_SESSION['userConfirmed'] = $email_result['confirmed'];
			// 如果没有确认邮件验证码
			if($email_result['confirmed'] == 0){
				returnData(array('success' => false, 'msg' => 'noConfirmed'));
				exit;
			}
			// 登录成功的时间
			$_SESSION['userSigninTime'] = time();
			returnData(array('success' => true));
		}else{
			returnData(array('success' => false, 'msg' => '登录名错误或不存在'));
			exit;
		}
	}

	//----------------------
	//   如果是用户名登录
	//----------------------
	if($username){
		$username_check_query = mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE username='$username' limit 1");
		$username_result = mysql_fetch_array($username_check_query);
		if($username_result){
			$password_check_query = mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE password='$password' limit 1");
			$password_result = mysql_fetch_array($password_check_query);
			if(!$password_result){
				returnData(array('success' => false, 'msg' => '密码不正确'));
				exit;
			}
			// 登录成功
			$_SESSION['userid'] = $username_result['id'];
			$_SESSION['username'] = $username_result['username'];
			$_SESSION['userEmail'] = $username_result['email'];
			$_SESSION['userConfirmed'] = $username_result['confirmed'];
			// 如果没有确认邮件验证码
			if($username_result['confirmed'] == 0){
				returnData(array('success' => false, 'msg' => 'noConfirmed'));
				exit;
			}
			// 登录成功的时间
			$_SESSION['userSigninTime'] = time();
			returnData(array('success' => true));
		}else{
			returnData(array('success' => false, 'msg' => '登录名错误或不存在'));
			exit;
		}
	}
}
signinCheck($email,$username,$password);


mysql_close($con);
?>