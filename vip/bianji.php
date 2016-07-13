<div id="writeContent">
<?php
header("Content-type:text/html; charset=utf-8"); // 指定编码
// 获取要编辑信息的id
if(isset($_GET['mid']) && is_numeric($_GET['mid'])) {
	$showid = $_GET['mid'];
} else {
	echo '<script type="text/javascript">window.location.href="../index.php"</script>';
}
  // 连接数据库部分
	$link = @mysql_connect("localhost", "root", "root") or die("Could not connect: " . mysql_error());
	@mysql_select_db("fkc3") or die("Could not use fkc3: " . mysql_error());
	mysql_query("set names utf8");	

$sql = "select * from tb_message where id=$showid";		// 查出本条信息的详细信息
$result = mysql_query($sql);
$row = mysql_fetch_array($result); 
?>
 <form action="gengxin.php?mid=<?php echo $showid?>" method="post" name="writeForm">
  <table width="550" border="0" align="center" cellpadding="10" cellspacing="0">
   <tr class="firstTr">
    <td colspan="2"><strong>编辑留言</strong> ：</td>
   </tr>
   <tr>
    <td align="right">留言人：</td>
    <td><?php echo $row['username']?></td>
   </tr>
   <tr>
    <td align="right">标题 ：</td>
    <td><input name="title" type="text" id="title" size="50"  value="<?php echo $row['title'];?>"/></td>
   </tr>
   <tr>
    <td align="right">内容 ：</td>
    <td><textarea name="content" cols="50" rows="5" id="content" ><?php echo $row['content'];?></textarea></td>
    </tr>
    <tr>
     <td align="right">密码：</td>
     <td><input type="password" name="pass" id="pass" />（请输入发表留言时密码）</td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td><input class="bStyleCommon loginB" type="submit" name="submitb" id="submitb" value="提交" />
         <input class="bStyleCommon loginB" type="reset" name="button2" id="button2" value="取消" /></td>
     </tr>
    </table>
  </form>
</div>
