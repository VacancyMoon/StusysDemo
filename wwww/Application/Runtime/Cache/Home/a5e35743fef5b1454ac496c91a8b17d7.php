<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<form method="post" action="/web/index.php/Home/Stusys/stu_modify_pass">
<input type="hidden" name="stu_num" value="<?php echo ($data["stu_num"]); ?>" />
<table border="1">
<tr align="center">学生信息修改</tr>
<tr>
<td>姓名</td>
<td><input type="text" name="stu_name" value="<?php echo ($data["stu_name"]); ?>"></td>
</tr>
<tr>
<td>学院</td>
<td><select name="stu_xy" >
<option  selected = "selected" id="d1"><?php echo ($data["stu_xy"]); ?></option>
<option>---请选择---</option>
<option >信息工程学院</option>
<option >财经学院</option>
<option >工商学院</option>
<option>外国语学院</option>
</select></td>
</tr>
<tr><td>专业</td>
<td><select name="stu_zy" >
<option  selected = "selected" ><?php echo ($data["stu_zy"]); ?></option>
<option>---请选择---</option>
<option>计算机网络技术</option>
<option>计算机应用技术</option>
<option>软件开发</option>
<option>工商管理</option>
</select></td>
</tr>
<tr>
<td>班级</td>
<td><select name="stu_class" >
<option  selected = "selected" ><?php echo ($data["stu_class"]); ?></option>
<option>---请选择---</option>
<option>15网络一班</option>
<option>15网络二班</option>
<option>15网络三班</option>
<option>15网络四班</option>
</select></td>
</tr>
<tr>
<td>性别</td>
<td>
<!--<select name="stu_gender" >
<option selected = "selected"><?php echo ($data["stu_gender"]); ?></option>
<option>---请选择---</option>
<option>男</option>
<option>女</option>
</select>-->
<input type="hidden" id="stu_gender"  value="<?php echo ($data["stu_gender"]); ?>"/>
<input type="radio" name="stu_gender" value="男" id="stu_gender2"/>男
<input type="radio" name="stu_gender" value="女" id="stu_gender3"/>女
<script>
var stu_gender=document.getElementById('stu_gender').value;
var stu_gender2=document.getElementById('stu_gender2');
var stu_gender3=document.getElementById("stu_gender3");
if(stu_gender=="男"){
	stu_gender2.checked=true;
	}
	else{
		stu_gender3.checked=true;
		}
</script>
</td>
</tr>
<tr>
<td>籍贯</td>
<td><input type="text" name="stu_jg" value="<?php echo ($data["stu_jg"]); ?>"></td>
</tr>
<tr>
<td>政治面貌</td>
<td><!--<select name="stu_zz" >
<option selected = "selected"><?php echo ($data["stu_zz"]); ?></option>
<option>---请选择---</option>
<option>团员</option>
<option>党员</option>
</select>-->
<input type="hidden" name="stu_zz" id="stu_zz" value="<?php echo ($data["stu_zz"]); ?>">
<input type="radio" name="stu_zz" id="stu_zz2" value="团员"/>团员
<input type="radio" name="stu_zz" id="stu_zz3" value="党员"/>党员
<script>
var stu_zz=document.getElementById("stu_zz").value;
var stu_zz2=document.getElementById("stu_zz2");
var stu_zz3=document.getElementById("stu_zz3");
if(stu_zz=="团员"){
	stu_zz2.checked=true;
	}else{
	stu_zz3.checked=true;
		}
</script>
</td>
</tr>
<tr>
<td>家庭住址</td>
<td><input type="text" name="stu_home" value="<?php echo ($data["stu_home"]); ?>"></td>
</tr>
<tr>
<td>联系电话</td>
<td><input type="text" name="stu_iphone" value="<?php echo ($data["stu_iphone"]); ?>"></td>
</tr>
<tr><td>兴趣爱好</td>
<td>
<!--<input type="text" name="stu_hobby"  disabled="disabled"  value="<?php echo ($data["stu_hobby"]); ?>">
<input type="checkbox" name="stu_hobby[]" value="打球" />打球<input type="checkbox" name="stu_hobby[]" value="上网" />上网
    <input type="checkbox" name="stu_hobby[]" value="网页设计" />网页设计-->
 <input type="hidden" name="stu_hobby" id="stu_hobby" value="<?php echo ($data["stu_hobby"]); ?>" />
