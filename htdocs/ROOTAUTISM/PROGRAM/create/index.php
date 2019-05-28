<!DOCTYPE html>
<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PUBLIC/meta/meta.autism.php'; ?>
<title>创建数据表</title>
<style type="text/css">
._FILELIST_ > table {width:100%;}
._FILELIST_ > table,
._FILELIST_ > table td {border:1px rgba(127,127,127,.2) solid;}
._FILELIST_ > table {border-right:0; border-bottom:0;}
._FILELIST_ > table td {border-left:0; border-top:0; padding:.5em;}
._FILELIST_ > table tr > td:nth-of-type(2) {width:4em; text-align:center;}
._FILELIST_ > table tr > td:nth-of-type(2) > a {color:darkorange;}
._FILELIST_ > table tr > td:nth-of-type(3) {width:18em; color:rgba(127,127,127,.5);}
</style>
</head>
<body>


<div class="_FS_ _MW_ margin">
	<div class="contain">
		<div class="_FILELIST_">
			<table-list ref="tableList"></table-list>
		</div>
	</div>
</div>




<script src="/JS.rem"></script>
<script src="/JS.axios.min"></script>
<script src="/JS.module.global.joedar.vue?<?php echo time() ?>"></script>

<script type="text/javascript">
// 获取目录文件名
var FILES = (function(){
	var str = '<?php echo json_encode(scandir(dirname(__FILE__))); ?>'.replace(/\[\"\.\"\,\"\.\.\"\,/g,'');
	var str = str.replace(/\]/g,'').replace(/\"/g,'').replace(/\.php/g,'');
	var arr = str.split(',');
	for(var i=0; i<arr.length; i++){
		if(arr[i] == 'index') arr.splice(i,1);
	}
	for(var i=0; i<arr.length; i++){
		arr[i] = {name : arr[i], status : ''}
	}
	return {arr : arr}
}());

Vue.component('table-list',{
	data : function(){
		return {
			list : FILES.arr
			,tip : ''
		}
	}
	,template : '<table>'
					+'<tbody>'
						+'<tr v-for="(item,index) in list">'
							+'<td>{{ item.name }}</td>'+'<td><a @click="createTableClick" :data-name="item.name" :data-index="index">创建</a></td>'+'<td>{{ item.status }}</td>'
						+'</tr>'
					+'</tbody>'
				+'</table>'
	,methods : {
		createTableClick : function(e){
			var index = e.target.dataset.index;
			this.index = index;
			var name = e.target.dataset.name;
			var url = '/autism/apply/create/'+name;
			this.url = url;
			this.createTable();
		}
		,createTable : function(){
			var param = {url : this.url, data : ''};
			JOEDAR.doPostAjax(param,this.createTableFn);
		}
		,createTableFn : function(data){
			if(data.success == 'true'){
				this.list[this.index].status = '✔创建成功';
			}else{
				this.list[this.index].status = data.msg;
			}
			
		}
	}
});


var FLIELIST = new Vue({
	el : '._FILELIST_'
	,data : {
		
	}
	,created : function(){

		// this.list = (function(){
		// 	var arr = [];
		// 	if(FILES.arr.length){
		// 		for(var i=0; i<FILES.arr.length; i++){
		// 			arr.push({
		// 				fileName : FILES.arr[i]
		// 				,status : ''
		// 			});
		// 		}
		// 	}
		// 	return arr;
		// }());
		// console.log(this.list);
	}
});


</script>



</body>
</html>