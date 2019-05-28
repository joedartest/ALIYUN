Vue.component('title-input',{
	data : function(){
		return {
			placeholder : '请输入文章标题，字数30个字'
			,zishu : 30
			,val : ''
			,isError : ''
			,tip : ''
		}
	}
	,template : '<div class="put input long">'
					+'<span class="zishu"><b class="zs">{{ theLen }}</b>/{{ zishu }}</span>'
					+'<input type="text" :class="isError" :placeholder="placeholder" v-model="val" @keyup="keyupCheck">'
					+'<i class="tip" :class="isError">{{ tip }}</i>'
				+'</div>'
	,computed : {
		theLen : function(){
			return this.val.length;
		}
	}
	,methods : {
		keyupCheck : function(e){
			var value = e.target.value, len = value.length;
			this.val = value;
			if(len > this.zishu){this.isError = 'error'; this.tip = '不得超过'+this.zishu+'个字'}
			else{this.isError = 'ok'; this.tip = ''}
		}
	}
});

Vue.component('author-input',{
	data : function(){
		return {
			placeholder : '请输入作者'
			,val : ''
			,isError : ''
			,tip : ''
		}
	}
	,template : '<div class="put input short">'
					+'<input type="text" :class="isError" :placeholder="placeholder" v-model="val" @keyup="keyupCheck">'
					+'<i class="tip" :class="isError">{{ tip }}</i>'
				+'</div>'
	,methods : {
		keyupCheck : function(e){
			var value = e.target.value;
			this.val = value;
			if(value){this.isError = 'ok'; this.tip = ''}
			else{this.isError = 'error'; this.tip = '请输入作者'}
		}
	}
});

Vue.component('source-input',{
	data : function(){
		return {
			placeholder : '请输入来源'
			,val : ''
			,isError : ''
			,tip : ''
		}
	}
	,template : '<div class="put input short">'
					+'<input type="text" :class="isError" :placeholder="placeholder" v-model="val" @keyup="keyupCheck">'
					+'<i class="tip" :class="isError">{{ tip }}</i>'
				+'</div>'
	,methods : {
		keyupCheck : function(e){
			var value = e.target.value;
			this.val = value;
			if(value){this.isError = 'ok'; this.tip = ''}
		}
	}
});

Vue.component('source-link-input',{
	data : function(){
		return {
			placeholder : '请输入来源链接'
			,val : ''
			,isError : ''
			,tip : ''
		}
	}
	,template : '<div class="put input long">'
					+'<input type="text" :class="isError" :placeholder="placeholder" v-model="val" @keyup="keyupCheck">'
					+'<i class="tip" :class="isError">{{ tip }}</i>'
				+'</div>'
	,methods : {
		keyupCheck : function(e){
			var value = e.target.value;
			this.val = value;
			if(!_REG_.url.test(value)){this.isError = 'error'; this.tip = '链接地址输入不正确'}
			else{this.isError = 'ok'; this.tip = ''}
		}
	}
});

Vue.component('stack-article-category',{
	data : function(){
		return {
			val : ''
			,isError : ''
			,tip : ''
		}
	}
	,template : '<div class="put select">'
					+'<select :class="isError" v-model="val" @change="change">'
						+'<option value="">文章分类</option>'
						+'<option value="html">html</option>'
						+'<option value="css">css</option>'
						+'<option value="js">js</option>'
						+'<option value="jQuery">jQuery</option>'
						+'<option value="Vue">Vue</option>'
						+'<option value="React">React</option>'
						+'<option value="Angular">Angular</option>'
						+'<option value="Others">Others</option>'
					+'</select>'
					+'<i class="tip" :class="isError">{{ tip }}</i>'
				+'</div>'
	,methods : {
		change : function(e){
			var value = e.target.value;
			this.val = value;
			if(!value){this.isError = 'error'; this.tip = '请选择文章分类'}
			else{this.isError = 'ok'; this.tip = ''}
		}
	}
});




