<?php
function UPLOADIMAGE($OBJ){
	//----------------------------
	// 		限定图片类型
	//----------------------------
	$type = $_FILES['file']['type'];
	$type_is_true = preg_match('/image\/(jpeg|gif|png)/',$type) ? true : false;
	if(!$type_is_true){
		// 图片类型不正确
		returnData(array('success' => false, 'msg' => 'type is wrong'));
		return;
	}

	//----------------------------
	// 	   限定图片大小-5M
	//----------------------------
	$size = (int)$_FILES['file']['size'];
	$maxSize = !empty($OBJ['size']) ? $OBJ['size'] : 5 * 1024 * 1000;
	if($size && $size > $maxSize){
		returnData(array('success' => false, 'msg' => '图片不得超过5M'));
		return;
	}

	//----------------------------
	// 	    上传图片路径
	//----------------------------
	$ROOT = $_SERVER['DOCUMENT_ROOT'].'/UPLOAD/images';
	$path = $OBJ['path'] ? $ROOT.$OBJ['path'] : $ROOT;
	// 创建文件夹
	$dir = iconv('UTF-8','GBK',$path);
	if(!file_exists($dir)) mkdir($dir,0777,true);

	//----------------------------
	// 	  获取文件扩展名 .jpg
	//----------------------------
	$name = $_FILES['file']['name'];
	if(preg_match('/image\/jpeg/',$type)){
		$extension = '.jpg';
	}elseif(preg_match('/image\/gif/',$type)){
		$extension = '.gif';
	}elseif(preg_match('/image\/png/',$type)){
		$extension = '.png';
	}

	// 时间戳
	$time = time();
	// 防止文件名重复
	$filename = $path.'/'.$OBJ['userId'].$time.$extension;
	// 转码 把utf-8转成gb2312,返回转换后的字符串，或者在失败时返回FALSE
	$filename = iconv('UTF-8','gb2312',$filename);
	// 图片路径
	$src = '/UPLOAD/images'.$OBJ['path'].'/'.$OBJ['userId'].$time.$extension;

	if(file_exists($filename)){
		returnData(array('success' => false, 'msg' => '该文件已存在'));
	}else{
		if(move_uploaded_file($_FILES['file']['tmp_name'],$filename)){
			$data = array(
				'img' => $src
			);
			returnData(array('success' => true, 'data' => $data));
		}else{
			returnData(array('success' => false, 'msg' => 'fail'));
		}
	}
}
?>
