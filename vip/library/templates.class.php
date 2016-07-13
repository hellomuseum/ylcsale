<?php
use Zend\View\Helper\BasePath;
/**
 * 模板引擎类
 *
 */
class TemplatesClass {
	/**
	 * 模板对象
	 *
	 * @var obj
	 */
	private $tpl;
	/**
	 * 构造函数
	 *
	 */
	public function __construct(){
		require_once(BasePath."/library/smarty/libs/Smarty.class.php");
		$this->tpl = new Smarty();
		//关闭调试模式
		$this->tpl->debugging = false;
		//模板文件的存放目录
		//$this->tpl->template_dir = BasePath.'/templates/';
		$this->tpl->template_dir = BasePath.'/temptest/';
		
		//模板编译文件的存放目录
		//$this->tpl->compile_dir = BasePath.'/templates/templates_c/';
		$this->tpl->compile_dir = BasePath.'/temptest/temptest_c/';
		
		//自定义模板标记
		$this->tpl->left_delimiter = '<{';
		$this->tpl->right_delimiter = '}>';
		
		
		//设置所有编译过的模板文件存放的目录
		$this->tpl->config_dir = BasePath . "/temptest/config/";
		//设置模板中特殊配置文件存放的目录
		$this->tpl->cache_dir = BasePath . "/temptest/cache/";
		//设置存放Smarty缓存文件的目录
		$this->tpl->caching=1;
		//设置开启Smarty缓存模板功能
		$this->tpl->cache_lifetime=10;
		//设置模板缓存有效时间段的长度为7天
		
	}
	/**
	 * 向模板抛出变量
	 *
	 * @param string $key
	 * @param string $value
	 */
	public function assign($key,$value){
		$this->tpl->assign($key,$value);
	}
	/**
	 * 调用模板页并显示
	 *
	 * @param string $page
	 */
	public function display($page){
		$this->tpl->display($page);
	}

}
?>