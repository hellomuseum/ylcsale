<?php /* Smarty version 3.1.27, created on 2016-05-28 05:57:53
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\main.html" */ ?>
<?php
/*%%SmartyHeaderCode:720157493361a73c86_94813722%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf9826e56d6a0362802b401a11e07f578b88b59' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\main.html',
      1 => 1464411432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720157493361a73c86_94813722',
  'variables' => 
  array (
    'PageURLk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57493363173187_03139129',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57493363173187_03139129')) {
function content_57493363173187_03139129 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '720157493361a73c86_94813722';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo '<?php ';?>echo $oe; <?php echo '?>';?>" />
<meta name="googlebot" content="index,noarchive,nofollow,noodp" />
<meta name="robots" content="index,nofollow,noarchive,noodp" />
<meta http-equiv="keywords" content="Fulltext Search Engine @project_name@ @package_name@" />
<meta http-equiv="description" content="Fulltext Search for @project_name@, Powered by @package_name@/@package_version@ " />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/bootstrap-ie6.css" />
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<?php echo '<script'; ?>
 src="./js/jquery-1.11.3.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

$(function(){                   // dom元素加载完毕
//	$("#tuichu").click(function(){      //获取页面中的所有b元素 , 给每一个b元素添加onclick事件
//		//alert("Hello ShopNC");
//		var newHref = "<?php echo '<?php ';?>echo './index.php?action=out';<?php echo '?>';?>" ;
//		var newHref = "./index.php?action=out";

//$('#tuichu').attr("href",newHref )
//	   })
	})

<?php echo '</script'; ?>
>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>后台管理</title>
</head>

<body>
<center>
  <table width="51%" height="250"  border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
    <tr>
      <td align="center"><strong>后台管理</strong>| 
     <!--<a id = "tuichu"> 退出    </a>-->
     <a href= <?php echo $_smarty_tpl->tpl_vars['PageURLk']->value;?>
>退出 </a>
 	<!--<h1><a href="<?php echo '<?php ';?>echo $_SERVER['SCRIPT_NAME']; <?php echo '?>';?>"><img src="img/logo.jpg" /></a></h1>-->
      </td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=member"><img src="image/35.jpg" style="width:20px;height:20px"/>售票员管理</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=message_list"><img src="image/genicon.gif" style="width:20px;height:20px"/>售票员留言管理</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=cslr"><img src="image/J0300520.GIF" style="width:20px;height:20px"/>城市信息注册</a></td>
    </tr>      
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=cswh"><img src="image/logon.jpg" style="width:20px;height:20px"/>城市信息维护</a></td>
    </tr>      
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=pzlr"><img src="image/Lotus.gif" style="width:20px;height:20px"/>票种信息注册</a></td>
    </tr>    
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=pzwh"><img src="image/tjpg.jpg" style="width:20px;height:20px"/>票种信息维护</a></td>
    </tr>  
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=qjlr"><img src="image/trafficRed.gif" style="width:20px;height:20px"/>期间信息注册</a></td>
    </tr>    
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=qjwh"><img src="image/wwcban.jpg" style="width:20px;height:20px"/>期间信息维护</a></td>
    </tr>  
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=p_cx_human"><img src="image/88s.jpg" style="width:20px;height:20px"/>历史售票查询（所有）</a></td>
    </tr>          
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=tjgl"><img src="image/1_2.bmp" style="width:20px;height:20px"/>统计报表</a></td>
    </tr>             
    </table>
</center>
</body>
</html><?php }
}
?>