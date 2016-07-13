<?php /* Smarty version 3.1.27, created on 2016-04-23 13:02:14
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\uc_send_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:5592571b7256ea2189_94843482%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61ea4a575a7a57e67cab5269930240f0c5ab3f8a' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\uc_send_list.html',
      1 => 1461416500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5592571b7256ea2189_94843482',
  'variables' => 
  array (
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571b7257a48d02_90277489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b7257a48d02_90277489')) {
function content_571b7257a48d02_90277489 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\library\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '5592571b7256ea2189_94843482';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>发信箱</title>
</head>
<style>
*{
    font-size:20px;
}
ul{
  width:1500px;line-height:21px;padding:0;margin:0  
}
li{
    float:left;text-align:left;width:300px;
}
.clear{
    clear:both;
}
</style>
<body>
<center>
    <a href="center.php">用户中心</a> >> 发信箱
    <a href="center.php">返回</a>
    <br/>
    <hr/>
    <a href="center.php?action=receive_list">收信箱</a> | 
    <a href="center.php?action=send_list">发信箱</a> | 
    <a href="center.php?action=send">发信</a><br/>
    <ul>
    <li>全选</li>
    <li>标题</li>
    <li>内容</li>
    <li>发送时间</li>
    <li>收信人</li>
    </ul>
    <div class='clear'></div>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
        <ul>
        <li><input type="checkbox" class="child" name="gid[]" /></li>
        <li><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
</li>
        <li><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['createtime'],"%Y-%m-%d");?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd631_name'];?>
</li>
        </ul>
        <div class='clear'></div>
    <?php endfor; endif; ?>
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</center>   
</body>
</html>
<?php }
}
?>