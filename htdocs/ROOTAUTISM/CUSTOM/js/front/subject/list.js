Vue.component('tab-cards',{
	data : function(){
		return {
			val : 'recomm'
		}
	}
	,template : '<div class="TABCARDS clearfix">'
					+'<label><input type="radio" class="none" name="tabcard" value="recomm" v-model="val" checked @click="radioClick"><span>推荐</span></label>'
					// +'<label><input type="radio" class="none" name="tabcard" value="follow" v-model="val" @click="radioClick"><span>关注</span></label>'
					// +'<label><input type="radio" class="none" name="tabcard" value="hot" v-model="val" @click="radioClick"><span>热榜</span></label>'
				+'</div>'
	,methods : {
		radioClick : function(e){
			// console.log(e.target.value);
		}
	}
});

Vue.component('subject-list',{
	data : function(){
		return {
			page : 1
			,pageSize : 10
			,list : []
		}
	}
	,template : '<div class="list">'
					+'<ul>'
						+'<li v-for="item in list">'
							+'<div class="subject">'
								+'<div class="title">'
									+'<a :href="item.href">{{item.title}}</a>'
								+'</div>'
								+'<div class="content clearfix">'
									+'<div class="content-media">'
										+'<div class="media"></div>'
									+'</div>'
									+'<div class="content-text">'
										+'<div class="text">{{item.contentTxt}}</div>'
									+'</div>'
								+'</div>'
								+'<div class="user-operate clearfix">'
									+'<div class="opt button">'
										+'<div class="vote ex"><span>赞同 {{item.agreeCount}}</span></div>'
									+'</div>'
									+'<div class="opt iconText">'
										+'<div><div class="comments shut"><span class="text">128 条评论</span></div></div>'
									+'</div>'
									+'<div class="opt iconText">'
										+'<div><div class="share"><span class="text">分享</span></div></div>'
									+'</div>'
									+'<div class="opt iconText">'
										+'<div><div class="collect"><span class="text">收藏</span></div></div>'
									+'</div>'
								+'</div>'
							+'</div>'
						+'</li>'
					+'</ul>'
				+'</div>'
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
			var param = {url : '/autism/apply/front/subject/subject.list', data : this.listData};
			JOEDAR.doPostAjax(param,this.getListFn);
		}
		,getListFn : function(data){
			if(data.success == 'true'){
				this.list = data.data.list;
				this.totalCount = data.data.totalCount;
				this.totalPage = data.data.totalPage;
				this.doList();
				// console.log(data.data);
			}else{
				console.log(data.msg);
			}
		}
		,doList : function(){
			if(this.list.length){
				for(var i=0; i<this.list.length; i++){
					this.list[i].href = '/autism/page/subject/detail?id='+this.list[i].id;
				}
			}
		}

	}
	,updated : function(){
		// console.log(this.list);
	}
});

// 960 


var SUBJECTLIST = new Vue({
	el : '._SUBJECT_.LIST'
	,data : {
		addBtnShow : !ISOUT ? 'show' : ''
	}
	,created : function(){
		
	}
	,methods : {
		
	}
});











