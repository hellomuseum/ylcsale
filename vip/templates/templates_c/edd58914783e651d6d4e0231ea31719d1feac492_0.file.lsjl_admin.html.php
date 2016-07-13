<?php /* Smarty version 3.1.27, created on 2016-04-24 05:34:41
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\lsjl_admin.html" */ ?>
<?php
/*%%SmartyHeaderCode:9126571c5af1670706_95169339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edd58914783e651d6d4e0231ea31719d1feac492' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\lsjl_admin.html',
      1 => 1461476061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9126571c5af1670706_95169339',
  'variables' => 
  array (
    'list' => 0,
    'hj' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571c5af3d1b782_27153195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c5af3d1b782_27153195')) {
function content_571c5af3d1b782_27153195 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\library\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '9126571c5af1670706_95169339';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>售票信息查询分析</title>
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
    <strong>针对【后台】的售票信息查询分析并加入删除维护功能（特此说明！） ||  </strong>
    <a href="./index.php?action=p_cx_human">返  回</a>
    <br/>
    <hr>
    <table width="100%" height="50"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr bgcolor="#999999">
      <td width="3%">删除</td>
      <td width="3%">ID</td>
      <td width="10%">售票日期</td>
      <td width="14%">售票种类</td>
      <td width="5%">单价</td>
      <td width="5%">售票张数</td>
      <td width="12%">售票期间</td>
      <td width="7%">折扣率</td>
      <td width="7%">应收金额</td>
      <td width="7%">实收金额</td>
      <td width="5%">找零</td>
      <td width="7%">售票人</td>
      <td width="10%">备注</td>
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
        <table width="100%" height="51"  border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
        <tr bgcolor="#CCCCCC">
        <td width="3%"><input type="checkbox" class="child" name="gid[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"/></td>
        <td width="3%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</td>
        <td width="10%"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sales_time'],"%Y-%m-%d");?>
</td>
        <td width="14%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ticket_kind_name'];?>
</td>  
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ticket_kind_price'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sales_amount'];?>
</td>
        <td width="12%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['period_name'];?>
</td>
        <td width="7%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['period_discount'];?>
</td>
        <td width="7%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['receivable_money'];?>
</td>
        <td width="7%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['received_money'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['odd_change'];?>
</td>
        <td width="7%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['human'];?>
</td>
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['remark'];?>
</td>
<!--    <td width="5%"><a href="admin_pass.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&pass=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</a></td>  -->
        <td width="5%"><a href="javascript:if(confirm('确实要删除该售票记录吗?'))location='admin_del_sp_admin.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
'">删除</a></td>
        </tr> 
        </table>
        <div class='clear'></div>
    <?php endfor; endif; ?>
    <div class='clear'></div>
    <table width="100%" height="50"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr bgcolor="#999999">
      <td width="25%">售票张数合计：<?php echo $_smarty_tpl->tpl_vars['hj']->value[0]['zshj'];?>
</td>
      <td width="25%">实收金额合计：<?php echo $_smarty_tpl->tpl_vars['hj']->value[0]['ssjehj'];?>
</td>
      <td width="25%">应收金额合计：<?php echo $_smarty_tpl->tpl_vars['hj']->value[0]['ysjehj'];?>
</td>
      <td width="25%">找零金额合计：<?php echo $_smarty_tpl->tpl_vars['hj']->value[0]['zljehj'];?>
</td>
    </tr>
    </table>    
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
   
    </div>

</body>
</html>
<?php }
}
?>