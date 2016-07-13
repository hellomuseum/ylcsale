<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript" >
	function nc_click(){
		var nc = $("<td><a href='#'><font color='#00ff66'>jQuery创建的DOM节点</font></a></td>");
		$("tr").append(nc);
}
</script>
</head>
<body>
<table>
	<tr><td>shopnc_1</td><td>shopnc_2</td></tr>
	<tr><td>shopnc_3</td><td>shopnc_4</td></tr>
	<tr><td colspan="2"><input type="button" value="提交" id="nc" onclick=
"nc_click()"/></td></tr>
</table>
</body>
</html>