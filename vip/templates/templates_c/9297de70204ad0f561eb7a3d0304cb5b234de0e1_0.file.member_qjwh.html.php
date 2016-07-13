<?php /* Smarty version 3.1.27, created on 2016-04-30 04:38:50
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\member_qjwh.html" */ ?>
<?php
/*%%SmartyHeaderCode:20582572436da065902_98908098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9297de70204ad0f561eb7a3d0304cb5b234de0e1' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\member_qjwh.html',
      1 => 1461115085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20582572436da065902_98908098',
  'variables' => 
  array (
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572436dacb2000_52436274',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572436dacb2000_52436274')) {
function content_572436dacb2000_52436274 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20582572436da065902_98908098';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>期间信息维护</title>
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
    <strong>期间信息维护||</strong>
    <a href="./index.php?action=hygl">退出</a>
    <br/>
    <hr>
    <table width="100%" height="50"  border="1" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
    <tr bgcolor="#999999">
      <td width="4%">选则</td>
      <td width="3%">期间名称</td>
      <td width="5%">折扣比率</td>
      <td width="20%">备注</td>
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
        <td width="4%"><input type="checkbox" class="child" name="gid[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"/></td>
        <td width="3%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'];?>
</td>  
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['remark'];?>
</td>
        <td width="5%"><a href="javascript:if(confirm('确实要删除该期间吗?'))location='admin_del_qjwh.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
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