var UEDITOR = new Vue({
	beforeCreate : function(){
		this.ue = UE.getEditor('ueditor',{
			// 窗口是否可以缩放
			scaleEnabled : false
			// 窗口宽度
			,initialFrameWidth : 100+'%'
			// 窗口高度
			// ,initialFrameHeight : 400
			// 自由高度 false
			,autoHeightEnabled : false
		});
	}
	,destroyed : function(){
		this.ue.destroy();
	}
});
