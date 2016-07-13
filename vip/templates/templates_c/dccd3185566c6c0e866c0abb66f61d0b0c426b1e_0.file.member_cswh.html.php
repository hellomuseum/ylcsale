<?php /* Smarty version 3.1.27, created on 2016-04-23 07:23:15
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\member_cswh.html" */ ?>
<?php
/*%%SmartyHeaderCode:17110571b22e3ef4208_75701179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dccd3185566c6c0e866c0abb66f61d0b0c426b1e' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\member_cswh.html',
      1 => 1461391930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17110571b22e3ef4208_75701179',
  'variables' => 
  array (
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571b22e4c8ed86_06612679',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b22e4c8ed86_06612679')) {
function content_571b22e4c8ed86_06612679 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17110571b22e3ef4208_75701179';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>城市信息维护</title>
</head>
<style type="text/css">
*{
    font-size:18px;
}
tr{
  width:1300px;line-height:21px;padding:0;margin:0  
}
td{
  float:left;text-align:left;overflow: hidden; text-overflow:ellipsis;
}
.clear{
    clear:both;
}
</style>

<body>
<div align="center">
    <strong>城市信息维护||</strong>
    <a href="./index.php?action=hygl">退出</a>
    <br/>
    <hr>
    <table width="50%" height="50"  border="1" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
    <tr bgcolor="#999999">
      <td width="10%">选则</td>
      <td width="10%">ID</td>
      <td width="25%">城市名称</td>
      <td width="5%">DEL</td>
     </tr>
    </table>
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
        <table width="50%" height="51"  border="1" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
        <tr bgcolor="#CCCCCC">
        <td width="10%"><input type="checkbox" class="child" name="gid[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"/></td>
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['adress'];?>
</td>  
        <td width="5%"><a href="javascript:if(confirm('确实要删除该期间吗?'))location='admin_del_cswh.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
'">删除</a></td>
        </tr> 
        </table>
        <div class='clear'></div>
    <?php endfor; endif; ?>
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
   
    </div>

</body>
</html>
<?php }
}
?>