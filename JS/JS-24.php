<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	function check_alert(){
	var content = $("li").html();
	alert(content);
    $("li").css("color","pink");
	$("p").css("color","pink");
	$("li").css({"color":"Blue","font-size":"24"});
	}
</script>
</head>
<body>
<p>ShopNC</p>
<li>ShopNC</li>
<input type="button" value="输出结果" onclick="check_alert()" />
</body>
</html>

