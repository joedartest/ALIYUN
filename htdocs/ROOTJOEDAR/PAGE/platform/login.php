<!DOCTYPE html>
<html>
<head>
<!-- <meta name="theme-color" content="#222222"> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/joedar.php'; ?>
<title>管理员登录 - JOEDAR</title>
<style type="text/css">
._ADMIN_ {display:table; margin:0 auto; height:70%;}
._ADMIN_ > .cell {display:table-cell; vertical-align:middle;}
._ADMIN_ .form {padding:1.5em; width:15em; background:#202020; border-radius:.6em;}
._ADMIN_ .form > .box {width:100%;}
._ADMIN_ .form > .box > * {margin-top:1em;}
._ADMIN_ .form > .box > *:first-child {margin-top:0;}
._ADMIN_ .form > .box > * > input {width:100%; font-size:1.15em; height:2em; border:0; border-bottom:1px #666 solid; background:none; color:orange;}
._ADMIN_ .form > .box > * > .submit {display:table; margin:0 auto; width:50%; padding:.4em 0; border-radius:.3em; text-align:center; background:orange; color:#fff;}
</style>
</head>
<body>


<div class="_ADMIN_ _FS_">
	<div class="cell">
		<div class="form">
			<div class="box" @keyup.enter="submitBtnClick">
				<div><input type="text" v-model="username" placeholder="username"></div>
				<div><input type="password" v-model="password" placeholder="password"></div>
				<div><a class="submit" @click="submitBtnClick">login</a></div>
			</div>
		</div>
	</div>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/view/footer.global.joedar.js.vue.php'; ?>

<script type="text/javascript">
	
var admin = new Vue({
	el : '.form'
	,data : {
		username : ''
		,password : ''

		,clickTF : true
	}
	,beforeCreate : function(){
		// 判断是否登录
		;(function(){
			var param = {url : '/apply/admin/joedar.isLogin', data : ''};
			JOEDAR.doPostAjax(param,function(data){
				if(data.success == 'true'){location.href = '/personal/admin/index'}
			});
		}());
	}
	,methods : {
		submitBtnClick : function(){
			// 校验用户名
			if(!this.username) return;
			// 校验密码
			if(!this.password) return;
			
			// 以防二次点击
			if(!this.clickTF) return;
			this.clickTF = false;

			// 构建formData
			this.createFormData();
			// 管理员登录
			this.adminLogin();
		}

		// 构建formData
		,createFormData : function(){
			this.formData = {};
			this.formData.username = this.username;
			this.formData.password = md5(this.password);
		}

		// 管理员登录
		,adminLogin : function(){
			var param = {url : '/apply/admin/joedar.login', data : this.formData};
			JOEDAR.doPostAjax(param,this.adminLoginFn);
		}
		,adminLoginFn : function(data){
			this.clickTF = true;
			location.href = '/personal/admin/index';
		}
	}
});

</script>

</body>
</html>
