<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/meta.php'; ?>
<title>话题 - <?php echo HOST('B') ?></title>
<link rel="stylesheet" type="text/css" href="/autism/css/subject.list?v=<?php echo time() ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/header.autism.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/page.goTop.php'; ?>

<div class="_FS_ _MW_ margin float clearfix">
	<div class="contain BG">
		<div class="_SUBJECT_ LIST">

			<div class="addBtn" :class="addBtnShow">
				<div class="buttonArea">
					<a class="btn add" href="/autism/page/subject/add"><span>添加话题</span></a>
				</div>
			</div>

			<tab-cards ref="tabCards"></tab-cards>
			<subject-list ref="subjectList"></subject-list>

		</div>
	</div>

	<div class="contain BG">
		adsafds
	</div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/INCLUDES/footer.autism.vue.php'; ?>
<script src="/autism/js/front/subject/list?<?php echo time() ?>"></script>

</body>
</html>