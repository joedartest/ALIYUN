<?php
$host = $_SERVER['SERVER_NAME'];
if($host == 'wwwj.com.cn' || $host == 'wwwj.com'){
	// include 'index_wwwj.php';
	include 'index_autism.php';
}
elseif($host == 'www.wwwj.com.cn'){
	Header("Location: http://wwwj.com.cn");
}
elseif($host == 'www.joedar.com' || $host == 'joedar.com' || $host == 'www.joedar'){
	include 'index_joedar.php';
}
elseif($host == 'www.zmean.com' || $host == 'zmean.com' || $host == 'www.zmean'){
	include 'index_zmean.php';
}
elseif($host == 'localhost' || $host == '192.168.1.184'){
	include 'index_wwwj.php';
}

elseif($host == 'www.myunmei.com'
		|| $host == 'www.myunmei.net'
		|| $host == 'www.myunmei.cn'
		|| $host == 'www.myunmei.cc'
		|| $host == 'myunmei.com'
		|| $host == 'myunmei.net'
		|| $host == 'myunmei.cn'
		|| $host == 'myunmei.cc'
		){
	include 'index_myunmei.php';
}
?>