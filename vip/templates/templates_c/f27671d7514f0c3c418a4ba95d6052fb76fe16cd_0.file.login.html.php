<?php /* Smarty version 3.1.27, created on 2016-07-08 04:25:12
         compiled from "F:\wamp\wamp\www\ylcsale\vip\templates\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:28997577f0f081d0787_02699976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27671d7514f0c3c418a4ba95d6052fb76fe16cd' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ylcsale\\vip\\templates\\login.html',
      1 => 1464495983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28997577f0f081d0787_02699976',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577f0f0824eaa7_15475248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577f0f0824eaa7_15475248')) {
function content_577f0f0824eaa7_15475248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28997577f0f081d0787_02699976';
echo '<?php 
';?>//实例只展示功能，供学习用
<?php echo '?>';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>乐天游乐场售票管理系统-用户登陆</title>
<?php echo '<script'; ?>
 type="text/javascript">
function create_code(){
  document.getElementById('code').src = 'yanzhengma.php?n='+Math.random()*10000;
}
<?php echo '</script'; ?>
>
</head>

<body>

<center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="index.php?action=login_save">
     <table width="500" height="241" border="0" cellpadding="0" cellspacing="0">
      <tr align="center">
        <td colspan="2" bgcolor="#999999">乐天游乐场售票管理系统  用户登陆界面|<a href="index.php">返回</a> </td>
      </tr>
      <tr bgcolor="#CCCCCC">
        <td width="137" align="center"><img src="image/89s.jpg" style="width:30px;height:30px"/>用户：</td>
        <td width="363"><input name="yd631_name" type="text" id="yd631_name"></td>
      </tr>
      <tr bgcolor="#D9D9D9">
        <td align="center"><img src="image/manage.bmp" style="width:30px;height:30px"/>密码：</td>
        <td><input name="yd631_pws" type="password" id="yd631_pws"></td>
      </tr>
      <tr bgcolor="#D9D9D9">
        <td align="center"><img src="image/change.gif" style="width:30px;height:30px"/>验证码：</td>
        <td><input name="yanzhengma" id="yanzhengma"><img id="code" name="code" src="yanzhengma.php"><a class="code" onclick="create_code();">看不清,换一张</a></td>
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