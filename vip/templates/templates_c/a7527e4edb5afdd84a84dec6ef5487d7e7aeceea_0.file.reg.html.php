<?php /* Smarty version 3.1.27, created on 2016-07-08 04:25:50
         compiled from "F:\wamp\wamp\www\ylcsale\vip\templates\reg.html" */ ?>
<?php
/*%%SmartyHeaderCode:882577f0f2e1c60f5_18920984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7527e4edb5afdd84a84dec6ef5487d7e7aeceea' => 
    array (
      0 => 'F:\\wamp\\wamp\\www\\ylcsale\\vip\\templates\\reg.html',
      1 => 1464496011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882577f0f2e1c60f5_18920984',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577f0f2e23f1f9_35211210',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577f0f2e23f1f9_35211210')) {
function content_577f0f2e23f1f9_35211210 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '882577f0f2e1c60f5_18920984';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐天游乐场售票管理系统-新用户注册</title>
<link rel="stylesheet" type="text/css" href="./templates/css/demo.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="../JS/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.form.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
function create_code(){
  document.getElementById('code').src = 'yanzhengma.php?n='+Math.random()*10000;
}
$(document).ready(function(){
  $(".box_more :checkbox").click(function(){
    if ($(this).is(':checked')) {
      $('.form_part_3').slideDown();
      $('.change_text').text("收起");
    }else{
      $('.form_part_3').slideUp();
      $('.change_text').text("填写更多资料");
    }
  });
});

$(function(){
    <!--双击移动-->
    $("#left").dblclick(function(){
      $("option:selected",this).appendTo("#right");    //移动所有被选中的option，追加到另一个select中
    });
    $("#right").dblclick(function(){
      $("option:selected",this).appendTo("#left");
    });
    $("#toRight").click(function(){
      $("#left option:selected").appendTo("#right");
    });
    $("#toLeft").click(function(){
      $("#right option:selected").appendTo("#left");
    });
  });

$(function(){

  $("#form_regist").validate({


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
      // yanzhengma: {
      //   function(){
      //     doyzm()
      //   },
      // },
    rules: {
        yanzhengma: {
        required:true,  //必填项
        //minlength:2,
        //maxlength:8
//=======================================================
        minlength:function(){ //最短长度，这里hanZiNum为自定义的验证函数
          doyzm() //执行验证
          return 0;
        },
        maxlength:function(){ //最长长度
          
          return 4;
        }

//======================================================= 

      },
      txtloginname: {
        required:true,  //必填项
        //minlength:2,
        //maxlength:8
//=======================================================
        minlength:function(){ //最短长度，这里hanZiNum为自定义的验证函数
          doAjax(); //执行验证
          return 2;
        },
        maxlength:function(){ //最长长度
          
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
    },
    //下面为提示信息
    messages: {
      txtloginname: {required: "用户名不能为空!",minlength: "用户名长度至少是 2 。",maxlength: "用户名超过允许的最大长度（8）。"},
      txtPassword: {required: "密码不能为空!",minlength: "密码长度至少是6位!",maxlength: "密码长度最长是16位!"},
      txtcheckpassword: {required: "重复密码不能为空!",minlength: "重复密码长度至少是6位!", maxlength: "重复密码长度最长是16位!",equalTo:"两次输入的密码不相同!"},
      yd631_age: {number: "年龄应该为数字!",min:"年龄最小有误（10岁）!",max:"年龄最大有误（最大150岁）!"},
      yd631_call: {number: "电话号码应该为数字!"},
      txtemail: {required: "email地址不能为空!",email: "请输入正确格式的email!"},
    },
    	errorElement:'span',
      errorPlacement: function(error, element) {
         element.parent().find('.in_info').html(error);                    
      },
    
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
        $("#loginname_sign").html("<span style='color:green;line-height:30px;'>恭喜您，用户名可以使用</span>");
      }else if ('1'==data) {/*已经被注册*/
        $("#loginname_sign").html("<span style='color:red;line-height:30px;'>用户名已被注册</span>");
      }else {/*条件不对*/
        $("#saveregid").attr("disabled", true);
        $("#loginname_sign").html(data);
      }
    },
    complete: function(XMLHttpRequest, textStatus){
      //HideLoading();
    },
  });

    }

//验证码验证
 function doyzm() {
  //alert('action=check&username='+escape($('#yd631_name').val()));
 $.ajax({
    url: "yzm.php",     //提交的动态页面地址
    data: 'action=check&yzm='+ $('#yanzhengma').val() ,   //提交过去的参数
    type:'post',   //上面的参数会以POST形式提交给后台
    dataType:"html",   //返回纯文本HTML信息
    beforeSend: function(XMLHttpRequest){

    },
    success: function(data){
      if ('0'==data) {/*没有被注册*/
        $("#yzm").html("<span style='color:green;line-height:30px;'>验证码正确</span>");
      }else if ('1'==data) {/*已经被注册*/
        $("#yzm").html("<span style='color:red;line-height:30px;'>验证码错误</span>");
      }else {/*条件不对*/
        $("#saveregid").attr("disabled", true);
        $("#yzm").html(data);
      }
    },
    complete: function(XMLHttpRequest, textStatus){
      //HideLoading();
    },
  });

    }


