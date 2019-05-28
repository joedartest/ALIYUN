<?php

include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/isLogined.php';

// 服务器当前时间戳
$NOWTIME = time() * 1e3;

// id = userId
empty($_REQUEST['id']) ? $id = '' : $id = (int)$_REQUEST['id'];

$OBJ = array(
	// 文章标题
	'title' => !empty($_REQUEST['title']) ? $_REQUEST['title'] : ''
	// 作者
	,'author' => !empty($_REQUEST['author']) ? $_REQUEST['author'] : ''
	// 来源
	,'source' => !empty($_REQUEST['source']) ? $_REQUEST['source'] : ''
	// 来源链接
	,'sourceLink' => !empty($_REQUEST['sourceLink']) ? $_REQUEST['sourceLink'] : ''
	// 分类
	,'category' => !empty($_REQUEST['category']) ? $_REQUEST['category'] : ''
	// 内容
	,'content' => !empty($_REQUEST['content']) ? $_REQUEST['content'] : ''
);



function add($OBJ){
	// 文章标题 - 必填
	if(!$OBJ['title']){
		returnData('false','文章标题不得为空','');
		exit;
	}
	// 作者 - 必填
	if(!$OBJ['author']){
		returnData('false','作者不得为空','');
		exit;
	}
	// 分类 - 必填
	if(!$OBJ['category']){
		returnData('false','分类不得为空','');
		exit;
	}
	// 文章内容 - 必填
	if(!$OBJ['content']){
		returnData('false','文章内容不得为空','');
		exit;
	}

	$title = $OBJ['title'];
	$author = $OBJ['author'];
	$source = $OBJ['source'];
	$sourceLink = $OBJ['sourceLink'];
	$category = $OBJ['category'];
	$content = htmlspecialchars($OBJ['content']);
	$createDate = date('Y-m-d H:i:s', time());
	$sql = "INSERT INTO ARTICLE_STACK (id,title,author,source,sourceLink,category,content,createDate) 
			VALUES (NULL,'$title','$author','$source','$sourceLink','$category','$content','$createDate')";
	if(mysql_query($sql)){
		returnData('true','','');
	}else{
		returnData('false','添加失败','');
	}
}

function edit($id,$OBJ){
	$updateDate = date('Y-m-d H:i:s', time());
	$category = $OBJ['category'];
	$content = $OBJ['content'];
	$sql = mysql_query("UPDATE ARTICLE_STACK SET 
			category = '$category'
			,content = '$content'
			,updateDate = '$updateDate'
			WHERE id = '$id'");
	if($sql){
		returnData('true','','');
	}else{
		returnData('false','修改失败','');
	}
}

if(!$id){
	add($OBJ);
}else{
	edit($id,$OBJ);
}




mysql_close($con);
?>