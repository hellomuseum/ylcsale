<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<body>
<table>
<tr>
<td rowspan="3">
<select id="left" style="width:100px;height:200px" multiple>
<option value="1">Shopnc_1</option>
<option value="2">Shopnc_2</option>
<option value="3">Shopnc_3</option>
<option value="4">Shopnc_4</option>
<option value="5">Shopnc_5</option>
<option value="6">Shopnc_6</option>
<option value="7">Shopnc_7</option>
</select>
</td>
<td></td>
<td rowspan="3">
<select id="right" style="width:100px;height:200px" multiple></select>
</td>
</tr>
<tr><td></td></tr>
<tr><td>
<!--option移动按钮-->
<input type="button" id="allRight"  value=">>" style="width:50px" /><br/>
<input type="button" id="toRight"  value=">|" style="width:50px" /><br/>
<input type="button" id="toLeft"  value="|<" style="width:50px" /><br/>
<input type="button" id="allLeft"  value="<<" style="width:50px" /><br/>
</td></tr>
</table>
</body>

<script src="../js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	$(function(){
		<!--双击移动-->
		$("#left").dblclick(function(){
			$("option:selected",this).appendTo("#right");    //移动所有被选中的option，追加到另一个select中
		});
		$("#right").dblclick(function(){
			$("option:selected",this).appendTo("#left");
		});
		$("#allRight").click(function(){
			$("#left option").appendTo("#right");
		});
		$("#allLeft").click(function(){
			$("#right option").appendTo("#left");
		});
		$("#toRight").click(function(){
			$("#left option:selected").appendTo("#right");
		});
		$("#toLeft").click(function(){
			$("#right option:selected").appendTo("#left");
		});
	});
</script>
</html>