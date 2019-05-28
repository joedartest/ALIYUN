//---------- JS.module.global ----------

var _GLOBALS_ = _GLOBALS_ || {};
_GLOBALS_ = (function(){
    return {
        // 获取元素
        getELE : function(name){return document.getElementById(name) || ''}
    }
})();


//---------- 操作Cookies ----------
var _COOKIE_ = (function(){
    return {
        // 设置cookie方法
        set : function(key,val,time){
            var date = new Date();
            var expiresDays = time;
            date.setTime(date.getTime()+expiresDays*24*3600*1000);
            document.cookie = key +'='+ val +';expires='+ date.toGMTString() + ';path=/;';
        }
        // 获取cookie方法
        ,get : function(key){
            // 获取cookie参数
            var getCookie = document.cookie.replace(/[ ]/g,'');
            var arrCookie = getCookie.split(';');
            // 声明变量tips
            var tips;
            // 使用for循环查找cookie中的tips变量
            for(var i=0; i<arrCookie.length; i++){
                // 将单条cookie用"等号"为标识，将单条cookie保存为arr数组
                var arr=arrCookie[i].split('=');
                // 匹配变量名称，其中arr[0]是指的cookie名称，如果该条变量为tips则执行判断语句中的赋值操作
                if(key == arr[0]){
                    // 将cookie的值赋给变量tips
                    tips = arr[1];
                    // 终止for循环遍历
                    break;
                }
            }
            return tips;
        }
        // 删除cookie方法
        ,deletes : function(key){
            var date = new Date()
                ,times = date.getTime()
                ,st = times - 10000
            ;
            // 将date设置为过去的时间
            date.setTime(st);
            // 设置cookie
            document.cookie = key +'=v; expires ='+ date.toGMTString();
        }
    }
})();


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


// 深色主题开关
;(function(){
    var _DARK_ = _DARK_ || {};
    _DARK_ = (function(){
        return {
            SWITCH : _GLOBALS_.getELE('darkSwitch')
            ,init : function(){
                // 如果存在深色主题开关
                if(this.SWITCH){
                    // 校验开关是否选择
                    this.switchCheck();
                    // 开关点击事件
                    this.SWITCH.onclick = this.switchClick;
                }
            }
            // 校验开关是否选择
            ,switchCheck : function(){
                var ns = _COOKIE_.get('DARKSWITCH') || '';
                if(!ns){_COOKIE_.set('DARKSWITCH','CLOSE',90)}
                else if(ns === 'CLOSE'){this.SWITCH.checked = false}
                else if(ns === 'OPEN'){this.SWITCH.checked = true}
                // 设置BODY的CLASS
                this.setBodyClass();
            }
            // 开关点击事件
            ,switchClick : function(e){
                var val = e.target.checked ? 'OPEN' : 'CLOSE';
                _COOKIE_.set('DARKSWITCH',val,90);
                // 设置BODY的CLASS
                _DARK_.setBodyClass();
            }
            // 设置BODY的CLASS
            ,setBodyClass : function(){
                var ns = _COOKIE_.get('DARKSWITCH') || '';
                if(ns === 'CLOSE'){document.body.classList.remove('DARK')}
                else if(ns === 'OPEN'){document.body.classList.add('DARK')}


                var dom = document.head.getElementsByTagName('meta');
                for(var i=0; i<dom.length; i++){
                    if(dom[i].name == 'theme-color'){
                        if(ns === 'CLOSE'){dom[i].content = '#99ff33'}
                        else if(ns === 'OPEN'){dom[i].content = '#222'}
                    }
                }
            }
        }
    })();
    _DARK_.init();
}());


var _HEADERMENU_ = _HEADERMENU_ || {};
_HEADERMENU_ = (function(){
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
_HEADERMENU_.init();







