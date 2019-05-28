<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>找回密码 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/tutorial?v=<?php echo time() ?>">
<link rel="stylesheet" type="text/css" href="/autism/css/tutorial.list?v=<?php echo time() ?>">
<link rel="stylesheet" type="text/css" href="/autism/css/user.sign?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/hidden.input.password.php'; ?>


<div class="_FS_ _MW_ _SIGN_">
	<div class="sign find">
		<div class="head"></div>
		<div class="form">
			<div class="part">
				<div class="put">
					<input type="text" placeholder="请输入您注册的邮箱地址">
					<div class="tip"></div>
				</div>
			</div>
			<div class="part">
				<div class="put">
					<div class="captchaImg"><img src="/APPLY/captcha/image.create"></div>
					<input type="text" placeholder="请输入验证码">
					<div class="tip"></div>
				</div>
			</div>
			<div class="part">
				<div class="button">
					<div class="btn"><span>确定</span></div>
				</div>
				<div class="text">
					<a href="/autism/page/user/sign.in">如果记得密码，请登录</a>
				</div>
				<div class="text">
					<a href="/autism/page/user/sign.up">如果无账号，请注册</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>

</body>
</html>