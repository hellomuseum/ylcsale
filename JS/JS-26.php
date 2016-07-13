<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	$(function(){
	$("h3").bind("click",function(){
		$('#content').is(':visible')?$('#content').hide('fast'):$('#content')
		.show('fast');
	});
})
</script>
</head>
<body>
<h3>shopnc</h3>
<h3 id="content">ShopNC 显示或隐藏具体内容</h3>
</body>
</html>