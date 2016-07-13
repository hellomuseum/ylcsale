<html>
<head>
<title>基础选择器------by ShopNC </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
window.onload = function(){                            //页面所有元素加载完毕
	var items = document.getElementsByTagName("b");   //获取页面中的所有b元素
	for(var i=0;i < items.length;i++){	             //循环
		items[i].onclick = function(){               //给每一个b添加onclick事件
			alert("Hello ShopNC");
		}
	}
}
</script>
</head>
<body>
<b>b标记</b>
<p>p标记</p>
<b>b标记</b>
</body>
</html>
