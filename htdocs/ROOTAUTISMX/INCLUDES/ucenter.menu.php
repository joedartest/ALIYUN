<div class="UC_MENU BG" v-show="isShow">
	<div class="ucMenu">
		<div class="part">
			<input type="radio" class="none" name="menuPart" id="u_user" checked>
			<ul>
				<li>
					<label for="u_user"><span>账户与密码</span></label>
					<ul>
						<li><a :class="{active : active.user.profile}" href="/autism/page/ucenter/user.profile"><span>完善资料</span></a></li>
						<li><a :class="{active : active.user.avatar}" href="/autism/page/ucenter/user.avatar"><span>上传头像</span></a></li>
						<li><a :class="{active : active.user.password_edit}" href="/autism/page/ucenter/user.password.edit"><span>修改密码</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="part">
			<input type="radio" class="none" name="menuPart">
			<ul>
				<li>
					<a href="javascript:;"><span>我的话题</span></a>
				</li>
				<li>
					<a href="javascript:;"><span>我的动态</span></a>
				</li>
				<li>
					<a href="javascript:;"><span>消息</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">
	
var UCMENU = new Vue({
	el : '.UC_MENU'
	,data : {
		isShow : true
		,active : {
			user : {
				profile : (/\.profile/.test(location.pathname))
				,avatar : (/\.avatar/.test(location.pathname))
				,password_edit : (/\.password\.edit/.test(location.pathname))
			}
		}
	}
	,created : function(){
		this.isShow = (function(that){
			// 设备宽度
			var width = window.screen.width;
			// 路劲
			var pn = location.pathname;
			// 如果小于640 就是手机端 否则就是PC端
			var t1 = (width < 640) ? 'mobile' : 'pc';
			// 如果是ucenter首页
			var t2 = (/ucenter$/.test(pn)) ? true : false;
			// 如果是手机端并且不是ucenter首页 就隐藏 否则就显示
			that = (t1 == 'mobile' && !t2) ? false : true;
			return that;
		}(this));;
	}
});

</script>

