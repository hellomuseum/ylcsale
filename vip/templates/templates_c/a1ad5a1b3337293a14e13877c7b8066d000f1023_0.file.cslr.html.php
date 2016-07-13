<?php /* Smarty version 3.1.27, created on 2016-04-26 04:30:06
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\cslr.html" */ ?>
<?php
/*%%SmartyHeaderCode:8536571eeece3abd81_80473646%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ad5a1b3337293a14e13877c7b8066d000f1023' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\cslr.html',
      1 => 1461411446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8536571eeece3abd81_80473646',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571eeeceac8281_05449156',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571eeeceac8281_05449156')) {
function content_571eeeceac8281_05449156 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8536571eeece3abd81_80473646';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐天游乐场售票系统-城市注册</title>
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
$(function(){
  $("#form_regist").validate
  ({
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
    $(".selector").validate
    ({
      submitHandler:function(form) {
      alert("验证通过");
      form.submit();}
	}),
	rules: {
	//--------城市名称处理---------      
      cityname: {
        required:true,minlength:function(){ 
        	doAjax(); 
        	return 2;},
        	maxlength:function(){return 50;}},
	    },
	    messages: {
	    cityname: {required: "城市名称不能为空!",minlength: "长度至少是 2 。",maxlength: "超过允许的最大长度（50）。"},},
	    errorElement:'span',errorPlacement: function(error, element) {element.parent().find('.in_info').html(error);},    
	});
});

//城市名称验证
function doAjax() {
//alert('action=check&username='+escape($('#yd631_name').val()));
 $.ajax({
    url: "member57_city.php",     //提交的动态页面地址
    data: 'action=check&id='+ $('#cityname').val() ,   //提交过去的参数
    type:'post',   //上面的参数会以POST形式提交给后台
    dataType:"html",   //返回纯文本HTML信息
    beforeSend: function(XMLHttpRequest){},
    success: function(data){
	if ('0'==data) {/*没有被注册*/
	   $("#loginname_sign").html("<span style='color:green;line-height:30px;'>恭喜您，城市名可以使用</span>");
	}else if ('1'==data) {/*已经被注册*/
	   $("#loginname_sign").html("<span style='color:red;line-height:30px;'>城市名已被注册</span>");
    }else{/*条件不对*/
       $("#saveregid").attr("disabled", true);
       $("#loginname_sign").html(data);
    }
	},
    complete: function(XMLHttpRequest, textStatus){},
});
}
<?php echo '</script'; ?>
>
</head>

<body>

  <div id="contain">
    <form class="cmxform" id="form_regist" method="post" action="index.php?action=reg_save_cslr">
    <!--  <div class="w700 top_img"></div>-->
    <div class="w700 form_part_1">
      <!--<div class="w700 part_1_info"></div>-->
      <div class="w700 part_1_con">
        <div class="part_1_left_con">

		    <ul>
            <li>城市名称：</li>
			<li >EXIT：          
        </ul>
        </div>
        <div class="part_1_right_con">
        <ul>
			  <li><input class="in" name="cityname" type="text" id="cityname" />
			  <span id="loginname_sign" class="in_info">3-50个字符（包含小写字母、数字、下划线、中文），最多使用5个汉字，推荐使用中文名，一旦注册成功则不能修改。</span></li>
		      <li><span class="in_info" style="line-height:30px;"><a href="./index.php?action=hygl">退出</a></span></li>
		      </ul>
		      </div>
		   </div>
		</div>
          <div style="clear:both"></div>
          <div class="w700 btn"><input type="submit" name="Submit" id="tj"></div>
 	    
    </form>
  </div>
</body>
</html><?php }
}
?>