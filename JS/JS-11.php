<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	function nc_click(){
          $("td").removeAttr("id");
	}
</script>
</head>
<body>
<table>
	<tr><td>shopnc_1</td><td>shopnc_2</td><td>shopc_3</td></tr>
	<tr><td colspan="2"><input type="button" value="提交" id="nc" 
onclick="nc_click()"/></td></tr>
</table>
</body>
</html>