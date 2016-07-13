<?php /* Smarty version 3.1.27, created on 2016-07-08 04:26:28
         compiled from "F:\wamp\wamp\www\ylcsale\vip\templates\message.html" */ ?>
<?php
/*%%SmartyHeaderCode:23420577f0f543da483_27162272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c91760c38101bdbce8a2964cc19a9bef75cc8d2' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ylcsale\\vip\\templates\\message.html',
      1 => 1459402351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23420577f0f543da483_27162272',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577f0f5446f7a2_02525789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577f0f5446f7a2_02525789')) {
function content_577f0f5446f7a2_02525789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23420577f0f543da483_27162272';
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