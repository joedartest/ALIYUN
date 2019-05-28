//---------- 正则表达式 ----------
var _REG_ = (function(){
    return {
        url : /(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?/
        ,numEmail : /[0-9]{6,}|([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)/g
        ,price : /(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/
        ,alipay : /^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89]|9[28][0-9])\d{8}$|^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/
        ,enNum : /^[A-Za-z0-9]+$|^[A-Za-z0-9]{4,40}$/
        ,email : /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/
        ,cnen1 : /^[a-zA-Z\u4e00-\u9fa5]{1,20}$/
        ,cnen2 : /^[a-zA-Z\u4e00-\u9fa5]{2,20}$/
        ,mobile : /^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89]|9[28][0-9])\d{8}$/
        ,cn : /[\u4E00-\u9FA5]/
        ,qq : /^[0-9]{5,11}$/
        ,sms : /^[0-9]{6}$/
        ,num : /^[0-9]*$/
        ,numg : /[0-9]/g
        ,blank : /\s/
    }
})();

// 程序接口主路径
const APIROOT = '/personal/apply';

//---------- 获取url上的参数 ----------
function getUrlRequest(n) {
    var reg = new RegExp('(^|&)'+n+'=([^&]*)(&|$)', 'i'),
        os = window.location.search.substr(1),
        r = os.match(reg);
    if(r){return unescape(r[2])}
    else{return ''}
}

;(function(){
    var HEADERMENU = HEADERMENU || {};
    HEADERMENU = (function(){
        return {
            init : function(){
                var dom = document.getElementsByTagName('a');
                for(var i=0; i<dom.length; i++){
                    if(dom[i].className == 'HMENU'){
                        var reg = new RegExp(dom[i].dataset.name);
                        if(reg.test(location.pathname)){dom[i].className = 'HMENU active'}
                    }
                }
            }
        }
    }());
    HEADERMENU.init();
}());

var JOEDAR = new Vue({
	methods : {
		doPostAjax : function(param,callback,vars){
			var arr = [], str = '';
			for(key in param.data){arr.push(key+'='+param.data[key])}
			str = arr.length ? arr.toString().replace(/\,/g,'&') : '';
			axios.post(param.url,str)
			.then(resp => {callback(resp.data,vars)})
			.catch(err => {
				var msg = '请求失败：'+err.status+','+err.statusText;
				callback(msg,vars)
			});
		}
	}
});






