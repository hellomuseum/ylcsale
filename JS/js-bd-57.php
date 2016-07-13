<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Untitled Document</title>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"></script>
<script language="javascript">

$(function(){

	$("#form_regist").validate({

		errorClass: "validate-error",
		// 错误提示的css类名"error"
		//如果验证发生错误，为出错的HTML元素应用该CSS样式
 		//errorPlacement：Callback,
		//更改错误信息显示的位置
		//Default: 把错误信息放在验证的元素后面 
		//指明错误放置的位置，默认情况是：error.appendTo(element.parent());即把错误信息放在验证的元素后面 
		//errorPlacement: function(error, element) {  
   		//	 error.appendTo(element.parent());  
		//}

		meta :"validate",
		// 采用meta String方式进行验证（验证内容与写入class中）
		errorElement :"div",
		// 使用"div"标签标记错误， 默认:"label"
		wrapper:"li",
		// 使用"li"标签再把上边的errorELement包起来
		onsubmit:true,
		// 是否在提交时验证,默认:true
		//onfocusout:false,
		// 是否在获取焦点时验证,默认:true
		onkeyup :true,
		// 是否在敲击键盘时验证,默认:true
		onclick:false,
		// 是否在鼠标点击时验证（一般验证checkbox,radiobox）
 		focusCleanup:true,
		// 当未通过验证的元素获得焦点时,并移除错误提示
		focusInvalid: true,
		//是否把焦点聚焦在最后一个动作或者最近的一次出错上 
		submitHandler:
		//通过验证后运行的函数,里面要加上表单提交的函数,否则表单不会提交 
		$(".selector").validate({
   		submitHandler:function(form) {
			alert("验证通过");
			//$(form).ajaxSubmit();
			form.submit();
  			 }
		}),

		rules: {
			txtloginname: {
				required:true,	//必填项
				//minlength:2,
				//maxlength:8
//=======================================================
				minlength:function(){	//最短长度，这里hanZiNum为自定义的验证函数
					doAjax() //执行验证
					return 2;
				},
				maxlength:function(){	//最长长度
					
					return 8;
				}

//=======================================================	

			},
			//必填项，最小长度为2，最大长度为8，有问题将“保存用户注册信息”按钮失效。
			txtPassword: {required:true,minlength:6,maxlength:16},
			//必填项，长度为6至16个字符，有问题将“保存用户注册信息”按钮失效。
			txtcheckpassword: {required:true,minlength:6,maxlength:16,equalTo:'#yd631_pws1'},
			//必填项，长度为6至16个字符，两次密码输入必须相同，有问题将“保存用户注册信息”按钮失效。
			yd631_age: {number: true,min:10,max:150},
			//要求为正整数且位于10和150之间，有问题将“保存用户注册信息”按钮失效。
			yd631_call: {number: true},
			//要求为正整数，有问题将“保存用户注册信息”按钮失效。

			txtemail: {required:true,email:true},
			//必填项，输入格式为邮箱格式，有问题将“保存用户注册信息”按钮失效。
			txtecheckmail: {required:true,email:true,equalTo:'#yd631_email1'},
			//必填项输入格式为邮箱格式，两次邮箱输入必须相同，有问题将“保存用户注册信息”按钮失效。
			code: {required:true},
			//必须输入验证码，有问题将“保存用户注册信息”按钮失效。
			txtZip: {number: true,min:100000,max:999999},
			//要求为正整数且位于100000和999999之间，有问题将“保存用户注册信息”按钮失效。
			txtMobilephone: {number: true,min:10000000000,max:19999999999},
			//要求为正整数且位于10000000000和19999999999 之间
			txtPhone: {number: true},
			//要求为正整数，有问题将“保存用户注册信息”按钮失效。
			txtOtherphone: {number: true},
			//要求为正整数，有问题将“保存用户注册信息”按钮失效。
			txtQQ: {number: true}
			//要求为正整数，有问题将“保存用户注册信息”按钮失效。
		},
		//下面为提示信息
		messages: {
			txtloginname: {required: "用户名不能为空!",minlength: "用户名长度至少是 2 。",maxlength: "用户名超过允许的最大长度（8）。"},
			txtPassword: {required: "密码不能为空!",minlength: "密码长度至少是6位!",maxlength: "密码长度最长是16位!"},
			txtcheckpassword: {required: "重复密码不能为空!",minlength: "重复密码长度至少是6位!",	maxlength: "重复密码长度最长是16位!",equalTo:"两次输入的密码不相同!"},
			yd631_age: {number: "年龄应该为数字!",min:"年龄最小有误（10岁）!",max:"年龄最大有误（最大150岁）!"},
			yd631_call: {number: "电话号码应该为数字!"},
			txtemail: {required: "email地址不能为空!",email: "请输入正确格式的email!"},
			txtecheckmail: {required: "email地址不能为空!",email: "请输入正确格式的email!",equalTo:"两次输入的邮箱地址不相同!"},
			code: {required: "验证码不能为空!"},
			txtZip: {number: "邮编应该为数字!",min:"邮编格式有误!",max:"邮编格式有误!"},
			txtMobilephone: {number: "手机号码应该为数字!",min:"手机格式有误!",max:"手机格式有误!"},
			txtPhone: {number: "电话号码应该为数字!"},
			txtOtherphone: {number: "电话号码应该为数字!"},
			txtQQ: {number: "QQ应该为数字!!"}
		}
		
	});


});



