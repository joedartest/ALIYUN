<?php
// 半小时无操作退出登录
function ISOUT(){
	session_start();
	$outime = 1800;
	if(isset($_SESSION['userSigninTime']) && !empty($_SESSION['userSigninTime'])){
		if($_SESSION['userSigninTime'] && ($_SESSION['userSigninTime'] + $outime > time())){
			$_SESSION['userSigninTime'] = time();
			echo 0;
		}else{
			session_destroy();
			echo 1;
		}
	}else{
		echo 1;
	}
}
?>
<meta name="isout" content="<?php ISOUT() ?>">
<script src="/autism/js/front/user/isout?<?php echo time() ?>"></script>
