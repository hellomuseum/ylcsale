<html> 
<head> 
<title>生成表格示例</title> 
</head> 
<body> 

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr bgcolor="#FFFFFF">
  <th width="100%">销 售 明 细 表</th>
</tr>
</table>    
<table border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"> 
<tr>
    <th width="4%">ID号</th>
    <th width="10%">售票日期</th>
    <th width="16%">售票种类</th>
    <th width="5%">单价</th>
    <th width="7%">售票张数</th>
    <th width="14%">售票期间</th>
    <th width="7%">折扣率</th>
    <th width="7%">应收金额</th>
    <th width="7%">实收金额</th>
    <th width="5%">找零</th>
    <th width="7%">售票人</th>
    <th width="11%">备注</th>
 </tr>
<?php 
require('config.php');
@mysql_connect(db_host,db_user,db_pwd);
mysql_select_db(db_name);
$sql = "select * from sales_ticket ";
$query = mysql_query($sql); 
$num = mysql_num_rows($query); 
for($i=0;$i <$num;$i++) { 
	$result = mysql_fetch_array($query); 
//	if($i%5==0){ 
//		$str.= " <tr style= 'word-break:break-all '> "; 
//	} 
	$str = " <tr> ";
	$str.= " <td width=4%> ".$result[ "id"]. " </td> "; 
	$str.= " <td width=10%> ".$result[ "sales_time"]. " </td> ";
	$str.= " <td width=16%> ".$result[ "ticket_kind_name"]. " </td> ";
	$str.= " <td width=5%> ".$result[ "ticket_kind_price"]. " </td> ";
	$str.= " <td width=7%> ".$result[ "sales_amount"]. " </td> ";
	$str.= " <td width=14%> ".$result[ "period_name"]. " </td> ";
	$str.= " <td width=7%> ".$result[ "period_discount"]. " </td> ";
	$str.= " <td width=7%> ".$result[ "receivable_money"]. " </td> ";
	$str.= " <td width=7%> ".$result[ "received_money"]. " </td> ";
	$str.= " <td width=5%> ".$result[ "odd_change"]. " </td> ";
	$str.= " <td width=7%> ".$result[ "human"]. " </td> ";
	$str.= " <td width=11%> ".$result[ "remark"]. " </td> ";
	$str.= " </tr> ";
	echo $str;	
//	if(($i+1)%$num==0) { 
//	$str.= " </tr> "; 
//	} 
} 
?> 
</table> 
</body> 
</html>

