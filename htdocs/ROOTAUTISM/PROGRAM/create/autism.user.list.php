<?php
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/return.data.php';
include $_SERVER['DOCUMENT_ROOT'].'/PHPROGRAM/create.table.php';


$sql = "CREATE TABLE AUTISM_USER_LIST (
id int(11) NOT NULL AUTO_INCREMENT
,PRIMARY KEY (id)

-- email (注册邮箱地址)
,email varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- pass (用户密码)
,pass varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- password (用户加密的密码)
,password varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- username (用户名)
,username varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- nickname (用户昵称)
,nickname varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- avatar (头像地址)
,avatar varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- confirmed (邮件确认 - 0|1)
,confirmed int(11) NULL
-- babdyparent (宝宝家长 - 爸爸|妈妈)
,babdyparent varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- babyname (宝宝名字)
,babyname varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- babysex (宝宝性别 - 男|女)
,babysex varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''
-- babybirth (宝宝出生年月 - YYYY-DD)
,babybirth varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT ''

) ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
CHECKSUM=0
DELAY_KEY_WRITE=0";

// 创建表
createTable($sql,$con);
// 关闭连接
mysql_close($con);

?>
