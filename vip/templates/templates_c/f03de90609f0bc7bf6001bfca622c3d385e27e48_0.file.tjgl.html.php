<?php /* Smarty version 3.1.27, created on 2016-05-29 03:50:37
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\tjgl.html" */ ?>
<?php
/*%%SmartyHeaderCode:9319574a670d43df05_13377141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f03de90609f0bc7bf6001bfca622c3d385e27e48' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\tjgl.html',
      1 => 1464491114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9319574a670d43df05_13377141',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574a670e720387_57331096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574a670e720387_57331096')) {
function content_574a670e720387_57331096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9319574a670d43df05_13377141';
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
<title>统计报表管理</title>
</head>

<body>
<center>
  <table width="51%" height="250"  border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
    <tr>
      <td align="center"><strong>统计报表管理</strong>| 
     <!--<a id = "tuichu"> 退出    </a>-->
     <a href= index.php?action=hygl>返回 </a>
 	<!--<h1><a href="<?php echo '<?php ';?>echo $_SERVER['SCRIPT_NAME']; <?php echo '?>';?>"><img src="img/logo.jpg" /></a></h1>-->
      </td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=tjgl_date_tiaojian"><img src="image/ckfy.bmp" style="width:20px;height:20px"/>按售票【票种】统计</a></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php?action=tjgl_qj_tiaojian"><img src="image/skd-2.bmp" style="width:20px;height:20px"/>按售票【期间】统计</a></td>
    </tr>      
    </table>
</center>
</body>
</html><?php }
}
?>