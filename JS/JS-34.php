<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
		$("p").toggle(function(){
			$("").slideUP();
		},function(){
			$("").slideDown();
		});
	});
});
</script>
</head>
<body>
<button id="bt" type="button">切换</button>
<p id="content">ShopNC</p>
</body>
</html>