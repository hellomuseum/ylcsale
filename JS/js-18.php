
<!DOCTYPE html>
<html>
<head>
<meta charset=" utf-8">
<meta name="author" content="http://www.bitsCN.com/" />
<title>jquery 课程</title>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#buttonid2").click(function(){
    alert($("input").val());
  })
})
</script>
</head>
<body>
</div>
  <ul>
    <li>
      <input type="text" value="请输入用户名" />
    </li>
  </ul>
</div>
<button name="button1" id="buttonid1">点击查看效果1</button>
<button name="button2" id="buttonid2">点击查看效果2</button>
<button name="button3" id="buttonid3">点击查看效果3</button>
</body>
</html>
