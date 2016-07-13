<?php
//删除处理页面
//admin_del.php
function pd(){
if(confirm('删除吗？')){
	return true;
}else{
	return false;
}
}

include("config.php");
$yd631_id = $_GET["id"];
//echo"<script>alert('$yd631_id')</script>"; //gan
if($yd631_id!=""){
	$db=mysql_connect(db_host,db_user,db_pwd) or die("数据库连接失败，请检查！");
	mysql_select_db(db_name,$db);
//--------------------------------------------------------------------------------------------
//mysql_query('set names utf8')很重要--设定查询所用的字符集utf8,设定其它的字符集，汉字不能正常显示。
	mysql_query('set names utf8'); //设置查询字符集，设定其它的字符集，汉字不能正常显示。
//--------------------------------------------------------------------------------------------
	
	$sql= "delete from period where name='$yd631_id'";
//echo "<script>if(confirm('删除吗？')){
//alert(1);
//}else{
//alert(2);
//}</script>";
//-----------------------------------------
	mysql_query($sql) or die(mysql_error());
	echo("<script type='text/javascript'> alert('删除成功！');location.href='index.php?action=qjwh';</script>");
	mysql_close();
	exit;
}else{
	echo ("<script type='text/javascript'> alert('非法操作！');history.go(-1);</script>");
}

?>