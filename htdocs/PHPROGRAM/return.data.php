<?php

function returnData($OBJ){
	if($OBJ['success']){
		// 如果有返回数据
		if(!empty($OBJ['data'])){
			$echoArr = array(
				'success' => 'true'
				,'data' => $OBJ['data']
			);
		}
		else{
			$echoArr = array(
				'success' => 'true'
			);
		}
	}
	else{
		$echoArr = array(
			'success' => 'false'
			,'msg' => $OBJ['msg']
		);
	}
	$echoArr = json_encode($echoArr);
	echo $echoArr;
}

?>
