;(function(){
	var _CODE_ = _CODE_ || {};
	_CODE_ = (function(){
		return {
			init : function(){
				var c = document.getElementsByTagName('code');
				if(c[0]){
					for(var i=0; i<c.length; i++){
						var h = c[i].innerHTML.replace(/</g,'&lt;').replace(/>/g,'&gt;');
						c[i].innerHTML = h;
					}
				}
			}
		}
	})();
	_CODE_.init();
})();
