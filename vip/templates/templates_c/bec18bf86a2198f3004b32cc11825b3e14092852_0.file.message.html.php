<?php /* Smarty version 3.1.27, created on 2016-04-23 07:36:12
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\message.html" */ ?>
<?php
/*%%SmartyHeaderCode:5187571b25ecf26e82_36242244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec18bf86a2198f3004b32cc11825b3e14092852' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\message.html',
      1 => 1459402351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5187571b25ecf26e82_36242244',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571b25ed4f1a00_29414534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b25ed4f1a00_29414534')) {
function content_571b25ed4f1a00_29414534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5187571b25ecf26e82_36242244';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="refresh" content="2;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
    <title>信息提示</title>
</head>
<style>
*{
    font-size:25px;
}
.input{
    width:100px
}
</style>
<body>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br/><hr/ size='2' width='300' align=left>如果页面没有反应 <a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'>点击这里跳转</a>
</body>
</html>
<?php }
}
?>