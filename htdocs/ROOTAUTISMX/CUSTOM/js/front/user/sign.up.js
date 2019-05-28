// 邮件地址
Vue.component('part-email',{
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
						+'<input type="text" v-model="val" :class="tipClass" placeholder="请输入邮箱地址" @keyup="inputTextCheck">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入邮箱地址'; this.ok = false}
			else if(!_REG_.email.test(this.val)){this.tipClass = 'error'; this.tipText = '邮箱地址输入不正确'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});

// 图形验证码
Vue.component('part-captcha-image',{
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
						+'<div class="abs_tr"><img src="/APPLY/captcha/image.create" @click="captchaImgChange"></div>'
						+'<input type="text" :class="tipClass" v-model="val" placeholder="请输入图形验证码" @keyup="inputTextCheck">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		// 图片验证码点击事件
		captchaImgChange : function(e){
			var url = '/APPLY/captcha/image.create?'+new Date().getTime();
			e.target.src = url;
		}
		,inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入图形验证码'; this.ok = false}
			else if(this.val.length != 4){this.tipClass = 'error'; this.tipText = '图形验证码输入不正确'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});

// 邮件验证码
Vue.component('part-captcha-email',{
	data : function(){
		return {
			val : ''
			,tipClass : ''
			,tipText : ''
			,ok : false

			,clickTF : true
			,sendBtnText : '发送验证码'
			,btnDisabled : ''
			,num : 90
		}
	}
	,template : '<div class="part">'
					+'<div class="put">'
						+'<div class="abs_tr"><div class="btn send" :class="btnDisabled" @click="sendCaptchaEmailClick"><span>{{ sendBtnText }}</span></div></div>'
						+'<input type="text" :class="tipClass" v-model="val" placeholder="请输入邮件验证码" @keyup="inputTextCheck">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入邮件验证码'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}

		// 发送邮件验证码点击事件
		,sendCaptchaEmailClick : function(){
			if(this.btnDisabled == 'disabled'){return}
			// 构建sendCaptchaEmailData
			this.sendCaptchaEmailData = {};
			// 校验 - 邮件
			var email = SIGNUP.$refs.emailPart;
			if(!email.val){email.tipClass = 'error'; email.tipText = '请输入邮箱地址'; email.ok = false; return}
			else if(!email.ok){return}
			this.sendCaptchaEmailData.email = email.val;
			// 校验 - 图形验证码
			var captchaImage = SIGNUP.$refs.captchaImagePart;
			if(!captchaImage.val){captchaImage.tipClass = 'error'; captchaImage.tipText = '请输入图形验证码'; captchaImage.ok = false; return}
			else if(!captchaImage.ok){return}
			this.sendCaptchaEmailData.captchaImage = captchaImage.val;
			// 禁止双击
			if(!this.clickTF) return;
			this.clickTF = false;
			// 校验邮件是否已注册
			SIGNUP.emailCheck(email.val,this.emailChecked);
		}
		// 校验邮件是否已注册
		,emailChecked : function(has){
			// console.log(has);
			var email = SIGNUP.$refs.emailPart;
			if(has){email.tipClass = 'error'; email.tipText = '该邮箱地址已注册'; email.ok = false; return}
			// 发送邮件验证码
			this.sendCaptchaEmail();
		}
		// 发送邮件验证码
		,sendCaptchaEmail : function(){
			var param = {url : apiroot+'/front/user/sign.up.send.captcha.email', data : this.sendCaptchaEmailData};
			JOEDAR.doPostAjax(param,this.sendCaptchaEmailFn);
		}
		,sendCaptchaEmailFn : function(data){
			if(data.success == 'true'){
				// 邮件验证码已发送
				this.captchaEmailSended();
			}else{
				this.clickTF = true;
				if(/图形验证码/.test(data.msg)){
					SIGNUP.errorTip(SIGNUP.$refs.captchaImagePart,data.msg);
				}
			}
		}
		// 邮件验证码已发送
		,captchaEmailSended : function(){
			// 禁用按钮
			this.btnDisabled = 'disabled';
			// 改变按钮文字
			this.changeSendBtnText();
		}
		// 改变按钮文字
		,changeSendBtnText : function(){

			if(this.num > 0){
				this.num--;
				this.sendBtnText = '('+this.num+')秒后重发';
				setTimeout(this.changeSendBtnText,1e3);
			}else{
				// 时间恢复
				this.num = 90;
				// 启用按钮
				this.btnDisabled = '';
				// 改变按钮的文字
				this.sendBtnText = '发送验证码';
				// 启用点击事件
				this.clickTF = true;
			}
		}
	}
});

Vue.component('part-password',{
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
						+'<input type="password" :class="tipClass" v-model="val" placeholder="请输入密码(6~20位)" @keyup="inputTextCheck">'
						+'<div class="tip" :class="tipClass"><span>{{ tipText }}</span></div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入密码'; this.ok = false}
			else if(this.val.length < 6 || this.val.length > 20){this.tipClass = 'error'; this.tipText = '密码长度为6~20位'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});


Vue.component('part-captcha-confirm',{
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
						+'<input type="text" :class="tipClass" v-model="val" placeholder="确认验证码" @keyup="inputTextCheck">'
						+'<div class="tip" :class="tipClass">{{ tipText }}</div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputTextCheck : function(){
			if(!this.val){this.tipClass = 'error'; this.tipText = '请输入确认验证码'; this.ok = false}
			else{this.tipClass = 'ok'; this.tipText = ''; this.ok = true}
		}
	}
});