<input type="checkbox" name="stu_hobby[]" id="stu_hobby2" value="打球" />打球<input type="checkbox" name="stu_hobby[]" value="上网"id="stu_hobby3" />上网
    <input type="checkbox" name="stu_hobby[]" id="stu_hobby4" value="网页设计" />网页设计
   <script>
   var stu_hobby=document.getElementById("stu_hobby").value;
var stu_hobby2=document.getElementById("stu_hobby2");
   var stu_hobby3=document.getElementById("stu_hobby3");
   var stu_hobby4=document.getElementById("stu_hobby4");
   if(stu_hobby=="打球"){
	   stu_hobby2.checked=true;
	   }
   else if(stu_hobby=="上网"){
		 stu_hobby3.checked=true;
		 }
	else if(stu_hobby=="网页设计"){
		stu_hobby4.checked=true;
		}
	else if(stu_hobby=="打球,上网"){
			 stu_hobby2.checked=true;
			 stu_hobby3.checked=true;
			 }
	else if(stu_hobby=="打球,网页设计"){
			stu_hobby2.checked=true;
			stu_hobby4.checked=true;
		}
	else if(stu_hobby=="打球,上网,网页设计"){
		     stu_hobby2.checked=true;
			 stu_hobby3.checked=true;
			 stu_hobby4.checked=true;
				 }
	else if(stu_hobby=="上网,网页设计"){
			 stu_hobby3.checked=true;
			 stu_hobby4.checked=true;
			 }
   </script>
    </td>
</tr>
<tr>
<td>学习经历</td>
<td><input type="text" name="stu_study" value="<?php echo ($data["stu_study"]); ?>"></td>
</tr>
<tr>
<td><input type="submit" value="提交" > </td>
</tr>










<!--<tr>
<td><input type="text" name="stu_name" value="<?php echo ($data["stu_name"]); ?>"></td>
<td><select name="stu_xy" >
<option  selected = "selected" id="d1"><?php echo ($data["stu_xy"]); ?></option>
<option>---请选择---</option>
<option >信息工程学院</option>
<option >财经学院</option>
<option >工商学院</option>
<option>外国语学院</option>
</select></td>
<td><select name="stu_zy" >
<option  selected = "selected" ><?php echo ($data["stu_zy"]); ?></option>
<option>---请选择---</option>
<option>计算机网络技术</option>
<option>计算机应用技术</option>
<option>软件开发</option>
<option>工商管理</option>
</select></td>
<td><select name="stu_class" >
<option  selected = "selected" ><?php echo ($data["stu_class"]); ?></option>
<option>---请选择---</option>
<option>15网络一班</option>
<option>15网络二班</option>
<option>15网络三班</option>
<option>15网络四班</option>
</select></td>
<td>
<select name="stu_gender" >
<option selected = "selected"><?php echo ($data["stu_gender"]); ?></option>
<option>---请选择---</option>
<option>男</option>
<option>女</option>
</select>
</td>
<td><input type="text" name="stu_jg" value="<?php echo ($data["stu_jg"]); ?>"></td>
<td><select name="stu_zz" >
<option selected = "selected"><?php echo ($data["stu_zz"]); ?></option>
<option>---请选择---</option>
<option>团员</option>
<option>党员</option>
</select></td>
<td><input type="text" name="stu_home" value="<?php echo ($data["stu_home"]); ?>"></td>
<td><input type="text" name="stu_iphone" value="<?php echo ($data["stu_iphone"]); ?>"></td>
<td>
<input type="text" name="stu_hobby"  disabled="disabled"  value="<?php echo ($data["stu_hobby"]); ?>">
<input type="checkbox" name="stu_hobby[]" value="打球" />打球<input type="checkbox" name="stu_hobby[]" value="上网" />上网
    <input type="checkbox" name="stu_hobby[]" value="网页设计" />网页设计</td>
<td><input type="text" name="stu_study" value="<?php echo ($data["stu_study"]); ?>"></td>
<td><input type="submit" value="提交" > </td>
</tr>-->
</table>
</form>
</body>
</html>