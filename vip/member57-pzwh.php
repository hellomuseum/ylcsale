<?php

require('config.php');
//echo "abcd";
$yd631_id=$_POST["id"];
//echo"<script>alert('member')</script>";
//echo"<script>alert('$yd631_id')</script>";
@mysql_connect(db_host,db_user,db_pwd);
mysql_select_db(db_name);
$sql = "delete from ticket_kind where name='$yd631_id'";
$result=mysql_query($sql);
if($result){
	$id=1;
	echo $id;
}
?>