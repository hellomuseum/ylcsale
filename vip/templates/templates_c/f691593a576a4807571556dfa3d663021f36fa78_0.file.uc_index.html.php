<?php /* Smarty version 3.1.27, created on 2016-04-25 01:52:22
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\uc_index.html" */ ?>
<?php
/*%%SmartyHeaderCode:19647571d7856791804_90905905%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f691593a576a4807571556dfa3d663021f36fa78' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\uc_index.html',
      1 => 1461549052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19647571d7856791804_90905905',
  'variables' => 
  array (
    'yd_id' => 0,
    'yd_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571d7857367180_76572708',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571d7857367180_76572708')) {
function content_571d7857367180_76572708 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19647571d7856791804_90905905';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>乐天游乐场售票系统</title>
<style type="text/css">
<!--
.style1 {color: #009900}
-->
</style>
</head>

<body>

<center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <table width="58%" height="186"  border="0" cellpadding="5" cellspacing="2" bgcolor="#FFFFFF">
    <tr>
      <td align="center" bgcolor="#CCCCCC"><strong>乐天游乐场售票系统</strong>| <a href="index.php?action=out">退出</a></td>
    </tr>
    <tr>
      <!--  <td align="center" bgcolor="#CCCCCC">您好 <?php echo $_SESSION['yd631_name'];?>
 <span class="style1">欢迎您的到来</span>！</td>-->
      <td align="center" bgcolor="#CCCCCC"><span class="style1">您好！</span><span class="style1"><?php echo $_smarty_tpl->tpl_vars['yd_id']->value;?>
.</span><span class="style1"><?php echo $_smarty_tpl->tpl_vars['yd_name']->value;?>
</span> <span class="style1">欢迎您的到来</span>！</td>
      
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=sp"><img src="image/12s.jpg" style="width:20px;height:20px"/>开始售票</a></td>
    </tr>    
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=p_cx_human"><img src="image/50s.jpg" style="width:20px;height:20px"/>历史售票查询分析（售票员）</a></td>
    </tr>        
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=user_edi"><img src="image/62s.jpg" style="width:20px;height:20px"/>修改自己的信息</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=write"><img src="image/88s.jpg" style="width:20px;height:20px"/>我要留言</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=show_word"><img src="image/97s.jpg" style="width:20px;height:20px"/>查看自己的留言</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=send"><img src="image/98s.jpg" style="width:20px;height:20px"/>我要写信</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=receive_list"><img src="image/logon.gif" style="width:20px;height:20px"/>我的收信箱</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="center.php?action=send_list"><img src="image/Lotus.gif" style="width:20px;height:20px"/>我的发信箱</a></td>
    </tr>
  </table>
<marquee style="WIDTH: 500px; HEIGHT: 10px" scrollamount="5" direction="left" >
<div align="left" >
</div >
<center ><font face="黑体" color="#008000" size="4" ></font ></center >
<div align="left" >
</div >
<center >
<p ><font color="#ff6600" size="4" >制作人---甘睿</font ></p >
</marquee >
</center>
</body>
</html>
<?php }
}
?>