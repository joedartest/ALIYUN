<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

function userids(){
	// 开启session
	session_start();
	$id = (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) ? $_SESSION['userid'] : null;
	return $id;
}

// https://www.cnblogs.com/shenzikun1314/p/6565828.html
// http://www.cnblogs.com/zhangyongl/p/6930787.html

function uploadImage(){
	// 首先判断是否登录
	$userid = userids();
	if(!$userid){
		returnData(array('success' => false, 'msg' => '请先登录'));
		exit;
	}

	empty($_REQUEST['lastModified']) ? $lastModified = '' : $lastModified = (int)$_REQUEST['lastModified'];
	empty($_REQUEST['lastModifiedDate']) ? $lastModifiedDate = '' : $lastModifiedDate = $_REQUEST['lastModifiedDate'];
	empty($_REQUEST['name']) ? $name = '' : $name = $_REQUEST['name'];
	empty($_REQUEST['size']) ? $size = '' : $size = (int)$_REQUEST['size'];
	empty($_REQUEST['type']) ? $type = '' : $type = $_REQUEST['type'];
	empty($_REQUEST['webkitRelativePath']) ? $webkitRelativePath = '' : $webkitRelativePath = $_REQUEST['webkitRelativePath'];
	empty($_REQUEST['tmp_name']) ? $tmp_name = '' : $tmp_name = $_REQUEST['tmp_name'];
	empty($_REQUEST['path']) ? $path = '' : $path = $_REQUEST['path'];

	// 限定图片类型
	$imageType = preg_match('/image\/(jpeg|gif|png)/',$type) ? true : false;
	// 限定图片大小 5M
	$imageSize = 5 * 1024 * 1000;
	// 上传图片的根目录
	$ROOT = $_SERVER['DOCUMENT_ROOT'].'/UPLOAD/images';

	// 如果图片类型不符合规则
	if(!$imageType){
		returnData(array('success' => false, 'msg' => '图片类型不正确'));
		exit;
	}

	// 如果图片大小不符合规则
	if($size && $size > $imageSize){
		returnData(array('success' => false, 'msg' => '图片不得超过5M'));
		exit;
	}

	// 指定路径
	if(!$path){
		returnData(array('success' => false, 'msg' => '未指定路径'));
		exit;
	}else{
		$PATH = $ROOT.$path;
	}

	
	// 构建files对象
	$_FILES['file']['name'] = $name;
	$_FILES['file']['type'] = $type;
	$_FILES['file']['size'] = $size;
	$_FILES['file']['tmp_name'] = $tmp_name;

	// 防止文件名重复

}
uploadImage();
?>
