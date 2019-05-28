<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>添加话题 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/subject.add?v=<?php echo time() ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/page.goTop.php'; ?>

<div class="_FS_ _MW_ margin">
	<div class="contain BG">
		<div class="_SUBJECT_ ADD">

			<div class="form">
				<item-input-title ref="itemInputTitle"></item-input-title>
				<item-ueditor ref="itemUeditor"></item-ueditor>
				<div class="item button">
					<div class="btns">
						<submit-button ref="submitButton"></submit-button>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/include/editor.u.php'; ?>
<script src="/autism/js/front/subject/add?<?php echo time() ?>"></script>

</body>
</html>