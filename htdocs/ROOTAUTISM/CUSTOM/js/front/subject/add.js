
Vue.component('item-input-title',{
	data : function(){
		return {
			zs : 50
			,len : 0
			,error : ''
			,errorText : ''
			,val : ''
			// ,reg : /^[a-zA-Z0-9\u4e00-\u9fa5]+$/
			,reg : /^[\<\>]+$/
			,ok : false
		}
	}
	,template : '<div class="item input">'
					+'<div class="zs"><b>{{len}}</b><i>/</i><span>{{zs}}</span></div>'
					+'<input type="text" :class="error" v-model="val" placeholder="话题的标题" @keyup="inputKeyup">'
					+'<div class="tip" :class="error"><span>{{errorText}}</span></div>'
				+'</div>'
	,methods : {
		inputKeyup : function(e){
			this.val = e.target.value;
			this.inputCheck();
		}
		,inputCheck : function(){
			this.len = this.val ? this.val.length : 0;
			if(!this.val){this.tipShow(false,'请输入话题的标题')}
			else if(this.reg.test(this.val)){this.tipShow(false,'不得含有符号(<、>)')}
			else if(this.len > this.zs){this.tipShow(false,'字数为'+this.zs+'以内')}
			else{this.tipShow(true)}
		}
		,tipShow : function(t,str){
			if(t){this.error = ''; this.errorText = ''; this.ok = true}
			else{this.error = 'error'; this.errorText = str; this.ok = false}
		}
	}
	,updated : function(){
		this.inputCheck();
	}
});


// itemUeditor
Vue.component('item-ueditor',{
	data : function(){
		return {
			error : ''
			,errorText : ''
		}
	}
	,template : '<div class="item textarea">'
					+'<u-editor ref="UEditor"></u-editor>'
					+'<div class="tip" :class="error"><span>{{errorText}}</span></div>'
				+'</div>'
	,created : function(){
		var _ = this;
		//-------------------------------
		// 'u-editor'组件created之后
		// 再'item-ueditor'组件created
		// 所以延迟0.5秒再监听
		//-------------------------------
		setTimeout(function(){
			_.ue = _.$refs.UEditor.ue;
			_.ue.addListener('selectionchange',_.listenUE);
		},500);
	}
	,methods : {
		listenUE : function(){
			this.html = this.ue.getContent();
			this.text = this.ue.getContentTxt();
			this.ueditorCheck()
			// console.log(this.content);
		}
		,ueditorCheck : function(){
			if(this.text){this.error = ''; this.errorText = ''}
		}
	}
});

Vue.component('submit-button',{
	data : function(){
		return {
			disabled : ISOUT ? 'disabled' : ''
		}
	}
	,template : '<div class="btn blue" :class="disabled" @click="submitBtnClick"><span>确认提交</span></div>'
	,methods : {
		submitBtnClick : function(){
			if(ISOUT) return;

			// 校验 - 标题
			var title = this.$parent.$refs.itemInputTitle;
			if(!title.ok){
				if(!title.val){title.tipShow(false,'请输入话题的标题')}
				return;
			}
			this.title = title.val;

			// 校验 - 内容
			var ue = this.$parent.$refs.itemUeditor
				,html = ue.html
				,text = ue.text
			;
			if(!text){ue.error = 'error'; ue.errorText = '请输入话题的内容'; return}
			this.content = html;
			this.contentTxt = (text.length > 500) ? text.substring(0,500)+'...' : text;

			this.createFormData();
			this.subjectAdd();
		}
		,createFormData : function(){
			this.formData = {};
			this.formData.title = this.title;
			this.formData.content = this.content;
			this.formData.contentTxt = this.contentTxt;
			console.log(this.formData);
		}
		,subjectAdd : function(){
			var param = {url : '/autism/apply/front/subject/subject.add', data : this.formData};
			JOEDAR.doPostAjax(param,this.subjectAddFn);
		}
		,subjectAddFn : function(data){
			console.log(data);
		}
	}
});


var SUBJECTADD = new Vue({
	el : '._SUBJECT_.ADD'
});



