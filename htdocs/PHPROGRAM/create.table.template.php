<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP创建数据表模版</title>
</head>
<body>

<pre>
CREATE TABLE template_table (
	id int(11) NOT NULL AUTO_INCREMENT
	,PRIMARY KEY (id)

	,userid int(11) NULL COMMENT '用户ID'
	,title varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '话题的标题'
	,createDate date NULL COMMENT '创建时间日期'
	,createTime timestamp NULL COMMENT '创建时间戳'
	,editDate date NULL COMMENT '修改时间日期'
	,editTime timestamp NULL COMMENT '修改时间戳'
	,agreeCount int(11) NULL COMMENT '赞同数量'
	,content varchar(20000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '' COMMENT '话题内容'

) ENGINE=MyISAM
DEFAULT CHARACTER SET=gbk COLLATE=gbk_chinese_ci
CHECKSUM=0
DELAY_KEY_WRITE=0;

</pre>




</body>
</html>