var SIGNUP = new Vue({
	el : '._SIGN_'
	,data : {
		clickTF : true
		,type : 'SIGNUP'

		//-------------------------------
		// 是否已注册
		// true : 注册表单
		// false : 填写确认验证码表单
		//-------------------------------
		,signinex : true

		//-------------------------------
		// 是否已确认验证码
		// true : 填写确认验证码表单
		// fasle : 去登录按钮表单
		//-------------------------------
		,captchaConfirmex : true
	}
	,methods : {
		// 错误提示
		errorTip : function(e,str){
			e.tipClass = 'error';
			e.tipText = str;
			e.ok = false;
		}
		// 校验email是否存在
		,emailCheck : function(email,callback){
			var param = {url : apiroot+'/front/user/email.check', data : {email : email}};
			JOEDAR.doPostAjax(param,function(data,callback){
				if(data.success == 'true'){
					callback(data.data.has);
				}
			},callback);
		}



		,signupSubmitClick : function(){
			// 构建signUpFormData
			this.signUpFormData = {};

			// 校验 - email
			var email = this.$refs.emailPart;
			if(!email.val){this.errorTip(email,'请输入邮箱地址'); return}
			else if(!email.ok){return};
			this.signUpFormData.email = email.val;

			// 校验 - 图形验证码
			var captchaImage = this.$refs.captchaImagePart;
			if(!captchaImage.val){this.errorTip(captchaImage,'请输入图形验证码'); return}
			else if(!captchaImage.ok){return}
			this.signUpFormData.captchaImage = captchaImage.val;

			// 校验 - 邮件验证码
			var captchaEmail = this.$refs.captchaEmailPart;
			if(!captchaEmail.val){this.errorTip(captchaEmail,'请输入邮件验证码'); return}
			else if(!captchaEmail.ok){return}
			this.signUpFormData.captchaEmail = captchaEmail.val;

			// 校验 - password
			var password = this.$refs.passwordPart;
			if(!password.val){this.errorTip(password,'请输入密码'); return}
			else if(!password.ok){return}
			this.signUpFormData.pass = password.val;
			this.signUpFormData.password = md5(password.val);

			// 禁止双击
			if(!this.clickTF) return;
			this.clickTF = false;

			this.signupSubmitClickFn();
		}
		,signupSubmitClickFn : function(){
			// 校验email是否存在
			this.emailCheck(this.signUpFormData.email,this.emailChecked);
		}
		,emailChecked : function(has){
			// 如果邮箱存在
			if(has){this.errorTip(this.$refs.emailPart,'该邮箱地址已存在'); this.clickTF = true; return}
			// 添加用户
			this.userAdd();
		}

		// 添加用户
		,userAdd : function(){
			var param = {url : apiroot+'/front/user/sign.up', data : this.signUpFormData};
			JOEDAR.doPostAjax(param,this.userAddFn);
		}
		,userAddFn : function(data){
			this.clickTF = true;
			if(data.success == 'true'){
				// 发送邮件 - 注册确认验证码
				this.sendEmailSignupConfirm();
			}else{
				console.log(data.msg);
			}
		}
		// 发送邮件 - 注册确认验证码
		,sendEmailSignupConfirm : function(){
			var data = {};
			data.type = this.type;
			data.email = this.signUpFormData.email;
			var param = {url : apiroot+'/front/user/sign.up.send.captcha.confirm', data : data};
			JOEDAR.doPostAjax(param,this.sendEmailSignupConfirmFn);
		}
		,sendEmailSignupConfirmFn : function(data){
			if(data.success == 'true'){
				// 注册表单隐藏
				this.signinex = false;
			}else{
				// 注册表单显示
				this.signinex = true;
				console.log(data.msg);
			}
		}

		,signupConfirmSubmitClick : function(){
			// 构建signUpCaptchaConfirmData
			this.signUpCaptchaConfirmData = {};

			// 校验 - 确认验证码
			var captchaConfirm = this.$refs.captchaConfirmPart;
			if(!captchaConfirm.val){this.errorTip(captchaConfirm,'请输入确认验证码'); return}
			else if(!captchaConfirm.ok){return}
			this.signUpCaptchaConfirmData.captchaConfirm = captchaConfirm.val;

			// 邮件
			this.signUpCaptchaConfirmData.email = this.signUpFormData.email;

			// 禁止双击
			if(!this.clickTF) return;
			this.clickTF = false;

			// 注册确认
			this.signupConfirm();
		}
		// 注册确认
		,signupConfirm : function(){
			var param = {url : apiroot+'/front/user/sign.up.confirm', data : this.signUpCaptchaConfirmData};
			JOEDAR.doPostAjax(param,this.signupConfirmFn);
		}
		,signupConfirmFn : function(data){
			this.clickTF = true;
			if(data.success == 'true'){
				// 验证码表单隐藏
				this.captchaConfirmex = false;
			}else{
				// 验证码表单隐藏
				this.captchaConfirmex = true;
				// 提示错误信息
				var captchaConfirm = this.$refs.captchaConfirmPart;
				this.errorTip(captchaConfirm,data.msg);
			}
		}
	}
});

