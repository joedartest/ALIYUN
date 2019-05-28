
<script src="/widget/UEditor-1.4.3.3/ueditor.config.js?<?php echo time() ?>"></script>
<script src="/widget/UEditor-1.4.3.3/ueditor.all.min.js"></script>
<script type="text/javascript">
Vue.component('u-editor',{
	template : '<div class="ueditor-area">'
					+'<div id="ueditor-dom" style="min-height:20em;"></div>'
				+'</div>'
	,created : function(){
		this.ue = UE.getEditor('ueditor-dom');
	}
});
</script>