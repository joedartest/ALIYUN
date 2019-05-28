<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>会员登录 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/user.sign?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/hidden.input.password.php'; ?>


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
					<a href="/autism/page/user/sign.up">未有账号？请先注册</a>
				</div>
				<div class="text">
					<a href="/autism/page/user/sign.find">忘记密码？请找回</a>
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

<div><span></span></div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script src="/autism/js/front/user/sign.in?<?php echo time(); ?>"></script>
</body>
</html>