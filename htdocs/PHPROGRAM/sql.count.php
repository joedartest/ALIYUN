<?php
// 查询数据表总行数
function SQLCOUNT($TABLE){
	$sql = "SELECT count(*) FROM ".$TABLE;
	$data = mysql_query($sql);
	$rows = mysql_fetch_array($data);
	$rowcount = $rows[0];
	return (int)$rowcount;
}
?>