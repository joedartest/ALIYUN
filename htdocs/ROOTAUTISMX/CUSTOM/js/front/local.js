;(function(){
var pn = location.pathname.replace(/\/autism\/page\//,'');
var title = (function(){
	var arr = document.getElementsByTagName('title')[0].innerText.split(' - '), len = arr.length-1;
	var arr2 = [];
	for(var i=0; i<len; i++){arr2.push(arr[i])}
	return arr2.toString().replace(/,/,' > ');
}());
document.getElementById('local_name').innerHTML = title;
var LOCAL = {
	backBtn : document.getElementById('local_back')
	,back : {
		show : function(){LOCAL.backBtn.className = 'btn back'}
		,hide : function(){LOCAL.backBtn.className = 'btn back hide'}
	}
	,closeBtn : document.getElementById('local_close')
	,close : {
		show : function(){LOCAL.closeBtn.className = 'btn close'}
		,hide : function(){LOCAL.closeBtn.className = 'btn close hide'}
	}
	,init : function(){
		this.backBtn.onclick = this.backBtnClick;
	}
	,backBtnClick : function(){location.href = '/autism/page/ucenter'}
};
LOCAL.init();
}());
