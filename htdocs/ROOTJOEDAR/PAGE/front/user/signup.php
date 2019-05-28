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

	<div class="sign up" v-if="signinex">
		<div class="head"></div>
		<div class="form">
			<part-email ref="emailPart"></part-email>
			<part-captcha-image ref="captchaImagePart"></part-captcha-image>
			<part-captcha-email ref="captchaEmailPart"></part-captcha-email>
			<part-password ref="passwordPart"></part-password>
			<div class="part">
				<div class="button">
					<div class="btn" @click="signupSubmitClick"><span>注册</span></div>
				</div>
				<div class="text">
					<a href="/personal/page/user/signin">如果已有账号，请登录</a>
				</div>
			</div>
		</div>
	</div>

	<div class="sign up success" v-else>
		<div class="head"></div>
		<div class="form">
			<div class="part">
				<div class="put">
					<input type="text" placeholder="确认验证码">
					<div class="tip"></div>
				</div>
			</div>
			<div class="part">
				<div class="button">
					<div class="btn"><span>完成注册</span></div>
				</div>
				<div class="text">
					<span>我们已向您的邮箱发送了一封确认验证码邮件，请输入邮件的验证码以完成注册！</span>
				</div>
			</div>
		</div>
		<div class="form hide">
			<div class="part">
				<div class="button">
					<div class="btn"><span>登录</span></div>
				</div>
				<div class="text">
					<span>确认成功，请登录</span>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>
<script src="/personal/js/front/user/sign.up?<?php echo time(); ?>"></script>

</body>
</html>