<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	var nc = $("#nc");
	var dom = nc.get(0);         //通过jQuery内置方法获取DOM对象
	alert(dom.checked);
</script>
</head>
<body>
<input type="checkbox" id="nc"/>点我 
<input type="button" value="check" onclick="check_alert()" />
</body>
</html>
