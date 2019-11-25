<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/wwww/Public/css/pintuer.css">
    <link rel="stylesheet" href="/wwww/Public/css/admin.css">
    <script src="/wwww/Public/js/jquery.js"></script>  
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/wwww/Public/images/1.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a href="##" class="button button-little bg-blue"><span class="icon-user"></span><?php echo ($_SESSION['username']); ?></a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Student/logout');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="<?php echo U('Student/admin_info');?>" target="right"><span class="icon-caret-right"></span>学生信息列表</a></li> 
     <li><a href="<?php echo U('Student/admin_info_add');?>" target="right"><span class="icon-caret-right"></span>添加学生信息</a></li>
      
    <li><a href="<?php echo U('Student/admin_score_add');?>" target="right"><span class="icon-caret-right"></span>学生成绩录入</a></li> 
    <li><a href="<?php echo U('Student/admin_score');?>" target="right"><span class="icon-caret-right"></span>学生成绩查询</a></li>     
    <li><a href="<?php echo U('Student/liuyan');?>" target="right"><span class="icon-caret-right"></span>留言板</a></li>
    

    
      
   <!-- <li><a href="<?php echo U('Student/stu_modify');?>" target="right"><span class="icon-caret-right"></span>修改学生信息</a></li>-->
  </ul>
  <h2><span class="icon-user"></span>用户管理</h2>
  <ul style="display:block">  
    <li><a href="<?php echo U('Student/admin_user');?>" target="right"><span class="icon-caret-right"></span>添加新用户</a></li> 
    <li><a href="<?php echo U('Student/admin_username_info');?>" target="right"><span class="icon-caret-right"></span>查询用户</a></li>
  </ul>
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <!--<li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li>-->
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="admin_info.html" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">

</div>
</body>
</html>