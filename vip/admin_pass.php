<?php
//审核用户页面
//admin_pass.php
include("config.php"); //包含文件
$yd631_id=$_GET["id"];  //ID 晕,PHP一定要注意大小写，刚才在这就错了
$yd631_pass=$_GET["pass"]; //PASS
if($yd631_id!="" and $yd631_pass!=""){
	$db=mysql_connect(db_host,db_user,db_pwd) or die("数据库连接失败，请检查！");
    mysql_select_db(db_name,$db);
    //--------------------------------------------------------------------------------------------
    //mysql_query('set names utf8')很重要--设定查询所用的字符集utf8,设定其它的字符集，汉字不能正常显示。
    mysql_query('set names utf8'); //设置查询字符集，设定其它的字符集，汉字不能正常显示。
    //--------------------------------------------------------------------------------------------
if($yd631_pass=="no"){
//如果没有通过验证，给予通过
$sql= "update  users set yd_pass='yes' where yd_id='$yd631_id'";
mysql_query($sql);
echo "<script>location.href='index.php?action=member';</script>";
mysql_close();
exit;
}
if($yd631_pass=="yes"){
//取消通过
$sql= "update  users set yd_pass='no' where yd_id='$yd631_id'";
mysql_query($sql);
echo "<script>location.href='index.php?action=member';</script>";
mysql_close();
exit;
}
}
?>