var ADMINADD = new Vue({
	el : '.forms.stackArticle.add'
	,data : {
		id : getUrlRequest('id') ? Number(getUrlRequest('id')) : ''
		,submitBtnText : getUrlRequest('id') ? '修改' : '提交'
		,clickTF : true

		// 表单提交状态 提交前false 提交后true
		,formStatus : false
	}
	,beforeCreate : function(){
		var GET = (function(that){
			return {
				id : getUrlRequest('id') ? Number(getUrlRequest('id')) : ''
				,init : function(){
					if(!this.id) return;
					this.viewData = {id : this.id};
					this.getView();
				}
				,getView : function(){
					var param = {url : apiroot+'/front/stackArticle/view', data : this.viewData};
					JOEDAR.doPostAjax(param,this.getViewFn);
				}
				,getViewFn : function(data){
					var _ = GET;
					if(data.success == 'true'){
						_.view = data.data;
						_.renderComponents();
					}
				}
				,renderComponents : function(){
					that.$refs.titleInput.val = this.view.title;
					that.$refs.authorInput.val = this.view.author;
					that.$refs.sourceInput.val = this.view.source;
					that.$refs.sourceLinkInput.val = this.view.sourceLink;
					that.$refs.stackArticleCategorySelect.val = this.view.category;

					var content = this.view.content.replace(/&lt;/g,'<').replace(/&gt;/g,'>');
					UEDITOR.ue.setContent(content);
				}
			}
		}(this));
		GET.init();
	}
	,created : function(){
		// console.log(this);
		// UEDITOR.ue.setContent() = this.GET.view.content;
	}
	,methods : {
		GET : function(){
			if(!this.id) return;
			this.viewData = {id : this.id};
			this.getView();
		}
		,getView : function(){
			var param = {url : apiroot+'/front/stackArticle/view', data : this.viewData};
			JOEDAR.doPostAjax(param,this.getViewFn);
		}
		,getViewFn : function(data){
			if(data.success == 'true'){
				this.view = data.data;
				this.renderComponents();
			}
		}
		,renderComponents : function(){
			console.log(this.view);
			this.$refs.titleInput.val = this.view.title;
		}


		// 提交按钮点击事件
		,submitClick : function(){
			// 构建formData
			this.formData = {};

			this.formData.id = this.id;

			// 校验 - 文章标题
			var title = this.$refs.titleInput;
			if(!title.val){title.isError = 'error'; title.tip = '请输入文章标题'; return}
			else if(title.isError == 'error'){return}
			this.formData.title = title.val;

			// 校验 - 作者
			var author = this.$refs.authorInput;
			if(!author.val){author.isError = 'error'; author.tip = '请输入作者'; return}
			else if(author.isError == 'error'){return}
			this.formData.author = author.val;

			// 校验 - 来源
			var source = this.$refs.sourceInput;
			source.val ? this.formData.source = source.val : delete this.formData.source;

			// 校验 - 来源链接
			var sourceLink = this.$refs.sourceLinkInput;
			if(sourceLink.val && !_REG_.url.test(sourceLink.val)){sourceLink.isError = 'error'; sourceLink.tip = '链接地址输入不正确'; return}
			sourceLink.val ? this.formData.sourceLink = sourceLink.val : delete this.formData.sourceLink;

			// 校验 - 文章分类
			var stackArticleCategory = this.$refs.stackArticleCategorySelect;
			if(!stackArticleCategory.val){stackArticleCategory.isError = 'error'; stackArticleCategory.tip = '请选择文章分类'; return}
			this.formData.category = stackArticleCategory.val;

			// 校验 - 内容
			var content = UEDITOR.ue.getContent();
			if(!content){alert('请填写内容'); return}
			this.formData.content = content;

			// if(!this.clickTF) return;
			// this.clickTF = false;

			this.submitArticle();

			

			// 校验 - 文章标题
			// if(!this.formData.title){this.titleCheck('error','请输入文章标题'); return}

			// this.content = UEDITOR.ue.getContent();
			// console.log(this.content);
			// console.log(this.formData.title);
		}

		,submitArticle : function(){
			var param = {url : apiroot+'/platform/stackArticle/add', data : this.formData};
			JOEDAR.doPostAjax(param,this.submitArticleFn);
		}
		,submitArticleFn : function(data){
			if(data.success == 'true'){
				this.formStatus = true;
			}
			console.log(data);
		}
	}
});


































