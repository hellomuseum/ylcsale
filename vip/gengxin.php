<?php
header("Content-type:text/html; charset=utf-8"); // 指定编码	
if(isset($_POST['submitb'])) {				// 判断是否有表单提交
	// 连接数据库部分
	$link = @mysql_connect("localhost", "root", "root") or die("Could not connect: " . mysql_error());
	@mysql_select_db("fkc3") or die("Could not use fkc3: " . mysql_error());
	mysql_query("set names utf8");	
	// 获取表单数据	
	//$username = $_POST['user'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$password = $_POST['pass'];
	// 获取要更新的留言id
	$mid = $_GET['mid'];
	// 验证密码是否正确
	$sql = "select count(*) from tb_message where password='$password' and id=$mid";	
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	if($row[0] > 0) {						// 密码正确，执行update更新操作
		$sql = "update tb_message set title='$title' , content='$content' where id=$mid";
		$result = mysql_query($sql);
		echo '<script type="text/javascript">alert("更新成功"); location.href=
"./show.php?mid='.$mid.'";</script>';
	} else {							// 密码错误，不更新
		echo '<script type="text/javascript">alert("密码错误，不能更新！!");history.back();</script>';
	}
	mysql_close($link);
}
?>
