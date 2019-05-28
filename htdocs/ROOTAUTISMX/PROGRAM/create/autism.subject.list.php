<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/create.table.php';


$sql = "CREATE TABLE AUTISM_SUBJECT_LIST (
id int(11) NOT NULL AUTO_INCREMENT
,PRIMARY KEY (id)

,userid int(11) NULL COMMENT '用户ID'
,title varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '话题的标题'
,createDate varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '创建时间日期'
,createTime int(10) NULL COMMENT '创建时间戳'
,editDate varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '修改时间日期'
,editTime int(10) NULL COMMENT '修改时间戳'
,agreeCount int(11) NULL COMMENT '赞同数量'
,content varchar(20000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '话题内容'
,contentTxt varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '话题内容txt'

) ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
CHECKSUM=0
DELAY_KEY_WRITE=0";


// 创建表
createTable($sql,$con);
// 关闭连接
mysql_close($con);

?>
