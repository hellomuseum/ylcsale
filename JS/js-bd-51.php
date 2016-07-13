<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<title>jquery获取json数据演示页面</title>  
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">  
     function getData(){  
     $("#list").html("");//清空列表中的数据  
   //发送ajax请求  
   $.getJSON( "t2.php",//产生JSON数据的服务端页面  
   //{name:"test"},//向服务器发出的查询字符串（此参数可选）  
   //对返回的JSON数据进行处理，本例以列表的形式呈现  
    function(json){        
   //循环取json中的数据,并呈现在列表中  
    $.each(json,function(i){        
    $("#list").append("<li>name:"+json[i].name+"  Age:"+json[i].age+" sex:"+json[i].sex+"</li>");  
    })  
    })
    }  
    </script>  
</head>  
<body>  
<input id="Button1" type="button" value="获取数据" onclick="getData()" />  
<ul id="list">TEST</ul>  
</body>  
</html>  		
			