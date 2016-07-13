<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<script src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript"> 
$(function() { 
$("#btnAjaxGet").click(function(){  
	alert('123');
	$("#divResult").load("./index.php?param=btnAjaxGet_click" + "&timestamp=" + (new Date()).getTime()); //发送Get请求
	});
$("#btnAjaxPost").click(function(event) {  
	$("#divResult").load("./index.php", { "param": "btnAjaxPost_click"}); 
	});

$("#btnAjaxCallBack").click(function(event) { //发送Post请求, 返回后执行回调函数. 
     $("#divResult").load("./index.php", { "param": "btnAjaxCallBack_click" }, function(responseText, textStatus, XMLHttpRequest)
    { responseText = " Add in the CallBack Function! <br/>" + responseText;
  $("#divResult").html(responseText);});
  });
})
</script>

<body>
<div id="divResult"></div>
<button id="btnAjaxGet">使用Load执行Get请求</button><br />
<button id="btnAjaxPost">使用Load执行Post请求</button><br /> 
<button id="btnAjaxCallBack">使用带有回调函数的Load方法</button><br />
</body>
</html>
