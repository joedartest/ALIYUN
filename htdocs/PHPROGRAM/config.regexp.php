<?php

// 正则表达式 - email
function emailExp($str){
	// $pattern = '/^\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}$/';
	//@前面的字符可以是英文字母和._- ，._-不能放在开头和结尾，且不能连续出现
	$pattern = '/^[a-z0-9]+([._-][a-z0-9]+)*@([0-9a-z]+\.[a-z]{2,14}(\.[a-z]{2})?)$/i';
	if(preg_match($pattern,$str)){
    	return true;
	}else{
    	return false;
	}
}

// 正则表达式 - username
function usernameExp($str){
	$pattern = '/^[A-Za-z0-9]+$|^[A-Za-z0-9]{4,40}$/i';
	if(preg_match($pattern,$str)){
    	return true;
	}else{
    	return false;
	}
}

?>