<div class="_FS_ _HEADER_">
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
										<li><a class="HMENU" href="/personal/page/sport" data-name="sport"><span>运动</span></a></li>
										<li><a class="HMENU" href="/personal/page/blog" data-name="blog"><span>博文</span></a></li>
										<li class="hide"><a class="HMENU" href="/personal/page/stack" data-name="stack"><span>技术栈</span></a></li>
										<li class="hide"><a class="HMENU" href="/personal/page/design" data-name="design"><span>设计</span></a></li>
										<li class="hide"><a class="HMENU" href="/personal/page/music" data-name="music"><span>音乐</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- part right start -->
				<div class="part right" v-show="headerRightShow">


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


					<!-- HEADER USR start -->
					<div class="tab HEADERUSR">
						<div>
							<header-usr-ed ref="headerUsrEd" v-if="isSignined"></header-usr-ed>
							<header-usr-ex ref="headerUsrEx" v-else></header-usr-ex>
						</div>
					</div>
					<!-- HEADER USR end -->


					<!-- HEADER SET start -->
					<div class="tab HEADERSET">
						<div>
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
													<input type="checkbox" class="none" id="darkSwitch">
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
<div style="position:fixed; left:-9999px;">
<input type="text" class="none" name="username" value="">
<input type="password" class="none" name="password" value="">
</div>
