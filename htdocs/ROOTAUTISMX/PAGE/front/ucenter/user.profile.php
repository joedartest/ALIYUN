<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>用户中心 - 完善资料 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/ucenter?<?php echo time(); ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.bottom.local.php'; ?>

<div class="_FS_ _MW_">
	<div class="_UCENTER_">
		<div class="contain">

			<div class="UC_CONTAIN BG broad">
				<div class="userProfile">
					<div class="_FORM_">
						<part-email ref="partEmail"></part-email>
						<part-user-name ref="partUsername"></part-user-name>
						<part-nick-name ref="partNickname"></part-nick-name>
						<part-baby-name ref="partBabyname"></part-baby-name>
						<part-baby-sex ref="partBabysex"></part-baby-sex>
						<part-baby-birth ref="partBabybirth"></part-baby-birth>
						<part-baby-parent ref="partBabyparent"></part-baby-parent>

						<div class="button">
							<div class="btns">
								<submit-button ref="submitButton"></submit-button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/ucenter.menu.php'; ?>

		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script src="/autism/js/front/ucenter/user.profile?<?php echo time() ?>"></script>

</body>
</html>