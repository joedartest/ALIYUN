<?php
function createTable($sql,$con){
	if(mysql_query($sql,$con)){
		return returnData(array('success' => true));
	}else{
		$errorMsg = mysql_error();
		if(preg_match("/already\sexists/",$errorMsg)){
			return returnData(array('success' => false, 'msg' => '该表已创建'));
		}else{
			return returnData(array('success' => false, 'msg' => '创建数据表错误 : '.$errorMsg));
		}
	}
}
?>