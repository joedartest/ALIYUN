<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>会员登录 - JOEDAR</title>
<link rel="stylesheet" type="text/css" href="/personal/css/user.sign?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/header.joedar.php'; ?>

<div class="_FS_ _MW_ _SIGN_">
	<div class="sign setPassword">
		<div class="head"></div>
		<div class="form hide">
			<div class="part">
				<div class="put">
					<input type="password" placeholder="请输入新的密码">
					<div class="tip"></div>
				</div>
			</div>
			<div class="part">
				<div class="put">
					<input type="password" placeholder="请确认新的密码">
					<div class="tip"></div>
				</div>
			</div>
			<div class="part">
				<div class="button">
					<div class="btn"><span>确定</span></div>
				</div>
			</div>
		</div>
		<div class="form">
			<div class="part">
				<div class="button">
					<a class="btn" href="/personal/page/user/signin"><span>登录</span></a>
				</div>
				<div class="text">
					<span>新密码已设置成功，请登录</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>

</body>
</html>