<?php

require('config.php');

$city_name=$_POST["id"];
@mysql_connect(db_host,db_user,db_pwd) or exit($this->get_error());
mysql_select_db(db_name);
$sql = "select * from city where adress='$city_name'";
$result=mysql_fetch_row(mysql_query($sql));
if($result){
	$id = 1;
	echo $id;
}else{
	$id = 0;
	echo $id;
}
?>