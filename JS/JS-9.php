<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	$(function(){
		$("td").click(function(){
			$(this).clone().prependTo("tr:eq(1)");
			});
	})
</script>
</head>
<body>
<table>
	<tr><td>shopnc_1</td><td>shopnc_2</td><td>shopnc_3</td></tr>
	<tr></tr>
</table>
</body>
</html>
