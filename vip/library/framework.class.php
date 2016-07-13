<?php
class FrameWork{

	//数据库对象
	//protected $db;
	//模板对象
	//protected $tpl;
	/**
	 * 构造函数
	 *
	 */
	public function __construct(){
		$this->initialize();
	}
	public function initialize(){
		//实例化数据库类
		$this->db = new MysqlClass();
		//实例化模板引擎类
		$this->tpl = new TemplatesClass();
		//过滤敏感数据
		if ($_GET) $this->filter_param($_GET);
		if ($_POST) $this->filter_param($_POST);
	}
	/**
	 * 信息提示
	 *
	 */
	public function show_message($message,$url){
		$this->tpl->assign('message',$message);
		$this->tpl->assign('url',$url);
		$this->tpl->display('message.html');
		exit();
	}
	/**
	 * 过滤敏感数据
	 *
	 */
	public function filter_param(&$array){
		if (is_array($array)){
			foreach ($array as $k=>$v) {
				$array[$k] = $this->filter_param($v);
			}
		}elseif(is_string($array)){
			$array = trim($array);
        //过滤js
        $array = preg_replace('/<script?.*\/script>/','',$array);
        //过滤敏感SQL关键字
        while(preg_match('/select|delete|update/i',$array,$mat)){
            $array=str_replace($mat[0],$mat[1],$array);
        }
        //过滤其他
        //.....................
		}
		return $array;
	}
	public function check_login(){
		if ($_SESSION['username'] == ''){
			$this->show_message('请登录','member.php');
		}
	}
}
?>