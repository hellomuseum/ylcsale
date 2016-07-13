<html>
<head>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggleClass("main");
  });
});
</script>
<style type="text/css">
.main
{
font-size:100%;
color:red;
}
</style>
</head>

<body>
<h1 id="h1">This is a heading</h1>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<button class="btn1">切换段落的 "main" 类</button>
</body>
</html>
