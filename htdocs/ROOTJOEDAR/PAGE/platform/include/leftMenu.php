<div class="MENU">
	<ul>
		<li>
			<input type="radio" class="none level1" name="menuLevel1" id="admin" :checked="radios.adminChecked">
			<label for="admin"><span>管理员</span></label>
			<ul>
				<li><a :class="active.admin.list" href="/personal/admin/admin/list"><span>管理员列表</span></a></li>
				<li><a :class="active.admin.add" href="/personal/admin/admin/add"><span>(添加/修改)管理员</span></a></li>
			</ul>
		</li>
		<li>
			<input type="radio" class="none level1" name="menuLevel1" id="stackArticle" :checked="radios.stackArticleChecked">
			<label for="stackArticle"><span>技术栈文章</span></label>
			<ul>
				<li><a :class="active.stackArticle.list" href="/personal/admin/stackArticle/list"><span>文章列表</span></a></li>
				<li><a :class="active.stackArticle.add" href="/personal/admin/stackArticle/add"><span>(添加/修改)文章</span></a></li>
			</ul>
		</li>
		<li><a href="javascript:;"><span>其他选项</span></a></li>
	</ul>
</div>
