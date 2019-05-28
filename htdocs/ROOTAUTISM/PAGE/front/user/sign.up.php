<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>会员注册 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/user.sign?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/hidden.input.password.php'; ?>


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
					<a href="/autism/page/user/sign.in">如果已有账号，请登录</a>
				</div>
			</div>
		</div>
	</div>

	<div class="sign up success" v-else>
		<div class="head"></div>
		<div class="form" v-if="captchaConfirmex">
			<part-captcha-confirm ref="captchaConfirmPart"></part-captcha-confirm>
			<div class="part">
				<div class="button">
					<div class="btn" @click="signupConfirmSubmitClick"><span>完成注册</span></div>
				</div>
				<div class="text">
					<span>我们已向您的邮箱发送了一封确认验证码邮件，请输入邮件的验证码以完成注册！</span>
				</div>
			</div>
		</div>
		<div class="form" v-else>
			<div class="part">
				<div class="button">
					<div class="btn"><a href="/autism/page/user/sign.in">登录</a></div>
				</div>
				<div class="text">
					<span>确认成功，请登录</span>
				</div>
			</div>
		</div>
	</div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script src="/autism/js/front/user/sign.up?<?php echo time(); ?>"></script>
</body>
</html>