<?php
class pageClass extends FrameWork {
	//每页显示记录数量
	private $pagesize;
	//总页数
	private $pagecount;
	//总记录数
	private $totalcount;
	//当前执行的sql
	private $sql;
	//当前页
	private $curpage;
	//当前内容
	private $list;
	public function __construct(){
		$this->initialize();
	}
	/**
	 * 设置每页显示数量
	 *
	 * @param int $num
	 */
	public function pagesize($num){
		$this->pagesize = $num;
	}
	/**
	 * 返回分页的信息
	 *
	 * @param unknown_type $sql
	 * @return array
	 */
	public function getlist($sql){
		$this->sql = $sql;
		$sql = explode(' from ',$this->sql);
		$sql_count = 'select count(*) as count from '.$sql[1];
		$array = $this->db->select($sql_count);
		$this->totalcount = $array[0]['count'];
		$this->pagecount = ceil($this->totalcount/$this->pagesize);
		$this->curpage = intval($_GET['page']);
		return $this->getarray();
	}
	/**
	 * 查询数据库
	 *
	 * @return array
	 */
	private function getarray(){
		$beginset = $this->pagesize*($this->curpage >0 ? $this->curpage-1 :0);
//		echo $this->sql.' limit '.$beginset.','.$this->pagesize;
		$list = $this->db->select($this->sql.' limit '.$beginset.','.$this->pagesize);
		return $list;
	}
	/**
	 * 显示分页信息
	 *
	 * @return string
	 */
	public function showpage(){
		$url = str_replace($_SERVER['QUERY_STRING'],'',$_SERVER['REQUEST_URI']);
		parse_str($_SERVER['QUERY_STRING'],$array);

		$page_str = '';
		if ($array['page'] <=0) $array['page'] = 1;
		if ($array['page'] >1){
			$pre_page = $array['page']-1;
		}else{
			$pre_page = 1;
		}
		if ($array['page'] <$this->pagecount){
			$next_page = $array['page']+1;
		}else{
			$next_page = $this->pagecount;
		}
		unset($array['page']);
		$request = '';
		foreach ($array as $k=>$v) {
			$request.=$k.'='.$v.'&';
		}
		
		$request = trim($request,'&');
		//echo "<br/>";
		//echo $request;
		$request = "action=tjgl_qijian_tj";
		$page_str .= "<a href='".$url.$request.'&page='.$pre_page."'>上一页</a> ";
		$page_str .= "<a href='".$url.$request.'&page='.$next_page."'>下一页</a>";
		return $page_str;
	}
}
?>

