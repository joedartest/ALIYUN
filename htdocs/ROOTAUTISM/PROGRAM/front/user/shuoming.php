<?php
/*

//-----------------------------
//       会员注册思路
//-----------------------------
1、校验邮箱地址是否符合js正则
2、填写图形验证码
3、发送邮件验证码 请求接口：sign.up.send.captcha.email，参数：email,captchaImage
	3.1、校验邮箱地址是否符合php正则
	3.2、校验邮箱地址是否已经存在
	3.3、校验图形验证码是否正确
4、校验密码是否符合js正则
5、添加会员 请求接口：sign.up，参数：email,password,captchaEmail
	5.1、校验邮件验证码是否正确
	5.2、校验邮箱地址是否符合php正则
	5.3、校验邮箱地址是否已经存在
6、完成注册









*/
?>