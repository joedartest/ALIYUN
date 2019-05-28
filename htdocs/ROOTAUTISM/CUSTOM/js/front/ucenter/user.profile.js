
Vue.component('part-email',{
	data : function(){
		return {
			val : ''
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>注册邮箱</span></div>'
					+'<div class="con">'
						+'<div class="item put"><input type="text" value="val" v-model="val" readonly></div>'
					+'</div>'
				+'</div>'
});


Vue.component('part-user-name',{
	data : function(){
		return {
			val : ''
			,ok : false
			,className : ''
			,tipText : ''
			,reg : /^[a-zA-Z0-9\u4e00-\u9fa5]{1,20}$/
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>用户名</span></div>'
					+'<div class="con">'
						+'<div class="item put">'
							+'<input type="text" :class="className" value="val" v-model="val" placeholder="请输入用户名(可作登录名)" @keyup="inputKeyup">'
							+'<div class="tip" :class="className"><span>{{tipText}}</span></div>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputKeyup : function(e){this.val = e.target.value}
	}
	,updated : function(){
		if(!this.val){this.className = 'error'; this.tipText = '请输入用户名'; this.ok = false}
		else if(!this.reg.test(this.val)){this.className = 'error'; this.tipText = '仅可包含中英文数字,20位以内'; this.ok = false}
		else{this.className = 'ok'; this.tipText = ''; this.ok = true}
	}
});

Vue.component('part-nick-name',{
	data : function(){
		return {
			val : ''
			,ok : false
			,className : ''
			,tipText : ''
			,reg : /^[a-zA-Z0-9\u4e00-\u9fa5_]{1,20}$/
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>昵称</span></div>'
					+'<div class="con">'
						+'<div class="item put">'
							+'<input type="text" :class="className" value="val" v-model="val" placeholder="请输入昵称" @keyup="inputKeyup">'
							+'<div class="tip" :class="className"><span>{{tipText}}</span></div>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputKeyup : function(e){this.val = e.target.value}
	}
	,updated : function(){
		if(!this.val){this.className = 'error'; this.tipText = '请输入昵称'; this.ok = false}
		else if(!this.reg.test(this.val)){this.className = 'error'; this.tipText = '仅可包含中英文数字下划线,20位以内'; this.ok = false}
		else{this.className = 'ok'; this.tipText = ''; this.ok = true}
	}
});

Vue.component('part-baby-name',{
	data : function(){
		return {
			val : ''
			,ok : false
			,className : ''
			,tipText : ''
			,reg : /^[a-zA-Z0-9\u4e00-\u9fa5_]{1,20}$/
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>宝宝名字</span></div>'
					+'<div class="con">'
						+'<div class="item put">'
							+'<input type="text" :class="className" value="val" v-model="val" placeholder="请输入宝宝名字" @keyup="inputKeyup">'
							+'<div class="tip" :class="className"><span>{{tipText}}</span></div>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		inputKeyup : function(e){this.val = e.target.value}
	}
	,updated : function(){
		if(!this.val){this.className = 'error'; this.tipText = '请输入宝宝名字'; this.ok = false}
		else if(!this.reg.test(this.val)){this.className = 'error'; this.tipText = '仅可包含中英文数字下划线,20位以内'; this.ok = false}
		else{this.className = 'ok'; this.tipText = ''; this.ok = true}
	}
});

Vue.component('part-baby-sex',{
	data : function(){
		return {
			val : ''
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>宝宝性别</span></div>'
					+'<div class="con">'
						+'<div class="item rcs">'
							+'<div class="labelRadioCheckbox">'
								+'<label><input type="radio" class="none" name="babySex" value="男" v-model="val"><span>男</span></label>'
								+'<label><input type="radio" class="none" name="babySex" value="女" v-model="val"><span>女</span></label>'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
});

Vue.component('part-baby-birth',{
	data : function(){
		return {
			ok : false
			,year : '', yearClass : ''
			,month : '', monthClass : ''
			,tipClass : ''
			,tipText : ''
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>宝宝出生</span></div>'
					+'<div class="con">'
						+'<div class="item select">'
							+'<select :class="yearClass" value="year" v-model="year" @change="yearChange">'
								+'<option value="">选择年份</option>'
								+'<option value="2000">2000年</option>'
								+'<option value="2001">2001年</option>'
								+'<option value="2002">2002年</option>'
								+'<option value="2003">2003年</option>'
								+'<option value="2004">2004年</option>'
								+'<option value="2005">2005年</option>'
								+'<option value="2006">2006年</option>'
								+'<option value="2007">2007年</option>'
								+'<option value="2008">2008年</option>'
								+'<option value="2009">2009年</option>'
								+'<option value="2010">2010年</option>'
								+'<option value="2011">2011年</option>'
								+'<option value="2012">2012年</option>'
								+'<option value="2013">2013年</option>'
								+'<option value="2014">2014年</option>'
								+'<option value="2015">2015年</option>'
								+'<option value="2016">2016年</option>'
								+'<option value="2017">2017年</option>'
								+'<option value="2018">2018年</option>'
								+'<option value="2019">2019年</option>'
							+'</select>'
							+'<select :class="monthClass" value="month" v-model="month" @change="monthChange">'
								+'<option value="">选择月份</option>'
								+'<option value="01">01月</option>'
								+'<option value="02">02月</option>'
								+'<option value="03">03月</option>'
								+'<option value="04">04月</option>'
								+'<option value="05">05月</option>'
								+'<option value="06">06月</option>'
								+'<option value="07">07月</option>'
								+'<option value="08">08月</option>'
								+'<option value="09">09月</option>'
								+'<option value="10">10月</option>'
								+'<option value="11">11月</option>'
								+'<option value="12">12月</option>'
							+'</select>'
							+'<div class="tip" :class="tipClass"><span>{{tipText}}</span></div>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		yearChange : function(e){this.year = e.target.value}
		,monthChange : function(e){this.month = e.target.value}
	}
	,updated : function(){
		if(!this.year && !this.month){
			this.ok = false;
			this.yearClass = 'error';
			this.monthClass = 'error';
			this.tipClass = 'error';
			this.tipText = '请选择年月';
		}
		else if(this.year && !this.month){
			this.ok = false;
			this.yearClass = '';
			this.monthClass = 'error';
			this.tipClass = 'error';
			this.tipText = '请选择月份';
		}
		else if(!this.year && this.month){
			this.ok = false;
			this.yearClass = 'error';
			this.monthClass = '';
			this.tipClass = 'error';
			this.tipText = '请选择年份';
		}
		if(this.year && this.month){
			this.ok = true;
			this.yearClass = '';
			this.monthClass = '';
			this.tipClass = '';
			this.tipText = '';
		}
	}
});

Vue.component('part-baby-parent',{
	data : function(){
		return {
			val : ''
			,ok : false
			,className : ''
			,tipText : ''
		}
	}
	,template : '<div class="part">'
					+'<div class="name"><span>监护人</span></div>'
					+'<div class="con">'
						+'<div class="item select">'
							+'<select :class="className" value="val" v-model="val" @change="selectChange">'
								+'<option value="">选择监护人</option>'
								+'<option value="爸爸">爸爸</option>'
								+'<option value="妈妈">妈妈</option>'
								+'<option value="爷爷">爷爷</option>'
								+'<option value="奶奶">奶奶</option>'
								+'<option value="外公">外公</option>'
								+'<option value="外婆">外婆</option>'
								+'<option value="哥哥">哥哥</option>'
								+'<option value="姐姐">姐姐</option>'
								+'<option value="弟弟">弟弟</option>'
								+'<option value="妹妹">妹妹</option>'
								+'<option value="其他">其他</option>'
							+'</select>'
							+'<div class="tip" :class="className"><span>{{tipText}}</span></div>'
						+'</div>'
					+'</div>'
				+'</div>'
	,methods : {
		selectChange : function(e){this.val = e.target.value}
	}
	,updated : function(){
		if(!this.val){this.className = 'error'; this.tipText = '请选择监护人'; this.ok = false}
		else{this.className = 'ok'; this.tipText = ''; this.ok = true}
	}
});



Vue.component('submit-button',{
	data : function(){
		return {
			status : ''
			,formData : {}
		}
	}
	,template : '<div class="btn blue" :class="status" @click="submitBtnClick"><span>确定提交</span></div>'
	,methods : {
		submitBtnClick : function(){
			this.formData = {};
			//-------------------
			//    校验用户名
			//-------------------
			var username = this.$parent.$refs.partUsername;
			if(!username.ok){
				if(!username.val){username.className = 'error'; username.tipText = '请输入用户名'}
				return;
			}
			this.formData.username = username.val;

			//-------------------
			//    校验昵称
			//-------------------
			var nickname = this.$parent.$refs.partNickname;
			if(!nickname.ok){
				if(!nickname.val){nickname.className = 'error'; nickname.tipText = '请输入昵称'}
				return;
			}
			this.formData.nickname = nickname.val;

			//-------------------
			//    校验昵称
			//-------------------
			var babyname = this.$parent.$refs.partBabyname;
			if(!babyname.ok){
				if(!babyname.val){babyname.className = 'error'; babyname.tipText = '请输入宝宝名字'}
				return;
			}
			this.formData.babyname = babyname.val;
			
			// 宝宝性别
			var babysex = this.$parent.$refs.partBabysex;
			this.formData.babysex = babysex.val;

			//-------------------
			//    校验宝宝出生
			//-------------------
			var babybirth = this.$parent.$refs.partBabybirth;
			if(!babybirth.ok){
				if(!babybirth.year && !babybirth.month){
					babybirth.yearClass = 'error';
					babybirth.monthClass = 'error';
					babybirth.tipClass = 'error';
					babybirth.tipText = '请选择年月';
				}
				return;
			}
			this.formData.babybirth = babybirth.year+'/'+babybirth.month;

			//-------------------
			//    校验宝宝监护人
			//-------------------
			var babyparent = this.$parent.$refs.partBabyparent;
			if(!babyparent.ok){
				if(!babyparent.val){babyparent.className = 'error'; babyparent.tipText = '请选择宝宝监护人'}
				return;
			}
			this.formData.babyparent = babyparent.val;


			// 禁止双击
			if(this.status == 'disabled') return;
			this.status = 'disabled';
			// 用户信息更新
			this.infoUpdate();
		}
		// 用户信息更新
		,infoUpdate : function(){
			var param = {url : '/autism/apply/front/user/info.update', data : this.formData};
			JOEDAR.doPostAjax(param,this.infoUpdateFn);
		}
		,infoUpdateFn : function(data){
			this.status = '';
			console.log(data);
		}
	}
});



var USERPROFILE = new Vue({
	el : '.UC_CONTAIN'

	,beforeCreate : function(){
		var USERINFO = (function(){
			return {
				GET : function(){
					var param = {url : '/autism/apply/front/user/info.get', data : ''};
					JOEDAR.doPostAjax(param,this.GETN);
				}
				,GETN : function(data){
					if(data.success == 'true'){
						var obj = data.data;
						var _ = window.USERPROFILE;
						//------------------
						//   向子组件填值
						//------------------
						_.$refs.partEmail.val = obj.email;
						_.$refs.partUsername.val = obj.username;
						_.$refs.partNickname.val = obj.nickname;
						_.$refs.partBabyname.val = obj.babyname;
						_.$refs.partBabysex.val = obj.babysex || '男';
						(function(){
							var date = obj.babybirth;
							if(date){
								var arr = date.split('/');
								_.$refs.partBabybirth.year = arr[0];
								_.$refs.partBabybirth.month = arr[1];
							}else{
								_.$refs.partBabybirth.year = '';
								_.$refs.partBabybirth.month = '';
							}
						}());
						_.$refs.partBabyparent.val = obj.babyparent;
						
					}else{
						console.log(data.msg);
					}
				}
			}
		}());
		USERINFO.GET();
	}
	,created : function(){
		// console.log(this);
	}
});











