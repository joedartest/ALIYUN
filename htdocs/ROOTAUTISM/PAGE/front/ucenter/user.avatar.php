<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>用户中心 - 上传头像 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/ucenter?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.bottom.local.php'; ?>



<div class="_FS_ _MW_">
	<div class="_UCENTER_">
		<div class="contain">

			<div class="UC_CONTAIN BG">
				<div class="userAvatar">
					<avatar-dom ref="avatarDOM"></avatar-dom>
				</div>

				<div class="UPLOAD image">
					<component-upload-image ref="uploadImage" path="avatar" @submit-click="submitUploadAvatarClick"></component-upload-image>
				</div>

			</div>

			<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/ucenter.menu.php'; ?>


		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script src="/autism/js/component/upload.image?<?php echo time() ?>"></script>
<script src="/autism/js/front/ucenter/user.avatar.update?<?php echo time() ?>"></script>

</body>
</html>