<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// PHP正则表达式
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.regexp.php';

$email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';

if(!$email){
	returnData(array('success' => false, 'msg' => 'no email'));
	exit;
}

if(!emailExp($email)){
	returnData(array('success' => false, 'msg' => 'email is incorrect'));
	exit;
}

function emailCheck($email){
	// 方法一
	// $sql = "SELECT email FROM AUTISM_USER_LIST WHERE email='$email'";
	// $result = mysql_query($sql);
	// $rows = mysql_num_rows($result);
	// if($rows > 0){$obj = array('has' => true);}
	// else{$obj = array('has' => false);}

    // 方法二
	$hasEmail = mysql_fetch_array(mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE email='$email'"));
	if($hasEmail){$obj = array('has' => true);}
	else{$obj = array('has' => false);}

 	returnData(array('success' => true, 'data' => $obj));
}
emailCheck($email);



mysql_close($con);
?>