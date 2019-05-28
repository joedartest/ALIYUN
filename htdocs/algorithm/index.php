<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>算法</title>
</head>
<body>
<?php
// javascript 10中算法
// https://blog.csdn.net/wuxy720/article/details/78926493
?>


<div id="files">

</div>


<script type="text/javascript">
var dirListStr = '<?php echo json_encode(scandir(dirname(__FILE__))); ?>'.replace(/\[\"\.\"\,\"\.\.\"\,/g,'').replace(/\]/g,'').replace(/\"/g,'');
var dirListArr = dirListStr.split(',');
console.log(dirListArr);
var dom = '';
for(var i=0; i<dirListArr.length; i++){
	dom += '<div><a href="./'+dirListArr[i]+'" target="_blank" title="'+dirListArr[i]+'">'+dirListArr[i]+'</a></div>';
}
document.getElementById('files').innerHTML = dom;
</script>

</body>
</html>