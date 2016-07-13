<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">


$(document).ready(function(){
  $(function(){
	$("div").click(function(){
	   $("#w1").animate({left:"+=200px"},2000);
	   $("#w1").animate({top:"+=100px"},2000);
	   $("#w1").animate({height:"+=30px"},2000);
	   $("#w2").animate({right:"+=200px"},2000);
	   $("#w2").animate({top:"+=100px"},2000);
	   $("#w2").animate({height:"+=30px"},2000);
    });
	$("#w1").hover(function() {
		$(this).stop(true)     //若此时执行
		//mouseleave()则停止当前动画并清除后方动画列表。
		.animate({height : "150" } , 200 )
		.animate({width : "300" } , 300 )
		},function() {
			$(this).stop(true)     //若此时执行
			//mouseenter()则停止当前动画并清除后方动画列表。
			.animate({height : "100" } , 200 )
			.animate({width : "100" } , 300 )
		});

  });
});


</script>
<style type="text/css">
	#w1,#w2{
		position:absolute;
		background:Red;
		width: 100px; 
		height:100px;
	}
	
</style>
</head>
<body>
<div> 
<div id="w1"></div>
<div id="w2"></div>
</div>
</body>
</html>