<?php
header("Content-type:text/html; charset=utf-8"); 		// 指定编码	
if(isset($_GET['mid']) && !is_null($_GET['mid'])) {		// 判断是否获取了要删除的留言id
	// 连接数据库部分
	$link = @mysql_connect("localhost", "root", "root") or die("Could not connect: " . mysql_error());
	@mysql_select_db("fkc3") or die("Could not use fkc3: " . mysql_error());
	mysql_query("set names utf8");
	$mid = $_GET['mid'];
	$sql = "delete from tb_message where id=$mid";	
	$result = mysql_query($sql);
	echo '<script type="text/javascript">alert("删除成功！");</script>';
	mysql_close($link);
	}
echo '<script type="text/javascript">location.href="./index.php";</script>';
?>
