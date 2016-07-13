<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="./js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	function check_alert(){
	var content = $("div").text();
	alert(content);
	var num = $("div").children();
	alert(num.length);
	$("p").siblings(".selected").css("background", "yellow");
	}
</script>
<style>
  body { font-size:16px; font-weight:bolder; }
  p { margin:5px 0; }
</style>
</head>
<body>
  <div>
    <span>Hello</span>
    <div class="selected">2 --And Again--2</div>
    <p class="selected">Hello Again</p>
    <div class="selected">And Again</div>
    <p>And One Last Time</p>
  </div>
<script>$("div").children(".selected").css("color", "blue");</script>
<input type="button" value="输出结果" onclick="check_alert()" />
</body>
</html>


