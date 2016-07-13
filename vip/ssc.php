<?php
 if(isset($_POST['set'])){
    $number=$_POST['number'];}
   else { 
    $number=5;}
?>
<center>文件上传系统</center>
<?php  if(!isset($_POST['ssc-upload.php'])){  ?>
<form action="ssc.php" method="post">
<table width="635">
<tr> <td width="100%"><b>上传文件数</b></td></tr>
<tr><td><input name="number" type="text"  id="number"  value="<?php echo $number ?>" >
<input name="set" type="submit" id="set"  value="设置" >

你可以设置上传的文件数
</td></tr></table>
</form>
<form method="post" enctype="multipart/form-data"  action="ssc-upload.php" >
<table width="635" >
<tr><td>文件上传</td></tr>
<tr>
 <td width="100%" ><table border="0" width="100%" cellpadding="4"><tr>
 <td width="30%">选择上传文件</td>
 <td width="70%" >
 <input type="hidden" name="MAX_FILE_SIZE" size="5200000">
  
<?php
     for($count=1;$count<$number+1;$count++){
    echo '<input type="file" name="upload'.$count.'" size=29><BR>';
    }
?>
            </td>
       </tr>
    </table>

   </td>
  </tr>
</table>
<input type=hidden name=number value="<?php echo $number; ?>">
<input type="submit" value="开始上载" name="upload">
<a href="index.php?action=out">退出</a>
</form>
<?php
}  else { ?>
<table  width="674">
  <tr>
  <td width="100%">
  文件上传信息</td>
  </tr>
  <Tr>
  <td width="100%" >
  <table border="0" width="100%" cellspacing="3" cellpadding="6">
  <tr>
    <td width="25%" >文件名</td>
 <td width="25%" >大小</td>
 <td width="25%" >类型</td>
 <td width="25%" >状态</td>
  </tr>

</table>
</td>
</Tr>
</table>
<a href="ssc-upload.php">上传更多文件</a>;
</center>
<?php } ?>