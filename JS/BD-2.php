<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<body>
<table>
<tr><td>
宽: <span id="w"></span>&nbsp;&nbsp;
高: <span id="h"></span>&nbsp;&nbsp;
</td><td align="right">
<span id="thin"> < </span>&nbsp;&nbsp;
<span id="hei"> + </span>&nbsp;&nbsp;
<span id="low"> - </span>&nbsp;&nbsp;
<span id="fat"> > </span></td></tr>
<tr><td align="center"><input type="button" id="up" value="^" style="width:50px" /><br><br><br><input type="button" id="down" style="width:50px" value="v"/></td><td>
<textarea id="comment" rows="10" cols="20">
这里是文本域中的内容。
</textarea></td></tr>
</table>
</body>

<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
//点击时间按钮执行对应事件
$(function(){
var comment = $("#comment");
$('#hei').click(function(){        //改变高度，上限为350
if(comment.height()<300){
    comment.animate({height:"+=50"},400,function(){
    $("#h").html(comment.height());
    });  
   }
});
$('#low').click(function(){         //改变高度，下限为50
if(comment.height()>100){
comment.animate({height:"-=50"},400,function(){	$("#h").html(comment.height());
			});
		}
		});
		$('#thin').click(function(){        //改变宽度，下限为50
		if(comment.width()>100){
			comment.animate({width:"-=50"},400,function(){
				$("#w").html(comment.width());
			});
		}
		});
		$('#fat').click(function(){
		if(comment.width()<300){        //改变宽度，上限为350
			comment.animate({width:"+=50"},400,function(){
				$("#w").html(comment.width());
			});
		}
		});
		$('#up').click(function(){
			comment.stop().animate({scrollTop:"-=50"},400);    //向上滚动
		});
		$('#down').click(function(){
			comment.stop().animate({scrollTop:"+=50"},400);     //向下滚动
		});
	})
</script>


</html>