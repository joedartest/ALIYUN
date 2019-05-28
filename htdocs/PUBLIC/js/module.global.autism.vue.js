// 程序接口主路径
const APIROOT = '/APPLY';
const apiroot = '/autism/apply';
// 正则
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
}());
// 获取参数
function getUrlRequest(n) {
    var reg = new RegExp('(^|&)'+n+'=([^&]*)(&|$)', 'i'),
        os = window.location.search.substr(1),
        r = os.match(reg);
    if(r){return unescape(r[2])}
    else{return ''}
}
// HEADERMENU
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
// 请求接口
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
        ,doFormAjax : function(param,callback,vars){
            var xhr = new XMLHttpRequest();
            xhr.open('POST',param.url,true);
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4){
                    if(xhr.status == 200){
                        callback(JSON.parse(xhr.response),vars);
                    }else{
                        callback('请求失败',vars);
                    }
                }
            };
            xhr.send(param.data);
        }

        //--------------------------
        // change image to base64
        //--------------------------
        ,imgToBase64 : function(file,callback){
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(file){
                callback(this.result);
            };
        }
	}
});

var USR = USR || {};
USR = (function(){
    return {
        DATA : localStorage.USR ? JSON.parse(localStorage.USR) : {}
        ,init : function(){
            if(ISOUT){this.del(); return}
            var str = JSON.stringify(this.DATA);
            if(str == '{}' || !this.DATA.user){this.GET()}
            else{this.set()}
        }
        ,GET : function(){
            var param = {url : apiroot+'/front/user/info.get', data : ''};
            JOEDAR.doPostAjax(param,this.GETED);
        }
        ,GETED : function(data){
            var _ = USR;
            if(data.success == 'true'){_.DATA.user = data.data}
            else{delete _.DATA.user}
            _.set();
        }
        ,set : function(){
            var str = JSON.stringify(this.DATA);
            localStorage.setItem('USR',str);
        }
        ,del : function(){
            localStorage.removeItem('USR');
        }
    }
}());
USR.init();
