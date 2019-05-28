Vue.component('list-tr',{
	data : function(){
		return {
			
		}
	}
	,props : ['item']
	,template : '<tr>'
					+'<td class="checkbox"><input type="checkbox" :value="item.id"></td>'
					+'<td v-html="setTitle(item.title)"></td>'
					+'<td>{{ item.author }}</td>'
					+'<td>{{ item.category }}</td>'
					+'<td v-html="setSource(item.source,item.sourceLink)"></td>'
					+'<td>{{ item.likeCount || 0 }}</td>'
					+'<td>{{ item.commentCount || 0 }}</td>'
					+'<td class="dates"><div>{{ item.createDate }}</div><div>{{ item.updateDate }}</div></td>'
					+'<td class="dos">'
						+'<div>'
							+'<a class="btn" @click="editClick" :data-id="item.id">修改</a>'
							+'<a class="btn" @click="delClick" :data-id="item.id">删除</a>'
						+'</div>'
					+'</td>'
				+'</tr>'
	,methods : {
		editClick : function(e){
			var id = e.target.dataset.id;
			location.href = '/personal/admin/stackArticle/add?id='+id;
		}
		,delClick : function(e){
			var id = e.target.dataset.id;
			POPLAYER.confirm.text = '确定删除吗？';
			POPLAYER.confirm.show = true;
			POPLAYER.checked = true;
			POPLAYER.vueComponent = this;
			this.delId = id;
		}
		,confirmClick : function(){
			var param = {url : APIROOT+'/front/stackArticle/del', data : {id : this.delId}};
			JOEDAR.doPostAjax(param,this.delFn);
		}
		,delFn : function(data){

		}
		
		,setTitle : function(title){
			var str = '';
			if(title.length > 10){str = '<span title="'+title+'">'+title.substring(0,10)+'...</span>'}
			else{str = title}
			return str;
		}
		,setSource : function(source,link){
			var str = '';
			if(source){
				if(link){str = '<a href="'+link+'" target="_blank">'+source+'</a>'}
				else{str = source}
			}
			else{str = '--'}
			return str;
		}
	}
});




var LISTABLE = new Vue({
	el : '.stackArticleList'
	,data : {
		page : 1
		,pageSize : 15
		,list : []
	}
	,created : function(){
		this.GET();
	}
	,methods : {
		GET : function(){
			this.createListData();
			this.getList();
		}
		,createListData : function(){
			this.listData = {};
			this.listData.page = this.page;
			this.listData.pageSize = this.pageSize;
		}
		,getList : function(){
			var param = {url : APIROOT+'/front/stackArticle/list', data : this.listData};
			JOEDAR.doPostAjax(param,this.getListFn);
		}
		,getListFn : function(data){
			if(data.success == 'true'){
				this.list = [];
				this.list = data.data.list;
				this.totalCount = data.data.totalCount;
				// 渲染列表
				// this.renderList();
			}else{
				console.log(data.msg);
			}
		}
		// 渲染列表
		,renderList : function(){
			console.log('renderList - ',this.list);
		}
	}
});









