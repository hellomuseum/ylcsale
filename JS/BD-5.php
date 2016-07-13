<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<script src="../jquery-validation-1.14.0/lib/jquery.js" type="text/javascript"></script>
<script src="../jquery-validation-1.14.0/lib/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
		$("#commentForm36").ajaxForm({
			beforeSubmit:validate
		});
	})
	function validate(formData, jqForm) { 
		var flag=true;                      //初始化flag为true，表示允许提交
		for(var i=0;i<formData.length;i++){    //循环表单数组,遍历每一个值检查是否为空
			if(!formData[i].value){
				flag= false;                //如果存在空值则flag为false, 不允许提交 
				alert("不能为空");
			}else{
				alert(formData[i].value);
			}
		}
		if(flag){
			alert("OK");
		}else{
			alert("No");
		}
        var foo = jqForm[0];
		alert(foo.url.value);
	}
	
</script>

<body>
<form class="cmxform" id="commentForm36" method="post" action="index.php">
	<fieldset>
		<legend>Please enter your url address</legend>
		<p>

			<label for="curl">URL *</label>
			<input id="curl" name="url" />
		</p>
		<p>
			<input class="submit" type="submit" value="Submit" />
		</p>
	</fieldset>
</form>
</body>

</html>