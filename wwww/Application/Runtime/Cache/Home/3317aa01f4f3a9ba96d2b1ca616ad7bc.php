<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<table align="center" border="1">
<tr>
<td>留言人</td>
<td>留言内容</td>
<td>留言时间</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($_SESSION['username']); ?></td>
<td><?php echo ($rs['liuyan']); ?></td>
<td><!--<?php echo (date('Y-m-d H:i:s',$time)); ?>--><?php echo (date("Y-m-d H:i:s",$rs['time'])); ?><!--<?php echo (date('Y-m-d H:i:s',$time)); ?>--></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

</body>
</html>