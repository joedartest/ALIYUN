;(function(){
	var _INIT_ = _INIT_ || {};
	_INIT_ = (function(){
		return {
			init : function(){
				this.header();
				this.qrcode();
				this.code();
			}

			,com : function(){
				return /\.com/ig.test(location.hostname) ? '.com' : '';
			}

			,header : function(){
				var head = document.getElementsByTagName('header');
				var host = location.hostname, www = web = webpack = jquery = react = angular = design =  '';
				if(/www/ig.test(host)){www = 'active'}
				else if(/web\./ig.test(host)){web = 'active'}
				else if(/jquery\./ig.test(host)){jquery = 'active'}
				else if(/react\./ig.test(host)){react = 'active'}
				else if(/webpack\./ig.test(host)){webpack = 'active'}
				else if(/angular\./ig.test(host)){angular = 'active'}
				else if(/design\./ig.test(host)){design = 'active'}
				var h = '<div class="fixed">'
							+'<div class="box">'
								+'<div class="logo"><a href="http://www.joedar'+this.com()+'/"></a></div>'
								+'<div class="other">'
									+'<div class="nav">'
										+'<ul class="clearfix">'
											+'<li><div class="_qrcode_" title="手机端浏览"><span id="_qrcode_"></span></div></li>'
											+'<li><a href="/user/register">注册</a></li>'
											+'<li><a href="/user/login">登陆</a></li>'
											// +'<li><a href="https://github.com/joedar" target="_blank">GitHub</a></li>'
											// +'<li><a href="https://www.joedar.com/aboutMe" target="_blank">关于JOEDAR</a></li>'
										+'</ul>'
									+'</div>'
								+'</div>'
								+'<div class="menu">'
									+'<input type="checkbox" class="none" name="menuSwitch" id="menuSwitch">'
									+'<div class="bg"></div>'
									+'<label for="menuSwitch">'
										+'<b class="open tran03">☰</b>'
										+'<b class="close tran03">&times;</b>'
									+'</label>'
									+'<div class="menus tran03">'
										+'<ul>'
											// +'<li><a class="tran03 '+web+'" href="http://web.joedar'+this.com()+'" data-host="web.joedar'+this.com()+'"><i></i>Web前端</a></li>'
											// +'<li><a class="tran03 '+jquery+'" href="http://jquery.joedar'+this.com()+'" data-host="jquery.joedar'+this.com()+'"><i></i>jQuery</a></li>'
											+'<li><a class="tran03 '+webpack+'" href="http://webpack.joedar'+this.com()+'" data-host="webpack.joedar'+this.com()+'"><i></i>Webpack</a></li>'
											+'<li><a class="tran03 '+react+'" href="http://react.joedar'+this.com()+'" data-host="react.joedar'+this.com()+'"><i></i>React</a></li>'
											+'<li><a class="tran03 '+angular+'" href="http://angular.joedar'+this.com()+'" data-host="angular.joedar'+this.com()+'"><i></i>Angular</a></li>'
											+'<li><a class="tran03 '+design+'" href="http://design.joedar'+this.com()+'" data-host="design.joedar'+this.com()+'"><i></i>视觉作品</a></li>'
										+'</ul>'
									+'</div>'
								+'</div>'
								// +'<div class="_qrcode_" title="手机端浏览"><span id="_qrcode_"></span></div>'
							+'</div>'
						+'</div>'
				;
				head[0].innerHTML = h;
			}

			,qrcode : function(){
				new QRCode(document.getElementById('_qrcode_'), location.href);
			}

			,code : function(){
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
	_INIT_.init();
})();