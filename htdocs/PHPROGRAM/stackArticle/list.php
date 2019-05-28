<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';

function getList(){

	$id = !empty($_REQUEST['id']) ? (int)$_REQUEST['id'] : '';
	$page = !empty($_REQUEST['page']) ? (int)$_REQUEST['page'] : 1;
	$pageSize = !empty($_REQUEST['pageSize']) ? (int)$_REQUEST['pageSize'] : 15;
	$isRecommend = !empty($_REQUEST['isRecommend']) ? (int)$_REQUEST['isRecommend'] : '';

	$select = 'SELECT * FROM ARTICLE_STACK';
	$orderByIdDESC = 'ORDER BY id DESC';
	$limit = '';
	$tj = '';

	// 如果有传page和pageSize
	if($page && $pageSize){$limit = 'limit '.(($page - 1) * $pageSize).','.$pageSize;}
	// 如果有传Id
	if($id){$tj = 'WHERE id = '.$id; $orderByIdDESC = '';}

	$total = mysql_query("$select $tj $orderByIdDESC");
	$result = mysql_query("$select $tj $orderByIdDESC $limit");

	$thisPage = $page;
	$totalCount = mysql_num_rows($total);

	$lists = array();
	while($row = mysql_fetch_array($result)){
		$obj = array(
			'id' => $row['id']
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
		$lists[] = $obj;
	}

	if($lists){
		$data = array(
			'list' => $lists
			,'thisPage' => $thisPage
			,'totalCount' => $totalCount
		);
		returnData('true','',$data);
	}else{
		returnData('false', mysql_error(), '');
	}
}
getList();


mysql_close($con);
?>