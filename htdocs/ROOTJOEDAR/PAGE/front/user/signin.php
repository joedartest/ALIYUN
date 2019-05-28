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
	<div class="sign in">
		<div class="head"></div>
		<div class="form" v-show="formSignin">
			<part-signin-name ref="signinNamePart"></part-signin-name>
			<part-password ref="passwordPart"></part-password>
			<div class="part">
				<div class="button">
					<div class="btn" @click="signinSubmitClick"><span>登录</span></div>
				</div>
				<div class="text">
					<a href="/personal/page/user/signup">未有账号？请先注册</a>
				</div>
				<div class="text">
					<a href="/personal/page/user/find">忘记密码？请找回</a>
				</div>
			</div>
		</div>
		<div class="form" v-show="formCaptchaEmail">
			<part-captcha-confirm ref="captchaConfirmPart"></part-captcha-confirm>
			<div class="part">
				<div class="button">
					<div class="btn"  @click="captchaConfirmSubmitClick"><span>确定</span></div>
				</div>
				<div class="text">
					<span>我们已向您的邮箱发送了一封确认验证码邮件，请输入邮件的确认验证码以登录！</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>
<script src="/personal/js/front/user/sign.in?<?php echo time(); ?>"></script>

</body>
</html>