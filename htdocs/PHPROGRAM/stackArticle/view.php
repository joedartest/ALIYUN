<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

function getView(){

	$id = !empty($_REQUEST['id']) ? (int)$_REQUEST['id'] : '';

	if(!$id){
		returnData('false', 'no id', '');
		exit;
	}

	$sql = 'SELECT * FROM ARTICLE_STACK WHERE id = '.$id;
	$result = mysql_query("$sql");

	while($row = mysql_fetch_array($result)){
		$obj = array(
			'id' => (int)$row['id']
			,'title' => $row['title']
			,'createDate' => $row['createDate']
			,'updateDate' => $row['updateDate']
			,'author' => $row['author']
			,'source' => $row['source']
			,'sourceLink' => $row['sourceLink']
			,'voteCount' => $row['voteCount']
			,'commentCount' => $row['commentCount']
			,'category' => $row['category']
			,'isRecommend' => $row['isRecommend']
			,'isTopping' => $row['isTopping']
			,'content' => $row['content']
		);
	}

	if($obj){
		returnData('true','',$obj);
	}else{
		returnData('false', mysql_error(), '');
	}
}
getView();


mysql_close($con);
?>