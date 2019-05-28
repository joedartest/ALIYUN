var ADMIN = new Vue({
	data : {
		folder : location.pathname.replace(/^\//,'').split('/')[2]
		,file : location.pathname.replace(/^\//,'').split('/')[3]
	}
});


var adminHeader = new Vue({
	el : '.ADMINHEADER'
	,data : {
		logout : '退出'
		,adminUserName : ''
	}
	,beforeCreate : function(){
		// 判断是否登录
		;(function(){
			var param = {url : '/apply/admin/joedar.isLogin', data : ''};
			JOEDAR.doPostAjax(param,function(data){
				if(data.success == 'true'){this.adminHeader.adminUserName = data.data.username}
				else{location.href = '/personal/admin/login'}
			});
		}());
	}
	,created : function(){
		// 设置页面名称
		this.setPageName();
	}
	,methods : {
		// 退出按钮点击事件
		adminLogout : function(){
			var param = {url : '/apply/admin/joedar.logout', data : ''};
			JOEDAR.doPostAjax(param,this.adminLogoutFn);
		}
		,adminLogoutFn : function(data){
			if(data.success == 'true'){location.href = '/personal/admin/login'}
		}

		// 设置页面名称
		,setPageName : function(){
			var folder = ADMIN.folder, file = ADMIN.file;
			if(folder == 'index'){this.pageName = '首页'}
			else if(folder == 'admin' && file == 'list'){this.pageName = '管理员-列表'}
			else if(folder == 'admin' && file == 'add'){this.pageName = '管理员-添加/修改'}
			else if(folder == 'stackArticle' && file == 'list'){this.pageName = '技术栈文章-列表'}
			else if(folder == 'stackArticle' && file == 'add'){this.pageName = '技术栈文章-添加/修改'}
		}

	}
});


var adminMenu = new Vue({
	el : '.MENU'
	,data : {
		radios : {
			adminChecked : false
			,stackArticleChecked : false
		}
		,active : {
			admin : {
				list : ''
				,add : ''
			}
			,stackArticle : {
				list : ''
				,add : ''
			}
		}
	}

	,created : function(){
		// menu的radio选中
		this.menuRadioChecked();
		// menu的菜单激活
		this.menuClassActive();
	}
	,methods : {
		// menu的radio选中
		menuRadioChecked : function(){
			var module = ADMIN.folder;
			if(module == 'admin'){this.radios.adminChecked = true}
			else if(module == 'stackArticle'){this.radios.stackArticleChecked = true}
		}
		// menu的菜单激活
		,menuClassActive : function(){
			var module = ADMIN.folder, flie = ADMIN.file;
			if(module == 'admin' && flie == 'list'){this.active.admin.list = 'active'}
			else if(module == 'admin' && flie == 'add'){this.active.admin.add = 'active'}
			else if(module == 'stackArticle' && flie == 'list'){this.active.stackArticle.list = 'active'}
			else if(module == 'stackArticle' && flie == 'add'){this.active.stackArticle.add = 'active'}
		}
	}

});








