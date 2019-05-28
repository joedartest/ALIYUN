<div class="_FS_ _ADMINHEADER_">
	<div class="ADMINHEADER">
		<div class="left _Table_">
			<div>
				<div class="pageName"><a href="/personal/admin/index"><b>管理员后台</b></a><span>{{ pageName }}</span></div>
			</div>
		</div>

		<div class="right _Table_">
			<div>
				<div class="nameLogout">
					<div><span>{{ adminUserName }}</span></div>
					<div><a @click="adminLogout">{{ logout }}</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
