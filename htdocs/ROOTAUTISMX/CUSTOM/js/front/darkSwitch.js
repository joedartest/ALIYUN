//----------操作Cookies----------
var _COOKIE_ = (function(){
	return {
		// 设置cookie方法
		set : function(key,val,time,path){
			// 获取当前时间
			var date = new Date();
			// 将date设置为n天以后的时间
			var expiresDays = time;
			// 格式化为cookie识别的时间
			date.setTime(date.getTime()+expiresDays*24*3600*1000);
			// 设置cookie
			var Key_val = key+'='+val;
			var Expires = '; expires='+date.toGMTString();
			var Path = path ? '; path='+path : '';
			var _cookie_ = Key_val + Expires + Path;
			document.cookie = _cookie_;
		}
		// 获取cookie方法
		,get : function(key,path){
			// 获取cookie，并且将获得的cookie格式化，去掉空格字符
			var getCookie = document.cookie.replace(/[ ]/g,'');
			// 将获得的cookie以"分号"为标识 将cookie保存到arrCookie的数组中
			var arrCookie = getCookie.split(';');
			//声明变量tips
			var tips;
			// 使用for循环查找cookie中的tips变量
			for(var i=0; i<arrCookie.length; i++){
				// 将单条cookie用"等号"为标识，将单条cookie保存为arr数组
				var arr = arrCookie[i].split('=');
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
		,del : function(key){
			var date = new Date(), times = date.getTime(), st = times - 10000;
			// 将date设置为过去的时间
			date.setTime(st);
			//设置cookie
			document.cookie = key +'=v; expires ='+ date.toGMTString();
		}
		// 调用方法
		// _COOKIE_.set('key','val',24); 设置为24天过期
		// _COOKIE_.get('key') 获取cooikes
		// _COOKIE_.del('key') 删除cooikes
	}
})();
// _COOKIE_.del('DARKSWITCH');

var _DARKSWITCH_ = _DARKSWITCH_ || {};
_DARKSWITCH_ = (function(){
	return {
		// DS = (white|dark)
		DS : _COOKIE_.get('DARKSWITCH') || 'white'
		,init : function(){
			this.setCookie();
			this.setTheme();
		}
		,setCookie : function(){_COOKIE_.set('DARKSWITCH',this.DS,7,'/')}
		,setTheme : function(){
			var DS = this.DS;
			// meta标签的theme-color的content值：(00BFFF|030303)
			(function(){
				var DOM = document.getElementById('THEMECOLOR');
				if(DS == 'white'){DOM.setAttribute('content','#00BFFF')}
				else if(DS == 'dark'){DOM.setAttribute('content','#030303')}
			}());
			
			// BODYDOM.className
			(function(){
				var DOM = document.getElementsByTagName('body')[0];
				if(DS == 'white'){DOM.className = ''}
				else if(DS == 'dark'){DOM.className = 'dark'}
			}());

			(function(){
				var DOM = document.getElementById('darkSwitch');
				if(DS == 'white'){DOM.removeAttribute('checked')}
				else if(DS == 'dark'){DOM.setAttribute('checked',true)}
			}());
		}
		,clicks : function(e){
			this.DS = e.checked ? 'dark' : 'white';
			this.setCookie();
			this.setTheme();
		}
		,isChecked : function(){
			return '';
		}
	}
}());
_DARKSWITCH_.init();




