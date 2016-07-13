<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var foo = function(){
	  alert("!!!");
  };
  $("#testDiv1").bind("click",foo);
  $("button").click(function(){
    $("#testDiv1").unbind("click",foo);
  });
});
</script>
</head>
<body>
<div id="testDiv1">单击事件</div>
<button>解除绑定(unbind)</button>
</body>
</html>
