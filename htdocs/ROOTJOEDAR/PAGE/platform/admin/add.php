<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>管理员后台-管理员-(添加/修改)</title>
<link rel="stylesheet" type="text/css" href="/CSS.form.white?<?php echo time() ?>">
<link rel="stylesheet" type="text/css" href="/personal/css/admin.global?<?php echo time() ?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/header.php'; ?>


<div class="_FS_ _ADMINCONTAIN_">
	<div class="part left">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/leftMenu.php'; ?>
	</div>
	<div class="part right">

		<div class="contain">
			
			<div class="_FORM_">
				<ul>
					<li><span class="must">管理员账号</span></li>
					<li>
						<div class="put input">
							<input type="text" placeholder="请输入管理员账号">
							<i class="tip"></i>
						</div>
					</li>
				</ul>
				<ul>
					<li><span class="must">管理员密码</span></li>
					<li>
						<div class="put input short">
							<input type="password" placeholder="请输入管理员密码">
							<i class="tip"></i>
							<div class="strength s0"></div>
						</div>
					</li>
				</ul>
				<ul>
					<li><span class="must">标题</span></li>
					<li>
						<div class="put input long">
							<span class="zishu"><b class="zs">0</b>/30</span>
							<input type="text" placeholder="请输入标题，字数限30个字" data-zs="30">
							<i class="tip"></i>
						</div>
					</li>
				</ul>
				<ul>
					<li><span class="must">年龄段</span></li>
					<li>
						<div class="put select">
							<select>
								<option value="">请选择年龄段</option>
								<option value="1970">70后</option>
								<option value="1980">80后</option>
								<option value="1990">90后</option>
								<option value="2000">00后</option>
								<option value="2010">10后</option>
							</select>
							<i class="tip"></i>
						</div>
					</li>
				</ul>
				<ul>
					<li><span class="must">地区</span></li>
					<li>
						<div class="put select">
							<select>
								<option value="">请选择</option>
								<option value="北京">北京</option>
								<option value="上海">上海</option>
								<option value="广东">广东</option>
								<option value="四川">四川</option>
								<option value="浙江">浙江</option>
							</select>
							<select>
								<option value="">请选择</option>
								<option value="杭州" data-id="383">杭州</option>
								<option value="湖州" data-id="384">湖州</option>
								<option value="嘉兴" data-id="385">嘉兴</option>
								<option value="金华" data-id="386">金华</option>
								<option value="丽水" data-id="387">丽水</option>
								<option value="宁波" data-id="388">宁波</option>
								<option value="绍兴" data-id="389">绍兴</option>
								<option value="台州" data-id="390">台州</option>
								<option value="温州" data-id="391">温州</option>
								<option value="舟山" data-id="392">舟山</option>
								<option value="衢州" data-id="393">衢州</option>
							</select>
							<i class="tip"></i>
						</div>
					</li>
				</ul>
				<ul>
					<li><span class="must">文章类型</span></li>
					<li>
						<div class="radioCheckbox">
							<input type="checkbox" class="none" id="more-type">
							<span class="more"><label for="more-type"></label></span>
							<div>
								<label><input type="radio" class="none" name="type" value="言情小说"><span>言情小说</span></label>
								<label><input type="radio" class="none" name="type" value="长篇大论"><span>长篇大论</span></label>
								<label><input type="radio" class="none" name="type" value="短篇报道"><span>短篇报道</span></label>
								<label><input type="radio" class="none" name="type" value="时事新闻"><span>时事新闻</span></label>
								<label><input type="radio" class="none" name="type" value="言情小说"><span>言情小说</span></label>
								<label><input type="radio" class="none" name="type" value="长篇大论"><span>长篇大论</span></label>
								<label><input type="radio" class="none" name="type" value="短篇报道"><span>短篇报道</span></label>
								<label><input type="radio" class="none" name="type" value="时事新闻"><span>时事新闻</span></label>
								<label><input type="radio" class="none" name="type" value="言情小说"><span>言情小说</span></label>
								<label><input type="radio" class="none" name="type" value="长篇大论"><span>长篇大论</span></label>
								<label><input type="radio" class="none" name="type" value="短篇报道"><span>短篇报道</span></label>
								<label><input type="radio" class="none" name="type" value="时事新闻"><span>时事新闻</span></label>
								<label><input type="radio" class="none" name="type" value="言情小说"><span>言情小说</span></label>
								<label><input type="radio" class="none" name="type" value="长篇大论"><span>长篇大论</span></label>
								<label><input type="radio" class="none" name="type" value="短篇报道"><span>短篇报道</span></label>
								<label><input type="radio" class="none" name="type" value="时事新闻"><span>时事新闻</span></label>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					<li><span class="must">风格</span></li>
					<li>
						<div class="radioCheckbox">
							<input type="checkbox" class="none" id="more-fengge">
							<span class="more"><label for="more-fengge"></label></span>
							<div>
								<label><input type="checkbox" name="fengge" class="none" value="城事"><span>城事</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="乡村"><span>乡村</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国内"><span>国内</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国外"><span>国外</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="宇宙"><span>宇宙</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="城事"><span>城事</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="乡村"><span>乡村</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国内"><span>国内</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国外"><span>国外</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="宇宙"><span>宇宙</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="城事"><span>城事</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="乡村"><span>乡村</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国内"><span>国内</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国外"><span>国外</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="宇宙"><span>宇宙</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="城事"><span>城事</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="乡村"><span>乡村</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国内"><span>国内</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="国外"><span>国外</span></label>
								<label><input type="checkbox" name="fengge" class="none" value="宇宙"><span>宇宙</span></label>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					<li><span>备注</span></li>
					<li>
						<div class="put textarea long">
							<textarea placeholder="请填写备注，500字以内" data-zs="500"></textarea>
							<i class="tip"></i>
						</div>
					</li>
				</ul>

				<ul>
					<li></li>
					<li>
						<div class="buttons">
							<a class="btn white">提交</a>
							<a class="btn blue">确定下单</a>
							<a class="btn gray">修改</a>
							<a class="btn orange">提交</a>
							<a class="btn red">提交</a>
							<a class="btn disabled">提交</a>
						</div>
					</li>
				</ul>
				
			</div>



		</div>
	</div>
</div>




<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/platformGlobal.php'; ?>


</body>
</html>
