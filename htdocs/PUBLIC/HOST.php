<?php
function HOST($t){
	$h = $_SERVER['SERVER_NAME'];
	if(preg_match("/wwwj\./",$h)){
		if($t == 'B'){
			$str = 'WWWJ.COM.CN';
		}elseif($t == 'b'){
			$str = 'wwwj.com.cn';
		}elseif($t == 'n'){
			$str = 'wwwj';
		}
	}elseif(preg_match("/joedar\./",$h)){
		if($t == 'B'){
			$str = 'JOEDAR.COM';
		}elseif($t == 'b'){
			$str = 'joedar.com';
		}elseif($t == 'n'){
			$str = 'joedar';
		}
	}elseif(preg_match("/zmean\./",$h)){
		if($t == 'B'){
			$str = 'ZMEAN.COM';
		}elseif($t == 'b'){
			$str = 'zmean.com';
		}elseif($t == 'n'){
			$str = 'zmean';
		}
	}else{
		$str = $h;
	}
	return $str;
}
?>