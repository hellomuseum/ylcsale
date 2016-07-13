<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>基本过滤选择器------by ShopNC</title>
 <!--   引入jQuery --> 
 <script src="../js/jquery-1.11.3.js" type="text/javascript"></script>          
  <script type="text/javascript">
  $(document).ready(function(){   
	  //单击新按钮前重置所有div元素属性
	  $(':input').click(function(){
	     $('div').css("background","#fff");
	  })	
	  //选择被选择器选中的第一个元素
	  $('#btn1').click(function(){
		 $('div:first').css("background","#7755bb")
	  })
	  //选择被选择器选中的最后一个元素
	  $('#btn2').click(function(){
		 $('div:last').css("background","#7755bb")
	  })
	  //选择所有与选择器不匹配的元素
	  $('#btn3').click(function(){
		 $('div:not(.item)').css("background","#7755bb");
	  })
	  //选择所有索引为偶数的元素(索引从0开始)
	  $('#btn4').click(function(){
		 $('div:even').css("background","#7755bb");
	  })
	  //选择所有索引为奇数的元素(索引从0开始)
	  $('#btn5').click(function(){
		 $('div:odd').css("background","#7755bb");
	  })
	  //选取索引等于index(这里为4)的元素(索引从0开始)
	  $('#btn6').click(function(){
		 $('div:eq(4)').css("background","#7755bb");
	  })
	  //选取索引小于index(这里为4)的元素(索引从0开始)
	  $('#btn7').click(function(){
	     $('div:lt(4)').css("background","#7755bb");
	  })
	  //选取索引大于index(这里为4)的元素(索引从0开始)
	  $('#btn8').click(function(){
	     $('div:gt(4)').css("background","#7755bb");
	  })
	  //选取所有不是正在运动的元素
	  $('#btn9').toggle(function(){
		$('div:not(:animated)').hide(1000);
	  },function(){
		$('div:not(:animated)').show(2000);
	  })
//选取所有标题元素
	  $('#btn10').toggle(function(){
		$(':header').css("background","#7755bb");
	  },function(){
		$(':header').css("background","#fff");
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
  <h3>基本过滤选择器</h3> 
  <input type="button" value="选择被选择器选中的第一个元素" id="btn1"/>
  <input type="button" value="选择被选择器选中的最后一个元素" id="btn2"/>
  <input type="button" value="选择所有与选择器不匹配的元素" id="btn3"/>
  <input type="button" value="选择所有索引为偶数的元素(索引从0开始)" id="btn4"/>
  <input type="button" value="选择所有索引为奇数的元素(索引从0开始)" id="btn5"/>
  <input type="button" value="选取索引等于index(这里为4)的元素(索引从0开始)" id="btn6"/>
  <input type="button" value="选取索引小于index(这里为4)的元素(索引从0开始)" id="btn7"/>
  <input type="button" value="选取索引大于index(这里为4)的元素(索引从0开始)" id="btn8"/>
  <input type="button" value="选取所有不是正在运动的元素" id="btn9"/>
  <input type="button" value="选取所有标题元素(如h1、h2、h3...)" id="btn10"/>
  <br />
  
   <!-- 测试的元素 -->
  <div class="first" id="first" >
 id为one,class为one的div
      <div class="item">class为item</div>
  </div>

    <div class="first"  id="second" title="test" >
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
