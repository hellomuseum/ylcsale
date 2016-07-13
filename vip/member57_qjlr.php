<?php

require('config.php');

$yd631_name=$_POST["username"];
@mysql_connect(db_host,db_user,db_pwd) or exit($this->get_error());
mysql_select_db(db_name);
$sql = "select * from period where name='$yd631_name'";
$result=mysql_fetch_row(mysql_query($sql));
if($result){
	$username = 1;
	echo $username;
}else{
	$username = 0;
	echo $username;
}
?>