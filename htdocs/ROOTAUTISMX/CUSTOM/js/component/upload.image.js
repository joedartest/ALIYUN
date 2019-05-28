Vue.component('component-upload-image',{
	props: ['path']
	,data : function(){
		return {
			disabled : false
			,tips : {
				// hide | ''
				hide : 'hide'
				// error | ok | ''
				,status : ''
				// 提示的内容
				,text : ''
			}
			,imageButtonShow : 'hide'
			,imageShowBg : ''
		}
	}
	,template : '<div class="uploadBox">'
					+'<div class="button">'
						+'<div class="btn">'
							+'<label>'
								+'<input type="file" class="none" accept="image/*" @change="inputFileChange" :disabled="disabled">'
								+'<span>选择图片</span>'
							+'</label>'
						+'</div>'
					+'</div>'
					+'<div class="tips" :class="tips.hide">'
						+'<span :class="tips.status">{{tips.text}}</span>'
					+'</div>'
					+'<div class="imageShow" :class="imageButtonShow">'
						+'<div :style="imageShowBg"><span></span></div>'
					+'</div>'
					+'<div class="button submit" :class="imageButtonShow">'
						+'<div class="btn">'
							+'<div>'
								+'<span @click="submitClick">上传图片</span>'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'

	,methods : {
		inputFileChange : function(e){
			this.submitBtn = document.getElementById('submitUploadButton');
			if(!this.path){
				this.tips.hide = '';
				this.tips.status = 'error';
				this.tips.text = '未指定路径';
				return;
			}
			// 获取files对象
			var file = e.target.files[0];
			// 初始化一个 FormData 对象
			this.formData = new FormData();
			// 携带文件
			this.formData.append('file',file);
			// 将图片文件转换成base64文件
			JOEDAR.imgToBase64(file,this.imgToBase64);
		}
		,imgToBase64 : function(src){
			this.base64 = src;
			// 图片区域显示
			this.isImageShow();
		}
		// 图片预览区域显示
		,isImageShow : function(){
			this.imageButtonShow = '';
			this.imageShowBg = 'background:url('+this.base64+') center center / cover no-repeat;';
		}
		// 图片预览区域隐藏
		,isImageHide : function(){
			this.imageButtonShow = 'hide';
			this.imageShowBg = '';
		}

		,submitClick : function(){
			this.$emit('submit-click');
		}
		//-------------------
		//     上传图片
		//-------------------
		,upload : function(callback){
			var param = {url : '/autism/apply/upload/image.add.'+this.path, data : this.formData};
			JOEDAR.doFormAjax(param,callback);
		}
	}
});
