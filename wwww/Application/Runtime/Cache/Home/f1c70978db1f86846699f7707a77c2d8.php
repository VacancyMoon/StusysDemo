<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
.box{
	width:200px;
	border:1px solid red;
	}
a {
	text-decoration: none;
	color: #69F;
}
</style>
<body>
<div class="box">
	[<a href="/web/index.php/Home/Index/news_add">添加</a>]
  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><p><?php echo ($rs['title']); ?>[<a href="<?php echo U('news_modify?id='.$rs['id']);?>">修改</a>] [<a href="<?php echo U('news_delete?id='.$rs['id']);?>"> 删除</a>]</p><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</body>
</html>