<?php echo '</script'; ?>
>
</head>

<body>
  <div id="contain">
    <form class="cmxform" id="form_regist" method="post" action="index.php?action=reg_save">
    <div class="w700 top_img"></div>
    	<div class="w700 form_part_1">
 	     	<div class="w700 part_1_info"></div>
			<div class="w700 part_1_con">
				<div class="part_1_left_con">
				   <ul>
			            <li>用户名称：</li>
	        		    <li style="">密码：</li>
 				        <li >请再输入一遍密码：</li>
			            <li>年龄：</li>
			            <li>性别:</li>
			            <li style="border-bottom:0px;">验证码:</li>
 			       </ul>
		        </div>
		        <div class="part_1_right_con">
 			       <ul>
					  <li><input class="in" name="txtloginname" type="text" id="yd631_name" />
					  <span id="loginname_sign" class="in_info">3-15个字符（包含小写字母、数字、下划线、中文），最多使用5个汉字，推荐使用中文用户名，一旦注册成功用户名不能修改。</span></li>
					  <li style=""><input class="in" name="txtPassword" type="password" id="yd631_pws1" /><span class="in_info">密码由6-16个字符组成，请使用英文字母加数字或符号的组合密码，不能单独使用英文字符、数字或符号作为您的密码。
					  </span></li>	      
				      <li><input class="in" name="txtcheckpassword" type="password" id="yd631_pws2" /><span class="in_info" style="line-height:30px;">请再输入一遍上面输入的密码。</span></li>
				      <li><input class="in" name="yd631_age" type="text" id="yd631_age" /><span class="in_info" style="line-height:30px;">请输入您的年龄(10岁-150岁)。</span></li>
				      <li class="in" style="line-height:40px;"><input name="yd631_sex" type="radio" value="男" checked />男
				      <input type="radio" name="yd631_sex" value="女" />　女</li>
    		    	  <li><input class="in" name="yanzhengma" type="text" id="yanzhengma" /><img id="code" name="code" src="yanzhengma.php"><a class="code" onclick="create_code();">看不清?点我换一张</a><span class="in_info" id="yzm"></span></li>
			      </ul>
		      	</div>
		   </div>
		</div>

    <div class="w700 form_part_2">
 	   <div class="w700 part_1_infos"></div>
	      <div class="part_1_cons">
		      <div class="part_1_left_con">
 		         <ul>
 		           <li>电话：</li>
 		           <li>电子邮箱：</li>
 		           <li style="border-bottom:0px;">现住地：</li>
  		        </ul>
 		       </div>
 		       <div class="part_1_right_con" style="height:124px;">
 		         <ul>
			      <li><input class="in" name="yd631_call" type="text" id="yd631_call" /><span class="in_info" style="line-height:30px;">请输入您的联系电话</span></li>
			      <li><input class="in" name="txtemail" type="text" id="yd631_email1" /><span class="in_info" style="line-height:30px;">请输入合格的邮箱格式</span></li>
			      <li><input class="in" name="yd631_address" type="text" id="yd631_address" /><span class="in_info" style="line-height:30px;">请输入您的现住地址</span></li>
			      </ul>
		      </div>
		  </div>
	</div>

    <div style="clear:both"></div>
    <div class="w700 box_more">
      <input type="checkbox" id="check_more" /> <span class="change_text">填写更多资料</span>
    </div>
    <div class="w700 form_part_3">
      <div class="part_1_cons">
        <div class="part_1_left_con">
          <ul>
            <li>曾居地：</li>
          </ul>
        </div>
        <div class="part_1_right_con">
   	     <ul>
	        <li>
 	         <select class="in" id="left" style="width:80px;height:130px" multiple>
 	         <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
 	             <option value='<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['adress'];?>
'><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['adress'];?>
</option>
 	         <?php endfor; endif; ?>
 	         </select>
	         <!--option移动按钮-->
    	      <input class="in" type="button" id="toRight"  value=">|" style="width:50px;height:20px" />
        	  <input class="in" type="button" id="toLeft"  value="|<" style="width:50px;height:20px" />
	         <select class="in" id="right" name="everwhere[]" style="width:80px;height:130px" multiple></select><span span class="in_info" style="line-height:30px;">提示:1.可通过双击选择 2.按住ctrl可多选</span>
	        </li>
  		  </ul>
        </div>       
      </div>
    </div>

    <div style="clear:both"></div>
    <div class="w700 btn">
         <div style="float:left"><input type="submit" name="Submit" id="tj"></div>
         <div style="float:right"><a id="fs" href="index.php">返回</a></div>
	</div>
    </form>
	
  </div>
   
</body>
</html><?php }
}
?>