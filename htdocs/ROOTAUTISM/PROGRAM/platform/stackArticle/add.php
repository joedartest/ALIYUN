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


function pub($id,$OBJ){
	// 文章标题 - 必填
	if(!$OBJ['title']){
		returnData(array('success' => false, 'msg' => '文章标题不得为空'));
		exit;
	}
	// 作者 - 必填
	if(!$OBJ['author']){
		returnData(array('success' => false, 'msg' => '作者不得为空'));
		exit;
	}
	// 分类 - 必填
	if(!$OBJ['category']){
		returnData(array('success' => false, 'msg' => '分类不得为空'));
		exit;
	}
	// 文章内容 - 必填
	if(!$OBJ['content']){
		returnData(array('success' => false, 'msg' => '文章内容不得为空'));
		exit;
	}
	// 需要添加的项目 - 将内容html标签转义
	$title = htmlspecialchars($OBJ['title']);
	$author = htmlspecialchars($OBJ['author']);
	$source = htmlspecialchars($OBJ['source']);
	$sourceLink = htmlspecialchars($OBJ['sourceLink']);
	$category = htmlspecialchars($OBJ['category']);
	$content = htmlspecialchars($OBJ['content']);
	// 服务器当前时间
	$nowDate = date('Y-m-d H:i:s', time());

	// 如果没有id 添加
	if(!$id){
		$str = '添加';
		// sql新增
		$sql = mysql_query("INSERT INTO ARTICLE_STACK (id,title,author,source,sourceLink,category,content,createDate) 
				VALUES (NULL,'$title','$author','$source','$sourceLink','$category','$content','$nowDate')");
	}
	// 否则 修改
	else{
		$str = '修改';
		// sql修改
		$sql = mysql_query("UPDATE ARTICLE_STACK SET 
				title = '$title'
				,author = '$author'
				,source = '$source'
				,sourceLink = '$sourceLink'
				,category = '$category'
				,content = '$content'
				,updateDate = '$nowDate'
				WHERE id = '$id'");
	}

	if($sql){
		returnData(array('success' => true));
	}else{
		returnData(array('success' => false, 'msg' => $str.'失败'));
	}
}
pub($id,$OBJ);




mysql_close($con);
?>