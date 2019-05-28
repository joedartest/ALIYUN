<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
// 用户是否登录
include $_SERVER['DOCUMENT_ROOT'].'/ROOTAUTISM/PROGRAM/front/user/sign.in.check.php';
// PHP正则表达式
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.regexp.php';

function subject_add(){
	//------------------------
	// 如果用户未登录 则返回
	//------------------------
	$userId = _USERID_();

	//------------------------
	// 	  校验 - 话题标题
	//------------------------
	$title = !empty($_REQUEST['title']) ? $_REQUEST['title'] : '';
	if(!$title){
		returnData(array('success' => false, 'msg' => '请输入话题标题'));
		return;
	}
	elseif(preg_match('/^[\<\>]{1,150}$/u',$title)){
		returnData(array('success' => false, 'msg' => '不得含有符号(<、>)'));
		return;
	}
	$title = preg_replace('/</','&lt;',$title);
	$title = preg_replace('/>/','&gt;',$title);

	//------------------------
	// 	  校验 - 话题内容
	//------------------------
	$content = !empty($_REQUEST['content']) ? $_REQUEST['content'] : '';
	if(!$content){
		returnData(array('success' => false, 'msg' => '请输入话题内容'));
		return;
	}
	$content = preg_replace('/</','&lt;',$content);
	$content = preg_replace('/>/','&gt;',$content);

	//------------------------
	// 	  校验 - 话题内容TXT
	//------------------------
	$contentTxt = !empty($_REQUEST['contentTxt']) ? $_REQUEST['contentTxt'] : '';
	if(!$contentTxt){
		returnData(array('success' => false, 'msg' => '请输入话题内容'));
		return;
	}

	//------------------------
	// 	 获取 日期和时间戳
	//------------------------
	$date = date('Y-m-d H:i:s');
	$time = time();

	// echo $time;
	// return;

	// 插入数据库
	$sql = "INSERT INTO AUTISM_SUBJECT_LIST 
			(id,userid,title,content,contentTxt,createDate,createTime)
			VALUES
			(NULL,'$userId','$title','$content','$contentTxt','$date','$time')"
	;
	if(mysql_query($sql)){
		returnData(array('success' => true));
	}else{
		returnData(array('success' => false, 'msg' => '添加话题失败'));
	}





	// returnData(array('success' => true));
}
subject_add();







?>
