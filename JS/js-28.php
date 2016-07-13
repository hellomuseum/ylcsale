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
	function showMsg1(){
		alert("bind成功...");
	$("#content").bind("click", foo); 
	$("h3").bind("click",function(){
		$('#content').is(':visible')?$('#content').hide('fast'):$('#content')
		.show('fast');
		});

	}
	var foo = function () {
 	 alert("foo被执行...");
	};

	function showMsg2(){
	
	$("#content").unbind("click", foo); 
	$("h3").unbind("click");

		alert("取消成功...");
	}
	
</script>
</head>
<body>
<h3 id="content">测试css（）方法</h3>
<h3 id="abcd">ShopNC</h3>
<div id="testDiv1" onclick="showMsg1();">加bind事件</div>
<div id="testDiv1" onclick="showMsg2();">取消bind事件</div>

</body>
</html>

