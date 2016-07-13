<?php /* Smarty version 3.1.27, created on 2016-05-31 02:10:42
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\tjgl_pz_bb.html" */ ?>
<?php
/*%%SmartyHeaderCode:2892574cf2a29a8a84_94669792%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb27401bbed02b7806d6dc28fb0b82fe52f583c' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\tjgl_pz_bb.html',
      1 => 1464660638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2892574cf2a29a8a84_94669792',
  'variables' => 
  array (
    'tjrq' => 0,
    'sqlwhere2' => 0,
    'list' => 0,
    'list_hj' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574cf2a3cb9d07_24458307',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574cf2a3cb9d07_24458307')) {
function content_574cf2a3cb9d07_24458307 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2892574cf2a29a8a84_94669792';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php echo '<script'; ?>
 src="../js/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"><?php echo '</script'; ?>
>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>按票种统计</title>
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
    <strong>按票种分组统计报表  || </strong>
    <a href="./index.php?action=tjgl_date_tiaojian">返  回</a>
    <br/>
    <hr>
    <table width="85%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr bgcolor="#FFFFFF">
	  <th width="75%">【票 种】销 售 统 计 报 表</th>
   	  <th width="25%" align="right">统计日期：<?php echo $_smarty_tpl->tpl_vars['tjrq']->value;?>
</th>
    </tr>
    </table>        
    <table width="85%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr bgcolor="#FFFFFF">
	  <td width="100%">统计条件：<?php echo $_smarty_tpl->tpl_vars['sqlwhere2']->value;?>
</td>
    </tr>
    </table>
        
    <table width="85%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr bgcolor="#FFFFFF">
	  <th width="25%" scope="col">票种</th>
	  <th width="19%"  scope="col">售票张数</th>
	  <th width="19%"  scope="col">应收金额</th>
	  <th width="19%"  scope="col">实收金额</th>
	  <th width="16%"  scope="col">找零</th>
	  
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
        <table width="85%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">
        <th width="25%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ticket_kind_name'];?>
</th>
        <th width="19%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sales_amount'];?>
</th>
        <th width="19%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['receivable_money'];?>
</th>
        <th width="19%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['received_money'];?>
</th>
        <th width="16%"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['odd_change'];?>
</th>
        </tr> 
        </table>
        <div class='clear'></div>
    <?php endfor; endif; ?>
    <table width="85%" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr bgcolor="#FFFFFF">
	  <th width="25%" scope="col">合计：</th>
	  <th width="19%"  scope="col"><?php echo $_smarty_tpl->tpl_vars['list_hj']->value[0]['sales_amount'];?>
</th>
	  <th width="19%"  scope="col"><?php echo $_smarty_tpl->tpl_vars['list_hj']->value[0]['receivable_money'];?>
</th>
	  <th width="19%"  scope="col"><?php echo $_smarty_tpl->tpl_vars['list_hj']->value[0]['received_money'];?>
</th>
	  <th width="16%"  scope="col"><?php echo $_smarty_tpl->tpl_vars['list_hj']->value[0]['odd_change'];?>
</th>
	  
    </tr>
    </table>    
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
   
    </div>

</body>
</html>
<?php }
}
?>