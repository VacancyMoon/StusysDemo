<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
a{
	text-decoration: none;
	color: #39C;
	}
</style>
<body>
<table border="1">
<tr><td colspan="13" align="center">学生信息列表[<?php echo (session('username')); ?>]<?php echo ($_SESSION['username']); ?> [<a href="<?php echo U('Stusys/stu_add');?>">添加</a>] [<a href="<?php echo U('Stusys/logout');?>">退出登录</a>]</td></tr>
<tr>
<td>学号</td>
<td>姓名</td>
<td>学院</td>
<td>专业</td>
<td>班级</td>
<td>性别</td>
<td>籍贯</td>
<td>政治面貌</td>
<td>家庭住址</td>
<td>联系电话</td>
<td>兴趣爱好</td>
<td>学习经历</td>
<td>操作</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($rs['stu_num']); ?></td>
<td><?php echo ($rs['stu_name']); ?></td>
<td><?php echo ($rs['stu_xy']); ?></td>
<td><?php echo ($rs['stu_zy']); ?></td>
<td><?php echo ($rs['stu_class']); ?></td>
<td><?php echo ($rs['stu_gender']); ?></td>
<td><?php echo ($rs['stu_jg']); ?></td>
<td><?php echo ($rs['stu_zz']); ?></td>
<td><?php echo ($rs['stu_home']); ?></td>
<td><?php echo ($rs['stu_iphone']); ?></td>
<td><?php echo ($rs['stu_hobby']); ?></td>
<td><?php echo ($rs['stu_study']); ?></td>
<td>
[<a href="<?php echo U('stu_modify?stu_num='.$rs['stu_num']);?>">修改</a>]
[<a href="<?php echo U('stu_delete?stu_num='.$rs['stu_num']);?>">删除</a>]

</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td><?php echo ($page); ?></td>
</tr>
</table>
</body>
</html>