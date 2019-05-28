<?php
// 开启session
session_start();
function signinCheck(){
	if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])){
		return true;
	}else{
	    return false;
	}
}
?>