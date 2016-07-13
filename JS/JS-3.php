<html>
<head>
<title>基础选择器------by ShopNC </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../js/jquery-1.11.3.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){                   // dom元素加载完毕
	$("b").click(function(){      //获取页面中的所有b元素 , 给每一个
//b元素添加onclick事件
		alert("Hello ShopNC");
	   })
	})
</script>
</head>
<body>
<b>b标记</b>
<p>p标记</p>
<b>b标记</b>
</body>
</html>
