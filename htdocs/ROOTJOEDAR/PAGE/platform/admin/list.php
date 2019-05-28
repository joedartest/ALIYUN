<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>管理员后台-管理员-列表</title>
<link rel="stylesheet" type="text/css" href="/personal/css/platform.global?<?php echo time() ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/header.php'; ?>


<div class="_FS_ _ADMINCONTAIN_">
	<div class="part left">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/leftMenu.php'; ?>
	</div>
	<div class="part right">
		<div class="contain">
			<div class="listTable">
				<table width="100%" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th><input type="checkbox"></th>
							<th>用户名</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="checkbox"><input type="checkbox"></td>
							<td>admin</td>
							<td class="dos">
								<div>
									<a class="btn">修改密码</a>
									<a class="btn">删除</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/platformGlobal.php'; ?>


</body>
</html>
