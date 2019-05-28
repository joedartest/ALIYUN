<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>管理员后台-文章-(添加/修改)</title>
<link rel="stylesheet" type="text/css" href="/CSS.form.white?<?php echo time() ?>">
<link rel="stylesheet" type="text/css" href="/personal/css/platform.global?<?php echo time() ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/header.php'; ?>


<div class="_FS_ _ADMINCONTAIN_">
	<div class="part left">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/leftMenu.php'; ?>
	</div>
	<div class="part right">
		

		<div class="contain forms stackArticle add">

			<div class="_FORM_" v-if="formStatus">
				<div class="status">
					<h2 class="text">{{ submitBtnText }}成功</h2>
					<div class="buttons">
						<a class="btn red" href="/personal/admin/stackArticle/add">继续添加</a>
						<a class="btn blue" href="/personal/admin/stackArticle/list">查看列表</a>
					</div>
				</div>
			</div>

			<div class="_FORM_" v-else>
				<ul>
					<li><span class="must">文章标题</span></li>
					<li><title-input ref="titleInput"></title-input></li>
				</ul>
				<ul>
					<li><span class="must">作者</span></li>
					<li><author-input ref="authorInput"></author-input></li>
				</ul>

				<ul>
					<li><span>来源</span></li>
					<li><source-input ref="sourceInput"></source-input></li>
				</ul>

				<ul>
					<li><span>来源链接</span></li>
					<li><source-link-input ref="sourceLinkInput"></source-link-input></li>
				</ul>
				
				<ul>
					<li><span class="must">文章分类</span></li>
					<li><stack-article-category ref="stackArticleCategorySelect"></stack-article-category></li>
				</ul>

				<ul>
					<li><span class="must">内容</span></li>
					<li>
						<!-- ueditor区域 -->
						<div class="ueditorBox">
							<script id="ueditor" type="text/plain" style="height:400px;"></script>
						</div>
					</li>
				</ul>



				<ul>
					<li></li>
					<li>
						<div class="buttons">
							<a class="btn blue" @click="submitClick">{{ submitBtnText }}</a>
						</div>
					</li>
				</ul>

			</div>

		</div>


	</div>
</div>




<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.widget.ueditor.js.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/platformGlobal.php'; ?>
<script src="/JS.module.global.ueditor.vue?<?php echo time() ?>"></script>
<script src="/personal/js/platform.stackArticle.add?<?php echo time() ?>"></script>

</body>
</html>
