
Vue.component('part-signin-name',{
	// signinNamePart
	data : function(){
		return {
			val : ''
			,tipClass : ''
			,tipText : ''
			,ok : false
		}
	}
	,template : '<div class="part">'
					+'<div class="put">'
						+'<input type="text" v-model="val" :class="tipClass" placeholder="请输入登录名(邮箱地址/用户名)" @keyup="inputTextCheck" autocomplete="off">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入登录名'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});

Vue.component('part-password',{
	// passwordPart
	data : function(){
		return {
			val : ''
			,tipClass : ''
			,tipText : ''
			,ok : false
		}
	}
	,template : '<div class="part">'
					+'<div class="put">'
						+'<input type="password" :class="tipClass" v-model="val" placeholder="请输入登录密码" @keyup="inputTextCheck" autocomplete="off">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入密码'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});



Vue.component('part-captcha-confirm',{
	// captchaConfirmPart
	data : function(){
		return {
			val : ''
			,tipClass : ''
			,tipText : ''
			,ok : false
		}
	}
	,template : '<div class="part">'
					+'<div class="put">'
						+'<input type="text" :class="tipClass" v-model="val" placeholder="请输入确认验证码" @keyup="inputTextCheck" autocomplete="off">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入确认验证码'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});




var SIGNIN = new Vue({
	el : '._SIGN_'
	,data : {
		clickTF : true
		,type : 'SIGNIN'

		// 登录表单
		,formSignin : true
		// 邮件验证码表单
		,formCaptchaEmail : false
	}
	,created : function(){
		(function(t){
			// 回车点击事件
			document.onkeyup = function(e){if(e.keyCode == 13){t.signinSubmitClick()}}
		}(this));
	}
	,methods : {
		// 错误提示
		errorTip : function(e,str){
			e.tipClass = 'error';
			e.tipText = str;
			e.ok = false;
		}

		,signinSubmitClick : function(){
			// 登录表单验证
			this.signinFormCheck();
		}
		// 登录表单验证
		,signinFormCheck : function(){
			// 构建signInFormData
			this.signInFormData = {};
			// 校验 - 登录名
			var signinName = this.$refs.signinNamePart;
			if(!signinName.val){this.errorTip(signinName,'请输入登录名'); return}
			else if(!signinName.ok){return};
			this.signInFormData.signinName = signinName.val;
			// 校验 - password
			var password = this.$refs.passwordPart;
			if(!password.val){this.errorTip(password,'请输入密码'); return}
			else if(!password.ok){return}
			this.signInFormData.password = md5(password.val);

			// 禁止双击
			if(!this.clickTF) return;
			// this.clickTF = false;

			// 登录
			this.signin();
		}

		,signin : function(){
			var param = {url : apiroot+'/front/user/sign.in', data : this.signInFormData};
			JOEDAR.doPostAjax(param,this.signinFn);
		}
		,signinFn : function(data){
			// 登录成功
			if(data.success == 'true'){
				// SIGN.set(true);
				// USR.DATA.in = true;
				// USR.set();
				location.href = document.referrer ? document.referrer : '/autism/page/ucenter';
				
			}else{
				if(/登录名/.test(data.msg)){
					this.errorTip(this.$refs.signinNamePart,data.msg);
				}else if(/密码/.test(data.msg)){
					this.errorTip(this.$refs.passwordPart,data.msg);
				}else if(data.msg == 'noConfirmed'){
					this.formShow();
					// 发送注册确认验证码
					this.sendSignupCaptchaConfirm();
				}
			}
		}
		,formShow : function(){
			this.formSignin = false;
			this.formCaptchaEmail = true;
		}
		// 发送注册确认验证码
		,sendSignupCaptchaConfirm : function(){
			var param = {url : apiroot+'/front/user/sign.up.send.captcha.confirm', data : ''};
			JOEDAR.doPostAjax(param,this.sendSignupCaptchaConfirmFn);
		}
		,sendSignupCaptchaConfirmFn : function(data){
			// 
		}

		,captchaConfirmSubmitClick : function(){
			this.captchaConfirmData = {};
			this.captchaConfirmData.email = this.signInFormData.signinName;
			// 校验 - 确认验证码
			var captchaConfirm = this.$refs.captchaConfirmPart;
			if(!captchaConfirm.val){this.errorTip(captchaConfirm,'请输入确认验证码'); return}
			else if(!captchaConfirm.ok){return};
			this.captchaConfirmData.captchaConfirm = captchaConfirm.val;

			// 禁止双击
			if(!this.clickTF) return;
			// this.clickTF = false;

			this.signupConfirm();
		}
		,signupConfirm : function(){
			var param = {url : apiroot+'/front/user/sign.up.confirm', data : this.captchaConfirmData};
			JOEDAR.doPostAjax(param,this.signupConfirmFn);
		}
		,signupConfirmFn : function(data){
			if(data.success == 'true'){
				location.href = document.referrer ? document.referrer : '/autism/page/ucenter';
				
			}else{
				if(/确认验证码/.test(data.msg)){
					this.errorTip(this.$refs.captchaConfirmPart,data.msg);
				}else{
					console.log(data.msg);
				}
			}
		}
	}
});




