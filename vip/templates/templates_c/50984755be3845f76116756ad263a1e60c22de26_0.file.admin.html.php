<?php /* Smarty version 3.1.27, created on 2016-07-08 04:27:00
         compiled from "F:\wamp\wamp\www\ylcsale\vip\templates\admin.html" */ ?>
<?php
/*%%SmartyHeaderCode:29234577f0f7425e3d8_70100214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50984755be3845f76116756ad263a1e60c22de26' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ylcsale\\vip\\templates\\admin.html',
      1 => 1461549599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29234577f0f7425e3d8_70100214',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577f0f742fd326_44756885',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577f0f742fd326_44756885')) {
function content_577f0f742fd326_44756885 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29234577f0f7425e3d8_70100214';
echo '<?php 

';?>//实例只展示功能，供学习用
<?php echo '?>';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>乐天游乐场售票系统</title>
</head>

<body>

<center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="index.php?action=admin_cl">
    <table width="500" height="250" border="0" cellpadding="0" cellspacing="0">
      <tr align="center">
        <td colspan="2" bgcolor="#999999">管理员登陆界面 （admin.php）|<a href="index.php">返回</a> </td>
      </tr>
      <tr bgcolor="#CCCCCC">
        <td width="137" align="center"><img src="image/31s.jpg" style="width:30px;height:30px"/>用户：</td>
        <td width="363"><input name="yd631_name" type="text" id="yd631_name"></td>
      </tr>
      <tr bgcolor="#D9D9D9">
        <td align="center"><img src="image/53s.jpg" style="width:30px;height:30px"/>密码：</td>
        <td><input name="yd631_pws" type="password" id="yd631_pws"></td>
      </tr>
      <tr align="center" bgcolor="#CCCCCC">
        <td colspan="2"><input type="submit" name="Submit" value="提交"> 　　
          <input type="reset" name="submit" value="重置"> 
		  
          </td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
  </center>

</body>
</html>
<?php }
}
?>