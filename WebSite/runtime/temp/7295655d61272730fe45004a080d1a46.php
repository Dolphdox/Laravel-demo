<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\public/../application/userinfo\view\index\login.html";i:1588736830;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>教务管理系统</title>
<style>
body {
	font-family:"Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size:16px;
	padding:100px;
	text-align:center;
}
.form{
	padding: 15px;
	font-size: 16px;
}

.form .text {
	padding: 3px;
	margin:12px 10px;
	width: 240px;
	height: 24px;
	line-height: 28px;
	border: 1px solid #D4D4D4;
}
.form .btn{
	margin:6px;
	padding: 6px;
	width: 120px;

	font-size: 16px;
	border: 1px solid #D4D4D4;
	cursor: pointer;
	background:#eee;
}
a{
	color: #868686;
	cursor: pointer;
}
a:hover{
	text-decoration: underline;
}
h2{
	color: #4288ce;
	font-weight: 400;
	padding: 6px 0;
	margin: 6px 0 0;
	font-size: 28px;
	border-bottom: 1px solid #eee;
}
div{
	margin:8px;
}
.info{
	padding: 12px 0;
	border-bottom: 1px solid #eee;
}
</style>
</head>
<body>
<h2>登录</h2>
<FORM method="post" class="form" action="<?php echo url('loginCheck'); ?>">
用户名：<INPUT type="text" class="text" name="username"><br/>
用户名：<INPUT type="password" class="text" name="password"><br/>
<INPUT type="submit" class="btn" value=" 保存 ">
</FORM>
</body>
</html>
