<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("h3").mouseover(function(){
    $("h3").css("background-color","yellow");
  });
});
$(function(){			
	$("h3").hover(function(){$('#content').show();},function(){$('#content').hide();});
})

</script>
</head>
<body>
<h3 >shopnc</h3>
<h3 id="content">ShopNC 显示或隐藏具体内容</h3>
</body>
</html>