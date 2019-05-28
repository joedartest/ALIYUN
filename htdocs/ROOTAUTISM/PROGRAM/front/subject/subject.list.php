<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/sql.count.php';


function subject_list(){

	$page = !empty($_REQUEST['page']) ? (int)$_REQUEST['page'] : 1;
	$pageSize = !empty($_REQUEST['pageSize']) ? (int)$_REQUEST['pageSize'] : 10;
	
	// 分页查询数据库
	$limit = ($page - 1) * $pageSize;
	$result = mysql_query("SELECT * FROM AUTISM_SUBJECT_LIST LIMIT $limit,$pageSize");

	// 获取总行数
	$totalCount = SQLCOUNT('AUTISM_SUBJECT_LIST');

	// 总页数
	$totalPage = $totalCount ? ceil($totalCount/$pageSize) : 1;

	// 构建list
	$list = array();
	while($row = mysql_fetch_array($result)){
		// 根据userId查询AUTISM_USER_LIST表
		$userId = (int)$row['userid'];
		$user = mysql_fetch_array(mysql_query("SELECT * FROM AUTISM_USER_LIST WHERE id='$userId'"));

		$obj = array(
			'id' => (int)$row['id']
			,'userId' => (int)$row['userid']
			,'user' => array(
				'nickname' => $user['nickname']
				,'avatar' => $user['avatar']
				,'babyparent' => $user['babyparent']
				,'babyname' => $user['babyname']
				,'babysex' => $user['babysex']
				,'babybirth' => $user['babybirth']
			)
			,'title' => $row['title']
			,'content' => $row['content']
			,'contentTxt' => $row['contentTxt']
			,'createDate' => $row['createDate']
			,'createTime' => (int)$row['createTime']
			,'editDate' => $row['editDate']
			,'editTime' => (int)$row['editTime']
			,'agreeCount' => $row['agreeCount'] ? (int)$row['agreeCount'] : null
		);
		$list[] = $obj;
	}

	// 构建返回data
	$data = array(
		'list' => $list
		,'page' => $page
		,'totalCount' => $totalCount
		,'totalPage' => $totalPage
	);
	returnData(array('success' => true, 'data' => $data));
}
subject_list();








?>
