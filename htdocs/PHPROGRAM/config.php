<?php
header("Content-type: text/html; charset=utf-8");

//-------------------------------------
// freehostia.com - autism.joedar.com
//-------------------------------------
// define('DB_HOST','localhost');
// define('DB_USER','joecha96_autism');
// define('DB_PASS','zhang456456');
// $con = mysql_connect(DB_HOST,DB_USER,DB_PASS);	// 定义变量为连接数据库
// mysql_query('set names utf8');					// 设置编码
// if(!$con){										// 如果连接不成功
// 	die('Could not connect: ' . mysql_error());	// 退出程序
// }
// mysql_select_db("joecha96_autism",$con);		// 连接数据表


//-------------------------------------
// aliyun数据库
//-------------------------------------
define('DB_HOST','qdm106450531.my3w.com');
define('DB_USER','qdm106450531');
define('DB_PASS','Zhang456$%^');
$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);	// 定义变量为连接数据库
mysql_query('set names utf8');					// 设置编码
if(!$con){										// 如果连接不成功
	die('Could not connect: ' . mysql_error());	// 退出程序
}
mysql_select_db("qdm106450531_db",$con);		// 连接数据表


// -------------------------------------
// 本地数据库
// -------------------------------------
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','root');
// $con = mysql_connect(DB_HOST,DB_USER,DB_PASS);	// 定义变量为连接数据库
// mysql_query('set names utf8');					// 设置编码
// if(!$con){										// 如果连接不成功
// 	die('Could not connect: ' . mysql_error());	// 退出程序
// }
// mysql_select_db("qdm106450531_db",$con);		// 连接数据表


function _USERID_(){
	// session_start();
	return (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) ? (int)$_SESSION['userid'] : null;
}





?>