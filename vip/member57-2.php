<?php

require('config.php');
//echo "abcd";
$yd631_id=$_POST["id"];
@mysql_connect(db_host,db_user,db_pwd);
mysql_select_db(db_name);
$sql = "delete from tb_message where id='$yd631_id'";
$result=mysql_query($sql);
if($result){
	$id=1;
	echo $id;
}
?>