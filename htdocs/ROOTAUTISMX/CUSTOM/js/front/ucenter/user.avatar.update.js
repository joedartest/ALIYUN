var UPLOADIMAGE = new Vue({
	el : '.UC_CONTAIN'
	,methods : {
		// 上传头像点击事件
		submitUploadAvatarClick : function(){
			this.$refs.uploadImage.upload(function(data){
				if(data.success == 'true'){
					this.UPLOADIMAGE.avatarSrc = data.data.img;
					// 更新头像
					this.UPLOADIMAGE.avatarUpdate();
				}else{
					console.log(data.msg);
				}
			});
		}
		// 更新头像
		,avatarUpdate : function(){
			var param = {url : '/autism/apply/front/user/avatar.update', data : {avatar : this.avatarSrc}};
			JOEDAR.doPostAjax(param,this.avatarUpdateFn);
		}
		,avatarUpdateFn : function(data){
			if(data.success == 'true'){
				USR.DATA.avatar = data.data.img;
				USR.set();
				// 显示头像
				this.$refs.avatarDOM.show();
				// header的avatarDOM显示
				HEADER.$refs.headerUsr.$refs.avatarDOM.show();
				// 隐藏预览图片区域
				this.$refs.uploadImage.isImageHide();
			}
		}
	}
});
