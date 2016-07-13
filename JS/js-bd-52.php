<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<title>ShopNC用户注册</title>  
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script language="javascript">
function checkname(){
   $.ajax({
		url: "member.php",     //提交的动态页面地址
		data: 'action=check&username='+escape($('#txtloginname').val()),   //提交过去的参数
		type:'post',   //上面的参数会以POST形式提交给后台
		dataType:"html",   //返回纯文本HTML信息
		beforeSend: function(XMLHttpRequest){
			//ShowLoading('验证中');
		},
		success: function(data){
			if ('0'==data) {/*没有被注册*/
				$("#loginname_sign").html("恭喜您，用户名可以使用");
			}else if ('1'==data) {/*已经被注册*/
				$("#loginname_sign").html("用户名已被注册");
			}else {/*条件不对*/
				$("#loginname_sign").html(data);
			}
		},
		complete: function(XMLHttpRequest, textStatus){
			//HideLoading();
		},
		error: function(){
			$("#loginname_sign").html("请求有误");
		}
	});
}
</script>
</head>
<body>
<form id="ajaxform" name="ajaxform" method="post" action="">
    <p>
    请输入用户名<input type="text" name="username" id="txtloginname"/>
    </p>
    <p id="loginname_sign">提示信息</p>
    <p>    
        <input name="Submit" type="button" value="提交" onclick="checkname()"/>
    </p>
</form>
</body>
</html>
