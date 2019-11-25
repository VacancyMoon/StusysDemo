<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form method="post" action="/web/index.php/Home/Stusys/stu_add_pass">
<table border="1">
<tr>
	<td colspan="2">添加学生信息</td>
</tr>
<tr>
	<td>学号</td>
	<td><input type="text" name="stu_num"/></td>
</tr>
<tr>
	<td>姓名</td>
	<td><input type="text" name="stu_name" /></td>
</tr>
<tr>
	<td>学院</td>
	<td><select name="stu_xy">
    <option>---请选择---</option>
    <option>信息工程学院</option>
    <option>财经学院</option>
    <option>工商学院</option>
    <option>外国语学院</option>
    </select></td>
</tr>
<tr>
	<td>专业</td>
	<td><select name="stu_zy">
    <option>---请选择---</option>
    <option>计算机网络技术</option>
    <option>计算机应用技术</option>
    <option>软件开发</option>
    <option>工商管理</option>
    </select></td>
</tr>
<tr>
	<td>班级</td>
	<td><select name="stu_class">
    <option>---请选择---</option>
    <option>15网络一班</option>
    <option>15网络二班</option>
    <option>15网络三班</option>
    <option>15网络四班</option>
    </select></td>
</tr>
<tr>
	<td>性别</td>
	<td><input type="radio" name="stu_gender"  value="男"/>男
    <input type="radio" name="stu_gender"  value="女"/>女
    </td>
</tr>
<tr>
	<td>籍贯</td>
	<td><input type="text" name="stu_jg" /></td>
</tr>
<tr>
	<td>政治面貌</td>
	<td><input type="radio" name="stu_zz"  value="团员"/>团员
    <input type="radio" name="stu_zz"  value="党员"/>党员</td>
</tr>
<tr>
	<td>家庭住址</td>
	<td><input type="text" name="stu_home" /></td>
</tr>
<tr>
	<td>联系电话</td>
	<td><input type="text" name="stu_iphone" /></td>
</tr>
<tr>
	<td>兴趣爱好</td>
	<td><input type="checkbox" name="stu_hobby[]" value="打球" />打球<input type="checkbox" name="stu_hobby[]" value="上网" />上网
    <input type="checkbox" name="stu_hobby[]" value="网页设计" />网页设计
    </td>
</tr>
<tr>
	<td>学习经历</td>
	<td><textarea name="stu_study" cols="" rows=""></textarea></td>
</tr>
<tr>
	<td colspan="2"><input  type="submit" value="添加"/></td>
</tr>
</table>
</form>
</body>
</html>