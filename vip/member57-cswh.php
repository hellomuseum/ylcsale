<?php

require('config.php');
//echo "abcd";
$yd631_id=$_POST["id"];
//echo"<script>alert('$yd631_id')</script>";
@mysql_connect(db_host,db_user,db_pwd);
mysql_select_db(db_name);
$sql = "delete from city where id='$yd631_id'";
$resultt=mysql_query($sql);
if($resultt){
	$id=1;
	echo $id;
}
?>