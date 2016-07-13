<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<body>
<form>
<input type='checkbox' id='o' name='child' />aaa</br>
<input type='checkbox' id='o' name='child' />bbb</br>
<input type='checkbox' id='o' name='child' />ccc</br>
<input type='checkbox' id='o' name='child' />ddd</br>
<input type='checkbox' id='o' name='child' />eee</br>
<input type='checkbox' id='o' name='child' />fff</br>
</form>
<button id="checkAll" type="button">全选</button>
<button id="checkRev" type="button">反选</button>
</body>

<script src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
 $(function(){
		var children = $("[name=child]:input");      //将常用的jQuery对象存为DOM对象
                                                     //节省资源
		$('#checkAll').click(function(){             //全选
			children.prop("checked",true);
		});
		$('#checkRev').click(function(){            //反选
			children.each(function(){
				this.checked = !this.checked;
			});
		$("#checkAll").attr("checked",children.length==children.filter(":checked").length);
		}); 
		children.click(function(){          //全选checkbox与其控制子checkbox同步
	    $("#checkAll").attr("checked",children.length==children.filter(":checked").length);
		});
	});
</script>
</html>

