<?php
//设置错误级别
error_reporting(E_ALL & ~E_NOTICE);
//取得程序所在目录
$pathy = dirname(__FILE__);
//echo"<script>alert('$pathy')</script>";
define('BasePath',dirname(__FILE__));
//设置直接包含的路径
set_include_path('library');
//产生一个SESSIONID
session_start();

//数据库配置信息
define('db_host','localhost');
define('db_user','root');
define('db_pwd','');
define('db_name','spdb');
define('PageURL','index.php?action=out');
//oracle连接信息
define('db_username','ffgl');
define('db_password','ffgl');
define('db_port','1521');
define('db_server_name','orcl');


//echo PageURL;
$curPageURL = curPageURL();
//echo"<script>alert('$curPageURL')</script>";
//引入类库
require_once('mysql.class.php');
require_once('templates.class.php');
require_once('framework.class.php');


function curPageURL()
{
	$pageURL = 'http';

	if ($_SERVER["HTTPS"] == "on")
	{
		$pageURL .= "s";
	}
	$pageURL .= "://";

	if ($_SERVER["SERVER_PORT"] != "80")
	{
/********
 * 
 1，http://localhost/aaa/ (打开aaa中的index.php)
结果：
$_SERVER['QUERY_STRING'] = "";
$_SERVER['REQUEST_URI']  = "/aaa/";
$_SERVER['SCRIPT_NAME']  = "/aaa/index.php";
$_SERVER['PHP_SELF']     = "/aaa/index.php";

2，http://localhost/aaa/?p=222 (附带查询)
结果：
$_SERVER['QUERY_STRING'] = "p=222";
$_SERVER['REQUEST_URI']  = "/aaa/?p=222";
$_SERVER['SCRIPT_NAME']  = "/aaa/index.php";
$_SERVER['PHP_SELF']     = "/aaa/index.php";

3，http://localhost/aaa/index.php?p=222&q=333
结果：
$_SERVER['QUERY_STRING'] = "p=222&q=333";
$_SERVER['REQUEST_URI']  = "/aaa/index.php?p=222&q=333";
$_SERVER['SCRIPT_NAME']  = "/aaa/index.php";
$_SERVER['PHP_SELF']     = "/aaa/index.php";

由实例可知：
$_SERVER["QUERY_STRING"]  获取查询 语句，实例中可知，获取的是?后面的值
$_SERVER["REQUEST_URI"]   获取 http://localhost 后面的值，包括/
$_SERVER["SCRIPT_NAME"]   获取当前脚本的路径，如：index.php
$_SERVER["PHP_SELF"]      当前正在执行脚本的文件名 
 * 
 */
		
		$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
	
	}
	else
	{
		$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	}
	
	$po = strripos($pageURL,"/");
	$pageURLL = substr($pageURL,0,$po+1);	
	
	return $pageURLL;
}

?>
