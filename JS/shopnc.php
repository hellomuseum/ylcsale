<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  


<div id="top_banner" class="banner2">
  <div class="mid register">
    <div class="step"> <span><a href="http://www.shopnc.net/login-register.html">手机注册</a></span> <span class="check"><a href="javascript:void(0);">邮箱注册</a></span> </div>
  <form id="register_form2" method="post" action="index.php?act=login&op=save_member" class="nc-register-form">
    <input type="hidden" name="mobile" value="" />
    <input type="hidden" name="d_captcha" value="" />
    <div class="clear"></div>
    <div style="width:442px; margin:30px auto 0px;">
      <dl>
        <dt>用户名：</dt>
        <dd>
          <input type="text" id="user_name" name="user_name" class="text" autocomplete="off" placeholder="用户名：请使用3-20个中、英文、数字及“-”符号"/>
        </dd>
      </dl>
      <dl>
        <dt>密  码：</dt>
        <dd>
          <input type="password" id="password" name="password" class="text" autocomplete="off" placeholder="您的登录密码"/>
        </dd>
      </dl>
      <dl>
        <dt style="font-size:12px;line-hight:31px">确认密码：</dt>
        <dd>
          <input type="password" id="password_confirm" name="password_confirm" class="text" autocomplete="off" placeholder="再次输入密码"/>
        </dd>
      </dl>
      <dl>
        <dt>邮  箱：</dt>
        <dd>
          <input type="text" id="email" name="email" class="text" autocomplete="off" placeholder="输入常用邮箱作为验证及找回密码使用"/>
        </dd>
      </dl>
       <div class="code-div mt15" style="margin:20px 0px 20px">
        <dl>
          <dt>验证码：</dt>
          <dd> <span class="right block" style="margin-left:20px"><a class="makecode" style="margin-right: 12px;" href="javascript:void(0)" onclick="javascript:document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&type=50,120&t=' + Math.random();"><img src="index.php?act=seccode&op=makecode&type=50,120" title="看不清楚，换一张" alt="看不清楚，换一张" name="codeimage" id="codeimage"/> </a></span>
            <input type="text" name="captcha" maxlength="4" autocomplete="off" class="block right" placeholder="输入验证码" id="captcha" size="10"  style="width:225px" />
          </dd>
        </dl>
        </div>
      <dl class="clause-div">
        <dd>
          <input name="agree" type="checkbox" class="checkbox" id="clause" value="1" checked="checked" style="width:16px; height:14px" />
          阅读并同意<a href="index.php?act=document" target="_blank" class="agreement" title="">《服务协议》</a></dd>
      </dl>
    </div>
    <a href="javascript:void(0)" id="register_a2" class="next-step block">请填写登录信息，下一步</a>
  </form>
  <form  id="register_form3" style="display:none" class="nc-register-form">
    <div class="clear"></div>
    <div style="width:442px; margin:30px auto 0px;">
      <h4 class="success">注册成功！请前往注册信箱点击验证链接激活账号后登录。</h4>
    </div>
    </div>
  </form>
</div>
<div class="clear"></div>
<div id="dialog" title="Basic dialog"> </div>
<script src="http://www.shopnc.net/js/common.js"></script>
<script type="text/javascript" src="http://www.shopnc.net/js/jquery.validation.min.js" charset="utf-8"></script> 
<script type="text/javascript" src="http://www.shopnc.net/js/connect_sms.js" charset="utf-8"></script> 
<script type="text/javascript" src="http://www.shopnc.net/js/jquery-ui/jquery.ui.js" charset="utf-8"></script>
<link href="http://www.shopnc.net/js/jquery-ui/themes/smoothness/jquery.ui.css" rel="stylesheet">
<title>ShopNC用户注册</title>  
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/localization/messages_cn.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"></script>
<script language='javascript'> 
<link href="http://www.shopnc.net/css/style.css" rel="stylesheet">
<!--<link href="http://www.shopnc.net/css/saas.css" rel="stylesheet">-->
$(function(){
	jQuery.validator.addMethod("letters_name", function(value, element) {
		return this.optional(element) || (/^[A-Za-z0-9\u4e00-\u9fa5_-]+$/i.test(value) && !/^\d+$/.test(value));
	}, "Letters only please");
	
    //注册表单验证
    $("#register_form2").validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('dd');
            error_td.append(error);
        },
        success: function(label) {
        },
        onkeyup: false,
        rules : {
            user_name : {
                required : true,
                rangelength : [3,20],
                letters_name : true,
                remote   : {
                    url :'index.php?act=login&op=check_member&column=ok',
                    type:'get',
                    data:{
                        user_name : function(){
                            return $('#user_name').val();
                        }
                    }
                }
            },
            email : {
                required : true,
                remote   : {
                    url :'index.php?act=login&op=check_email&column=ok',
                    type:'get',
                    data:{
                        user_name : function(){
                            return $('#email').val();
                        }
                    }
                }
            },
            password : {
                required : true,
                minlength: 6,
				maxlength: 20
            },
            password_confirm : {
                required : true,
                equalTo  : '#password'
            },
            agree : {
                required : true
            }
        },
        messages : {
            user_name : {
                required : '<i class="icon-exclamation-sign"></i>用户名不能为空',
                rangelength : '<i class="icon-exclamation-sign"></i>用户名必须在3-20个字符之间',
				letters_name: '<i class="icon-exclamation-sign"></i>可包含“_”、“-”，不能是纯数字',
				remote	 : '<i class="icon-exclamation-sign"></i>该用户名已经存在'
            },
            email : {
                required : '<i class="icon-exclamation-sign"></i>邮箱不能为空',
                remote : '<i class="icon-exclamation-sign"></i>该邮箱已经存在'
            },
            password  : {
                required : '<i class="icon-exclamation-sign"></i>密码不能为空',
                minlength: '<i class="icon-exclamation-sign"></i>密码长度应在6-20个字符之间',
				maxlength: '<i class="icon-exclamation-sign"></i>密码长度应在6-20个字符之间'
            },
            password_confirm : {
                required : '<i class="icon-exclamation-sign"></i>您必须再次确认您的密码',
                equalTo  : '<i class="icon-exclamation-sign"></i>两次输入的密码不一致'
            },
            email : {
                required : '<i class="icon-exclamation-sign"></i>电子邮箱不能为空',
                email    : '<i class="icon-exclamation-sign"></i>这不是一个有效的电子邮箱',
				remote	 : '<i class="icon-exclamation-sign"></i>该电子邮箱已经存在'
            },
            agree : {
                required : '<i class="icon-exclamation-sign"></i>请勾选服务协议'
            }
        }
    });

    var __send_mail = false;
    $('#register_a2').click(function(){
	    if(!$("#register_form2").valid()){
		    return false;
		}
        if (__send_mail) {
            return;
        }
        __send_mail = true;
        $.post('index.php?act=login&op=save_member_mail', $("#register_form2").serialize(), function(result){
            if (result.state) {
                $('#register_form2').hide();
                $('#register_form3').show();
            } else {
				__send_mail = false;
                $.ncDialog({msg:result.msg});
            }
        },'json');
    });
});
</script>