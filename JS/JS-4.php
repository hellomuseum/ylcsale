<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>层次选择器------by ShopNC</title>
 <!--   引入jQuery --> 
 <script src="../js/jquery-1.11.3.js" type="text/javascript"></script>         
 <link rel="stylesheet" type="text/css" href="../css/style.css" />  
  <script type="text/javascript">
  $(document).ready(function(){   
	  $(':input').click(function(){
	  $('div').css("background","#fff");
	  })	
	   //选择 body内的所有div元素.
      $('#btn1').click(function(){
		  $('body div').css("background","#5544aa");
	  })
	  //在body内的选择元素名是div 的子元素.
	  $('#btn2').click(function(){
		  $('body > div').css("background","#5544aa");
	  })
	  //选择所有class为one 的下一个div元素.
	  $('#btn3').click(function(){
		  $('.first + div').css("background","#5544aa");
	  })
	  //选择id为two的元素后面的所有div同级元素.
	  $('#btn4').click(function(){
		   $('#two ~ div').css("background","#5544aa");
	  })
  });
  </script>
  <style type="text/css">
  div,span,p {
    width:200px;
    height:200px;
    margin:10px;
    background:#fff;
	border: 1px solid;
    float:left;
    font-size:19px;
  }
  div.item { 
    width:60px;
    height:60px;
    background-color: #fff;
    font-size:13px;
  }
  </style>
</head>
<body>
  <h3>层次选择器.</h3> 

  <input type="button" value="选择body内的所有div元素." id="btn1"/>
  <input type="button" value="在body内,选择子元素是div的。" id="btn2"/>
  <input type="button" value="选择所有class为one 的下一个div元素." id="btn3"/>
  <input type="button" value="选择id为two的元素后面的所有div同级元素." id="btn4"/>
  <br />
  
   <!-- 测试的元素 -->
  <div class="first" id="first" >
 id为one,class为one的div
      <div class="item">class为item</div>
  </div>

    <div class="first"  id="two" title="test" >
	 id为two,class为one,title为test的div.
      <div class="item"  title="other">class为item,title为other</div>
      <div class="item"  title="test">class为item,title为test</div>
  </div>

  <div class="first">
      <div class="item">class为item</div>
      <div class="item">class为item</div>
	  <div class="item">class为item</div>
	  <div class="item"></div>
  </div>

  <div class="first">
      <div class="item">class为item</div>
      <div class="item">class为item</div>
	  <div class="item">class为item</div>
	  <div class="item"  title="tesst">class为item,title为tesst</div>
  </div>

  <div style="display:none;"  class="none">style的display为"none"的div</div>
  
  <div class="hide">class为"hide"的div</div>
 
</body>
</html>
