// avatarDOM
Vue.component('avatar-dom',{
	data : function(){
		return {
			hasImage : 'no', background : ''
		}
	}
	,template : '<div class="avatarDOM"><div class="img" :class="hasImage" :style="background"></div></div>'
	,created : function(){
		// 获取头像
		this.GET();
	}
	,methods : {
		// 获取头像
		GET : function(){
			// 如果未登录 则返回
			if(ISOUT) return;
			// 如果有头像 显示头像 否则获取头像
			USR.DATA.avatar ? this.show() : this.avatarGet();
		}
		,avatarGet : function(){
			var param = {url : '/autism/apply/front/user/avatar.get', data : {}};
			JOEDAR.doPostAjax(param,this.avatarGetFn);
		}
		,avatarGetFn : function(data){
			if(data.success == 'true'){USR.DATA.avatar = data.data.img}
			else{delete USR.DATA.avatar}
			USR.set();
			// 显示头像
			this.show();
		}
		// 显示头像
		,show : function(img){
			var avatar = USR.DATA.avatar;
			if(avatar){
				this.hasImage = 'yes';
				this.background = 'background:url('+avatar+') center center / cover no-repeat;';
			}else{
				this.hasImage = 'no';
				this.background = '';
			}
		}
	}
});



// headerUsr
Vue.component('header-usr',{
	data : function(){
		return {ed : !ISOUT}
	}
	,template : '<div>'
					+'<div class="usr ed" v-if="ed">'
						+'<div class="USET">'
							+'<input type="checkbox" class="none" id="USRHEAD">'
							+'<div class="avatar">'
								+'<label for="USRHEAD">'
									+'<avatar-dom ref="avatarDOM"></avatar-dom>'
								+'</label>'
							+'</div>'
							+'<div class="bg tran03"><label for="USRHEAD"></label></div>'
							+'<div class="uset tran03">'
								+'<ul>'
									+'<li><a class="u center" href="/autism/page/ucenter">我的</a></li>'
									+'<li><a class="u set" href="/autism/page/ucenter/set.account">设置</a></li>'
									+'<li><a class="u signout" @click="signoutClick">退出</a></li>'
								+'</ul>'
							+'</div>'
						+'</div>'
					+'</div>'
					+'<div class="usr ex" v-else>'
						+'<div class="LOGREG">'
							+'<ul class="clearfix">'
								+'<li><a href="/autism/page/user/sign.in">登录</a></li>'
								// +'<li><a href="/autism/page/user/sign.up">注册</a></li>'
							+'</ul>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		// 退出登录点击事件
		signoutClick : function(){
			var param = {url : apiroot+'/front/user/sign.out',data : ''};
			JOEDAR.doPostAjax(param,this.signoutFn);
		}
		,signoutFn : function(data){
			if(data.success == 'true'){location.href = '/'}
		}
	}
});


var HEADER = new Vue({
	el : '._HEADER_'
	,data : {
		// 页头右侧是否显示
		headerRightShow : (/sign/.test(location.pathname)) ? false : true
	}
	,created : function(){
		this.locationGo();
	}
	,methods : {
		locationGo : function(){
			// 是否已登录 true|false
			var ed = !ISOUT;
			var pn = location.pathname;
			var isSign = /sign\.(in|up|find)/.test(pn) ? true : false;
			// 如果已登录 并且是 登录或注册页
			if(ed && isSign){
				// 页面强制跳转用户中心首页
				location.href = '/autism/page/ucenter';
			}

			var isUcenter = /\/ucenter/.test(pn) ? true : false;
			if(!ed && isUcenter){
				// 页面强制跳转登录页面
				location.href = '/autism/page/user/sign.in';
			}
		}
	}
});
