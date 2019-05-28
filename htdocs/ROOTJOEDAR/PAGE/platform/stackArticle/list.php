<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>管理员后台-文章-列表</title>
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

			<div class="listFilter">
				<div class="filters">
					<div><input type="text" placeholder="请输入标题"></div>
				</div>
				<div class="filterBtn">
					<span class="btn">筛选</span>
				</div>
			</div>

			<div class="listOperate">
				<div class="operateBtn">
					<span class="btn">推荐</span>
					<span class="btn">置顶</span>
				</div>
			</div>

			<div class="listTable stackArticleList">
				<table width="100%" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th><input type="checkbox" title="全选"></th>
							<th>标题</th>
							<th>作者</th>
							<th>分类</th>
							<th>来源</th>
							<th>点赞数</th>
							<th>评论数</th>
							<th>(创建/更新)时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr is="list-tr" v-for="item in list" :item="item"></tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>




<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/ROOTJOEDAR/PAGE/platform/include/platformGlobal.php'; ?>
<script src="/personal/js/platform.stackArticle.list?<?php echo time() ?>"></script>

<!-- <script src="/JS.module.global.poplayer.vue?<?php echo time() ?>"></script> -->


<div class="_FS_">
<style type="text/css">
.POPLAYER {display:none;}
input[type="checkbox"]#POPLAYER:checked + .POPLAYER {display:block;}
.POPLAYER > .bg {position:fixed; z-index:51; width:100%; height:100%; left:0; top:0; background:rgba(0,0,0,.4);}
.POPLAYER > .bg {display:table; color:#333;}
.POPLAYER > .bg > .cell {display:table-cell; vertical-align:middle;}
.POPLAYER > .bg > .cell > .con {display:table; margin:0 auto; background:#fff; border-radius:.3em;}
.POPLAYER > .bg > .cell > .con > .pop {position:relative; padding:1em 1.5em;}
.POPLAYER .pop > label.close {position:absolute; z-index:2; top:0; right:0;}
.POPLAYER .pop > label.close {width:2em; height:2em; line-height:2em; text-align:center;}
.POPLAYER .pop > label.close:before {font-family:awesome; content:"\f00d"; font-size:1.2em;}
.POPLAYER .pop > .text {text-align:center;}
.POPLAYER .pop > .btns {display:table; margin:0 auto; margin-top:1em;}
.POPLAYER .pop > .btns > label {display:inline-block; margin:0 .5em; height:2em; line-height:2em; padding:0 1.5em; border-radius:.3em;}
.POPLAYER .pop > .btns > label {color:#fff; cursor:pointer;}
.POPLAYER .pop > .btns > label.darkorange {background:darkorange;}
.POPLAYER .pop > .btns > label.red {background:#f33;}
.POPLAYER .pop > .btns > label.gray {background:#999;}

.POPLAYER .pop.alert,
.POPLAYER .pop.confirm {min-width:16em; max-width:40em;}

</style>
	<div class="_POPLAYER_">
		<input type="checkbox" class="none" id="POPLAYER" v-model="checked">
		<div class="POPLAYER">
			<div class="bg"><div class="cell"><div class="con">

				<div class="pop tip" v-show="tip.show">
					<div class="text">{{ tip.text }}</div>
				</div>

				<div class="pop alert" v-show="alert.show">
					<!-- <label class="close" for="POPLAYER" @click="closeClick"></label> -->
					<div class="text">{{ alert.text }}</div>
					<div class="btns">
						<label class="darkorange" for="POPLAYER" @click="closeClick"><span>确定</span></label>
					</div>
				</div>

				<div class="pop confirm" v-show="confirm.show">
					<!-- <label class="close" for="POPLAYER" @click="closeClick"></label> -->
					<div class="text">{{ confirm.text }}</div>
					<div class="btns">
						<label class="red" @click="confirmClick"><span>确认</span></label>
						<label class="gray" for="POPLAYER" @click="closeClick"><span>取消</span></label>
					</div>
				</div>
				
			</div></div></div>
		</div>
	</div>
</div>
<script>
var POPLAYER = new Vue({
	el : '._POPLAYER_'
	,data : {
		checked : false
		,tip : {show : false, text : ''}
		,alert : {show : false, text : ''}
		,confirm : {show : false, text : ''}
	}
	,methods : {
		closeClick : function(){
			this.checked = false;
			this.tip.show = false;
			this.tip.text = '';
			this.alert.show = false;
			this.alert.text = '';
			this.confirm.show = false;
			this.confirm.text = '';
		}
		,confirmClick : function(){
			var vc = this.vueComponent;
			vc.confirmClick();
		}
	}
});
</script>


</body>
</html>
