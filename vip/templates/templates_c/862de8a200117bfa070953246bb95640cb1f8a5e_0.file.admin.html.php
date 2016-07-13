<?php /* Smarty version 3.1.27, created on 2016-04-25 02:00:06
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\admin.html" */ ?>
<?php
/*%%SmartyHeaderCode:25680571d7a26664b81_16448516%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '862de8a200117bfa070953246bb95640cb1f8a5e' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\admin.html',
      1 => 1461549599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25680571d7a26664b81_16448516',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571d7a26d1f607_11970439',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571d7a26d1f607_11970439')) {
function content_571d7a26d1f607_11970439 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25680571d7a26664b81_16448516';
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