<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>会员注册 - JOEDAR</title>
<link rel="stylesheet" type="text/css" href="/personal/css/user.sign?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/header.joedar.php'; ?>

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
					<div class="captchaImg"><img src="/apply/captcha/image.create"></div>
					<input type="text" placeholder="请输入验证码">
					<div class="tip"></div>
				</div>
			</div>
			<div class="part">
				<div class="button">
					<div class="btn"><span>确定</span></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>

</body>
</html>