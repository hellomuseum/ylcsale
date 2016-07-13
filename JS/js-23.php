<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$(document).ready(function() {
		// $(".has_children").click(function() {
		// $(this).addClass("highlight").children("a").show().end().siblings()
		// .removeClass("highlight").children("a").hide();
		// });
		$(".has_children").click(function() {   //将click换成mousemove后,鼠标移动至目录时即展开下拉...
			$(this).addClass("highlight").children("a").show().end().siblings()
					.removeClass("highlight").children("a").hide();
		});

	});

});
</script>

<style type="text/css">
#menu { 
	width:300px; 
}
#xxxt { 
	width:600px; 
}


.has_children{
	background : #555;
	color :#fff;
	cursor:pointer;
}
.menus1{
	background : #555;
	color :#fff;
	cursor:pointer;
}
.highlight{
	color : #fff;
	background : green;
}
div{
	padding:0;
}
div a{
	background : #888;
	display : none;
	float:left;
	width:300px;
}
</style>

</head>

<body>
 <div id="menu">
	<div class="has_children">
		<span>第1章-认识jQuery</span>
		<a>1.1-JavaScript和JavaScript库</a>
		<a>1.2-加入jQuery</a>
		<a>1.3-编写简单jQuery代码</a>
		<a>1.4-jQuery对象和DOM对象</a>
		<a>1.5-解决jQuery和其它库的冲突</a>
		<a>1.6-jQuery开发工具和插件</a>
		<a>1.7-小结</a>
	</div>
	<div class="has_children">
		<span>第2章-jQuery选择器</span>
		<a>2.1-jQuery选择器是什么</a>
		<a>2.2-jQuery选择器的优势</a>
		<a>2.3-jQuery选择器</a>
		<a>2.4-应用jQuery改写示例</a>
		<a>2.5-选择器中的一些注意事项</a>
		<a>2.6-案例研究——类似淘宝网品牌列表的效果</a>
		<a>2.7-还有其它选择器么？</a>
		<a>2.8-小结</a>
	</div>
	<div class="has_children">
		<span>第3章-jQuery中的DOM操作</span>
		<a>3.1-DOM操作的分类</a>
		<a>3.2-jQuery中的DOM操作</a>
		<a>3.3-案例研究——某网站超链接和图片提示效果</a>
		<a>3.4-小结</a>
	</div>
</div>
</body>
</html>


