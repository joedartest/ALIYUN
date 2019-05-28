<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>用户中心 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/ucenter?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>

<div class="_FS_ _MW_">
	<div class="_UCENTER_">
		<div class="contain">

			<div class="UC_CONTAIN BG">
				<div class="ucHeadimg clearfix">
					<div class="avatar">
						<avatar-dom ref="avatarDOM"></avatar-dom>
					</div>
					<div class="info">
						<div class="_Table_">
							<div>
								<div class="textBig"><span class="nickName">新用户</span><span>，您好！</span></div>
								<div class="textSmall userEmail"><span>j****r@qq.com</span></div>
							</div>
						</div>
					</div>
					<div class="abs">
						<a href="/autism/page/ucenter/user.avatar" class="upload"></a>
					</div>
				</div>
			</div>

			<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/ucenter.menu.php'; ?>

			<div class="UC_CONTAIN BG">
				<div class="ucOther">
					ucOther
				</div>
			</div>

		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script type="text/javascript">
var UPLOADIMAGE = new Vue({
	el : '.UC_CONTAIN'
});
</script>
</body>
</html>