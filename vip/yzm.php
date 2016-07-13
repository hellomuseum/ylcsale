<?php
session_start();
if (strtolower($_SESSION["yanzhengma"])==strtolower($_POST["yzm"])) {
	$yzm = 0;
	echo $yzm;
}else{
	$yzm = 1;
	echo $yzm;
}
?>