//用户名称验证
 function doAjax() {
	//alert('action=check&username='+escape($('#yd631_name').val()));
 $.ajax({
		url: "member57.php",     //提交的动态页面地址
		data: 'action=check&username='+ $('#yd631_name').val() ,   //提交过去的参数
		type:'post',   //上面的参数会以POST形式提交给后台
		dataType:"html",   //返回纯文本HTML信息
		beforeSend: function(XMLHttpRequest){
//----------------------------------------------------



			//通过表单验证插件实施验证。
			//ShowLoading('验证中');
			//alert('验证中');



//-------------------------------------------------
		},
		success: function(data){
			if ('0'==data) {/*没有被注册*/
			    $("#saveBD").attr("disabled", false);
				$("#loginname_sign").html("恭喜您，用户名可以使用");
			}else if ('1'==data) {/*已经被注册*/
				$("#saveregid").attr("disabled", true);
				$("#saveBD").attr("disabled", true);
				$("#loginname_sign").html("用户名已被注册");
			}else {/*条件不对*/
				$("#saveregid").attr("disabled", true);
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

//用户信息保存部分

function dosave() {
	alert('在此书写保存代码...');
	//$("#saveregid").attr("disabled", true); 
$.ajax({
		url: "member57-2.php",     //提交的动态页面地址
		data: 'action=check&username='+ $('#yd631_name').val() ,   //提交过去的参数
		type:'post',   //上面的参数会以POST形式提交给后台
		dataType:"html",   //返回纯文本HTML信息
		success: function(data){$("#loginname_sign").html(data);}

	});

     }



</script>
</head>
<body>
   
<center><strong>新用户注册</strong>
  <form class="cmxform" id="form_regist" method="post" action="member57-1.php">
<table width="80%" height="550"  border="0" cellpadding="0" cellspacing="1" bgcolor="#000000">
    <tr bgcolor="#CCCCCC">
      <td width="29%" align="right">用户名：</td>
      <td width="71%" align="left"><input name="txtloginname" type="text" id="yd631_name">
	<span id="loginname_sign" style="color: green">3-15个字符(包括小写字母,数字,下划线,中文)</span></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td align="right">密码：</td>
      <td align="left"><input name="txtPassword" type="password" id="yd631_pws1"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td align="right">再输入一遍密码：</td>
      <td align="left"><input name="txtcheckpassword" type="password" id="yd631_pws2"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td align="right">性别：</td>
      <td align="left"><input name="yd631_sex" type="radio" value="男" checked>
        男
          　
          <input type="radio" name="yd631_sex" value="女">　
        女</td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td align="right">年龄：</td>
      <td align="left"><input name="yd631_age" type="text" id="yd631_age" size="10" maxlength="4"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td align="right">电话：</td>
      <td align="left"><input name="yd631_call" type="text" id="yd631_call"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">邮箱：</td>
      <td align="left"><input name="txtemail" type="text" id="yd631_email1"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">再输入一遍邮箱：</td>
      <td align="left"><input name="txtecheckmail" type="text" id="yd631_email2"></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td align="right">验证码：</td>
      <td align="left"><input name="code" type="text" id="yd631_code"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">邮编：</td>
      <td align="left"><input name="txtZip" type="text" id="yd631_txtZip"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">手机号码：</td>
      <td align="left"><input name="txtMobilephone" type="text" id="yd631_txtMobilephone"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">电话号码一：</td>
      <td align="left"><input name="txtPhone" type="text" id="yd631_txtPhone"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">电话号码二：</td>
      <td align="left"><input name="txtOtherphone" type="text" id="yd631_txtOtherphone"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">QQ号：</td>
      <td align="left"><input name="txtQQ" type="text" id="yd631_txtQQ"></td>
    </tr>

    <tr bgcolor="#CCCCCC">
      <td align="right">地址：</td>
      <td align="left"><input name="yd631_address" type="text" id="yd631_address" size="４０"></td>
    </tr>

    <tr align="center" bgcolor="#CCCCCC">
      <td colspan="2">
	<input type="submit" id="saveBD" class="button" value="保存用户注册信息-表单提交" />
　　
        <input type="reset" name="Submit" value="重置"></td>
    </tr>

  </table>
  </form>
<table width="68%" height="30"  border="0" cellpadding="0" cellspacing="1" bgcolor="#000000">
    <tr align="center" bgcolor="#CCCCCC">
      <td colspan="2">
	<input type="button" name="savereg" id="saveregid" value="保存用户注册信息-按钮" onclick="dosave()">
    </tr>
</table>
</center>
</body>
</html>