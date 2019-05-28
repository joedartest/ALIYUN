//---------------
//    已登录
//---------------
Vue.component('header-usr-ed',{
	data : function(){
		return {
			usrheadStyle : 'background:url(/personal/images/avatar200x200.jpg) center no-repeat; background-size:cover;'
		}
	}
	,template : '<div class="usr ed">'
					+'<div class="USET">'
						+'<input type="checkbox" class="none" id="USRHEAD">'
						+'<div class="avatar">'
							+'<label for="USRHEAD">'
								+'<span class="default"></span>'
								+'<span class="usrhead" :style="usrheadStyle"></span>'
								// +'<span class="usrhead"><img src="/personal/images/avatar200x200.jpg"></span>'
							+'</label>'
						+'</div>'
						+'<div class="bg tran03"><label for="USRHEAD"></label></div>'
						+'<div class="uset tran03">'
							+'<ul>'
								+'<li><a class="u center" href="/personal/page/ucenter/my">我的</a></li>'
								+'<li><a class="u set" href="/personal/page/ucenter/setAccount">设置</a></li>'
								+'<li><a class="u signout" @click="signoutClick">退出</a></li>'
							+'</ul>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		// 退出登录点击事件
		signoutClick : function(){
			var param = {url : APIROOT+'/front/user/sign.out',data : ''};
			JOEDAR.doPostAjax(param,this.signoutFn);
		}
		,signoutFn : function(data){
			if(data.success == 'true'){
				location.href = '/';
			}
		}
	}
});


//---------------
//    登录后
//---------------
Vue.component('header-usr-ex',{
	data : function(){
		return {
			
		}
	}
	,template : '<div class="usr ex" v-else>'
					+'<div class="LOGREG">'
						+'<ul class="clearfix">'
							+'<li><a href="/personal/page/user/signin">登录</a></li>'
							// +'<li><a href="/personal/page/user/signup">注册</a></li>'
						+'</ul>'
					+'</div>'
				+'</div>'

});




var HEADER = new Vue({
	el : '._HEADER_'
	,data : {
		// 是否已登录
		isSignined : false
		// 页头右侧是否显示
		,headerRightShow : (/sign/.test(location.pathname)) ? false : true
	}
	,beforeCreate : function(){
		// 判断是否登录 is sign in
		var ISIGNIN  = (function(that){
			return {
				init : function(){
					this.signinCheck();
				}
				,signinCheck : function(){
					var param = {url : APIROOT+'/front/user/sign.in.check',data : ''};
					JOEDAR.doPostAjax(param,this.signinCheckFn);
				}
				,signinCheckFn : function(data){
					if(data.success == 'true'){
						that.isSignined = true;
					}else{
						that.isSignined = false;
					}
					that.locationGo();
				}
			}
		}(this));
		ISIGNIN.init();
	}
	,created : function(){
		// this.asdasd();
	}

	,computed : {

	}

	,methods : {
		locationGo : function(){
			// 是否已登录 true|false
			var ed = this.isSignined;
			var pn = location.pathname;
			var isSign = /sign(in|up)|find/.test(pn) ? true : false;
			// 如果已登录 并且是 登录或注册页
			if(ed && isSign){
				// 页面强制跳转用户中心首页
				location.href = '/personal/page/ucenter/index';
			}
			// console.log(this.isSignined);
		}

		
	}
});