<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息注册界面</title>
	<link rel="stylesheet" type="text/css" href="/wwww/Public/css/styles.css">
	<style type="text/css">
		form button{
			width: 230px;
		}
	</style>
</head>
<body>
	<div class="wrapper">

	<div class="container">
		<h1>学生信息注册系统</h1>
		<form class="form" method="post" action="register_pass" >
			<input type="text" placeholder="学号" name="stu_num">
			<input type="text" placeholder="用户名" name="username">
			<input type="password" placeholder="密码" name="password"><br>
            <button type="submit" id="login-button"><strong>注册</strong></button>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		
	</ul>
	
</div>

</body>
</html>