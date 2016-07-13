<?php /* Smarty version 3.1.27, created on 2016-04-24 05:09:00
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\member.html" */ ?>
<?php
/*%%SmartyHeaderCode:31177571c54ec9cbd03_67706047%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f839d34304d8d692f222a3d88cbf812eaac8fb5' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\member.html',
      1 => 1461032187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31177571c54ec9cbd03_67706047',
  'variables' => 
  array (
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571c54f02d6902_84508737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c54f02d6902_84508737')) {
function content_571c54f02d6902_84508737 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\library\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '31177571c54ec9cbd03_67706047';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>售票员信息</title>
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
    <strong>售票员管理||</strong>
    <a href="./index.php?action=hygl">退出</a>
    <br/>
    <hr>
    <table width="100%" height="50"  border="1" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
    <tr bgcolor="#999999">
      <td width="4%">选则</td>
      <td width="3%">ID</td>
      <td width="5%">名字</td>
      <td width="20%">密码</td>
      <td width="3%">性别</td>
      <td width="5%">年龄</td>
      <td width="10%">电话</td>
      <td width="10%">邮件</td>
      <td width="10%">时间</td>
      <td width="5%">现住地</td>
      <td width="10%">曾居地</td>
      <td width="5%">审核</td>
      <td width="5%">管理</td>
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
        <table width="100%" height="51"  border="1" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
        <tr bgcolor="#CCCCCC">
        <td width="4%"><input type="checkbox" class="child" name="gid[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_id'];?>
"/></td>
        <td width="3%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_id'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_name'];?>
</td>  
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_pws'];?>
</td>
        <td width="3%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_sex'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_age'];?>
</td>
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_call'];?>
</td>
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_email'];?>
</td>
        <td width="10%"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_time'],"%Y-%m-%d");?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_address'];?>
</td>
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['life_cityorhamlet'];?>
</td>
        <td width="5%"><a href="admin_pass.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_id'];?>
&pass=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_pass'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_pass'];?>
</a></td> 
        <td width="5%"><a href="javascript:if(confirm('确实要删除该售票员吗?'))location='admin_del.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yd_id'];?>
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