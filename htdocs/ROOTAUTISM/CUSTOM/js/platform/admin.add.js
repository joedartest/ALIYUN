Vue.component('title-input',{
	props : ['title','formData']
	,template : '<div class="put input long">'
					+'<span class="zishu"><b class="zs">{{ title.len }}</b>/{{ title.zishu }}</span>'
					+'<input type="text" :placeholder="title.placeholder">'
					+'<i class="tip"></i>'
				+'</div>'
});


var ADMINADD = new Vue({
	el : '._FORM_.admin.add'
	,data : {
		title : {
			placeholder : '请输入文章标题，字数30个字'
			,zishu : 30
			,len : 0
			,tipClass : ''
			,tipMsg : ''
		}
		,formData : {
			title : ''
		}
	}
	,created : function(){

	}
	,methods : {
		// 校验文章标题
		titleInputCheck : function(){
			this.title.len = this.formData.title.length;
		}
		,titleCheck : function(tipClass,tipMsg){
			this.title.tipClass = tipClass;
			this.title.tipMsg = tipMsg;

		}


		// 提交按钮点击事件
		,submitClick : function(){
			// 校验 - 文章标题
			if(!this.formData.title){this.titleCheck('error','请输入文章标题'); return}

			// this.content = UEDITOR.ue.getContent();
			// console.log(this.content);
			// console.log(this.formData.title);
		}
	}
});


































