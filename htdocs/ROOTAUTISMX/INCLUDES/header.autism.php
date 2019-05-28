<div class="_FS_ _HEADER_" id="_HEADER_">
	<div class="HEADER">
		<div class="_MW_">
			<div class="header clearfix">
				<div class="part left clearfix">
					<div class="tab home">
						<div><a class="logo" href="/" title="首页"></a></div>
					</div>
					<div class="tab menu">
						<div>
							<input type="checkbox" class="none" id="HEADERMENU">
							<div class="openMenu"><label for="HEADERMENU"><b></b><b></b><b></b></label></div>
							<div class="HEADERMENU">
								<div class="MENU">
									<div class="POPCLOSE"><label for="HEADERMENU"><b></b><b></b></label></div>
									<ul class="clearfix">
										<li><a class="HMENU" href="/autism/page/subject" data-name="subject"><span>话题</span></a></li>
										<li><a class="HMENU" href="/autism/page/tutorial" data-name="tutorial"><span>教程</span></a></li>
										<li><a class="HMENU" href="/autism/page/trend" data-name="trend"><span>动态</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- part right start -->
				<div class="part right">


					<!-- HEADER SEARCH start -->
					<div class="tab HEADERSEARCH">
						<div>
							<input type="checkbox" class="none" id="SEARCH">
							<div class="openSearch"><label class="ICONSEARCH" for="SEARCH"></label></div>
							<div class="search tran03">
								<div class="form clearfix">
									<div class="POPCLOSE"><label for="SEARCH"><b></b><b></b></label></div>
									<div class="put clearfix">
										<span class="searchBtn ICONSEARCH" title="搜索"></span>
										<input type="text" class="blur tran03 keyword" placeholder="搜索">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- HEADER SEARCH end -->


					<div class="tab HEADERQRCODE">
						<div>
							<a class="mobile"><span id="QRCODE"></span></a>
						</div>
					</div>


					<!-- HEADER USR start -->
					<div class="tab HEADERUSR" v-show="headerRightShow">
						<header-usr ref="headerUsr"></header-usr>
					</div>
					<!-- HEADER USR end -->


					<!-- HEADER SET start -->
					<div class="tab HEADERSET">
						<div class="sets">
							<label class="dots" for="SET"><b></b><b></b><b></b></label>
							<input type="checkbox" class="none" id="SET">
							<div class="set tran03">
								<label class="bg" for="SET"></label>
								<div class="setList">
									<ul class="darkbg">
										<!-- darkSwitch -->
										<li class="darkSwitch clearfix">
											<div class="SWITCH clearfix">
												<label>
													<input type="checkbox" class="none" id="darkSwitch" onclick="_DARKSWITCH_.clicks(this)">
													<div class="switch tran03"><i class="tran03"></i></div>
												</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HEADER SET end -->

				</div>
				<!-- part right start -->

			</div>
		</div>
	</div>
</div>
<script src="/autism/js/front/darkSwitch?v=<?php echo time() ?>"></script>
<div style="position:fixed; left:-9999px;">
<script src="/widget/qrcode/qrcode.js"></script>
<script type="text/javascript">
;(function(){
new QRCode(document.getElementById('QRCODE'),location.href);
}());
</script>
</div>
