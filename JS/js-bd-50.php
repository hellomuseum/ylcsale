<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">

$(function() { 
$("#btnAjaxGet").click(function(event) { 
	alert(123);
$("#divResult").load("./js-12.php?param=btnAjaxGet_click" + "&timestamp=" + (new Date()).getTime()); });
})

</script>
</head>
<body>
<div id="divResult">         </div>
<button id="btnAjaxGet">使用Load执行Get请求</button><br />
</body>
</html>

