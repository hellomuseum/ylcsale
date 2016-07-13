<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<script src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/localization/messages_cn.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#commentForm").validate({meta: "validate"});
});
</script>
<!-- Custom messages with custom "meta" setting -->
<body>
<form class="cmxform" id="commentForm" method="post" action="">
	<fieldset>
		<legend>Please enter your email address</legend>
		<p>
			<label for="cemail">E-Mail *</label>
			<input id="cemail" name="email" class="{validate:{required:true, email:true, messages:{required:'Please enter your email address', email:'Please enter a valid email address'}}}"/>
		</p>
		<p>
			<input class="submit" type="submit" value="Submit"/>
		</p>
	</fieldset>
</form>
</body>
</html>
