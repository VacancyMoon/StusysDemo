<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>学生信息登录界面</title>
<link rel="stylesheet" type="text/css" href="/wwww/Public/css/styles.css">
</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>学生信息登录系统</h1>
		<form class="form" method="post" action="loginCheck" >
			<input type="text" placeholder="用户名" name="username">
			<input type="password" placeholder="密码" name="password"><br>
			<button type="submit" id="login-button"><strong>登陆</strong></button>
            <button type="button" id="login-button" onclick="window.location.href='register.html'"><strong>注册</strong></button>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		
	</ul>
	
</div>



</body>
</html>