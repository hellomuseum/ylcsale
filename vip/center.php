<?php
/**
 * 用户中心页面
 * 
 */

//引入初始化文件
require('config.php');

class showPage extends FrameWork {
	public function main(){
		$s1=$_GET['action'];
		//echo "<script>alert('$s1')</script>";
		//$gr1 = $_SESSION['yd631_name'];
		//echo "<script>alert('$gr1')</script>";		
		switch ($_GET['action']) {
			case 'send':
				$this->send();
				break;
			case 'send_list':
				$this->send_list();
				break;
			case 'send_save':
				$this->send_save();
				break;
			case 'receive_list':
				$this->receive_list();
				break;
			case 'del':
				$this->del();
				break;
			case 'user_edi':
			    $this->user_edi();
				break;
			case 'user_edi_cl':
				$this->user_edi_cl();
				break;		
			case 'out':
				$this->out();
				break;
			case 'write':
				$this->write();
				break;
			case 'write_save':
				$this->write_save();
				break;
			case 'show_word':
				$this->show_word();
				break;
			case 'change':
				$this->change();
				break;
			case 'gengxin':
				$this->gengxin();
				break;	
//新增代码---------------------------------------------	
//售票入口		
			case 'sp':
				$this->sp();
				break;		
//售票保存				
			case 'sp_save':
				$this->sp_save();
				break;				
//售票查询（售票员）
			case 'p_cx_human':
				$this->p_cx_human();
				break;	
//售票查询（售票员）
			case 'p_cx_human_cx':
				$this->p_cx_human_cx();
				break;
//----------------------------------------------------=						
			default:
				$this->show_index();
				break;
		}
	}
	/**
	 * 用户中心首页
	 *
	 */
	private function show_index(){
		$this->tpl->assign('yd_id',$_SESSION['yd631_id']);
		$this->tpl->assign('yd_name',$_SESSION['yd631_name']);
		$this->tpl->display('uc_index.html');
	}
	/**
	 * 发信
	 *
	 */
	private function send(){
		//收件人列表
		$sql = "select * from users where yd_id !=".$_SESSION['yd631_id'];
		$list = $this->db->select($sql);
		$this->tpl->assign('list',$list);
		$this->tpl->display('uc_send.html');
	}
	//修改个人信息
	private function user_edi(){
		$name = $_SESSION['yd631_id'];
		$sql = "select * from users where yd_id='$name'";
		$list = $this->db->select($sql);
		//var_dump($list);
		$this->tpl->assign('list',$list);
        $this->tpl->display('user_edi.html');
	}
	private function user_edi_cl(){
		//echo "txtPassword";
        $yd631_pws=md5($_POST["txtPassword"]);
        $yd631_sex=$_POST["yd631_sex"];
        $yd631_age=$_POST["yd631_age"];
        $yd631_call=$_POST["yd631_call"];
        $yd631_email=$_POST["txtemail"];
        $yd631_address=$_POST["yd631_address"];
        //更新数据库
        $result=$this->db->query("update users set yd_pws='{$yd631_pws}',yd_sex='{$yd631_sex}',yd_age='{$yd631_age}',
        	yd_call='{$yd631_call}',yd_email='{$yd631_email}',yd_address='{$yd631_address}' where yd_id =".$_SESSION['yd631_id']);
        if ($result){
			$this->show_message('修改成功','center.php');
		}else{
			exit('发生错误：'.$this->db->get_error());
		}


	}
	/**
	 * 发信箱
	 *
	 */
	private function send_list(){
		require_once('page.class.php');
		$obj_page = new pageClass();
		//发信箱列表
		$sql = "select m.id,m.title,m.content,m.createtime,a.yd_name ";
		$sql.= "from message as m inner join users as a on ";
		$sql.= "m.to_id=a.yd_id where m.from_id=".$_SESSION['yd631_id'];
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('uc_send_list.html');
	}
	/**
	 * 收信箱
	 *
	 */
	private function receive_list(){
		require_once('page.class.php');
		$obj_page = new pageClass();		
		//收信箱列表
		$sql = "select m.id,m.title,m.content,m.createtime,a.yd_name ";
		$sql.="from message as m inner join users as a on ";
		$sql.= "m.from_id=a.yd_id where m.to_id=".$_SESSION['yd631_id'];
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('uc_receive_list.html');
	}
	/**
	 * 保存信件
	 *
	 */
	private function send_save(){
		$sql = "insert into message set ";
		$sql.= "title = '{$_POST['title']}',";
		$sql.= "content = '{$_POST['content']}',";
		$sql.= "to_id = '{$_POST['to_id']}',";
		$sql.= "from_id = '{$_SESSION['yd631_id']}',";
		$sql.= "createtime=".time();
		$result = $this->db->insert($sql);
		if ($result){
			$this->show_message('发送成功','center.php');
		}else{
			//var_dump($result);
			exit('发生错误：'.$this->db->get_error());
		}
	}
    //留言板
    private function write(){
    	$this->tpl->display('writemessage.html');
    }
    //保存留言
    private function write_save(){
    	$sql = "insert into tb_message set ";
		$sql.= "title = '{$_POST['title']}',";
		$sql.= "content = '{$_POST['content']}',";
		$sql.= "username = '{$_SESSION['yd631_name']}',";
		$sql.= "password = '{$_POST['pass']}',";
		$sql.= "time=".time();
		$result = $this->db->insert($sql);
		if ($result){
			$this->show_message('发表成功','center.php');
		}else{
			var_dump($result);
			exit('发生错误：'.$this->db->get_error());
		}
    }
    //查看我的留言
    public function show_word(){
    	require_once('page.class.php');
		$obj_page = new pageClass();
		$name = $_SESSION['yd631_name'];
		//var_dump($name);
		//var_dump($_SESSION);
		$sql = "select id,title,content,username,time from tb_message where username='$name'";
		//var_dump($sql);
        $obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		//$rs = $this->db->select($sql); 
		//var_dump($list);
		//var_dump($rs);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('show_message.html');
    }
    //编辑留言
    public function change(){
    	//var_dump($_GET['id']);
    	if(isset($_GET['id']) && is_numeric($_GET['id'])) {
	        $showid = $_GET['id'];
        } else {
	        echo '<script type="text/javascript">window.location.href="../center.php?action=show_word"</script>';
        }
        $sql = "select * from tb_message where id=$showid";
		$result=$this->db->select($sql);
		//var_dump($result);
        $this->tpl->assign('username',$result[0]['username']);
        $this->tpl->assign('title',$result[0]['title']);
        $this->tpl->assign('content',$result[0]['content']);
        $this->tpl->assign('pass',$result[0]['password']);
        $this->tpl->assign('id',$showid);
        $this->tpl->display('change.html');
	}
	//更新留言
	public function gengxin(){
		
		//var_dump($_GET['id']);
		$s1 = $_GET['id'];
		$s2 = $_SERVER['REQUEST_METHOD'];
		echo"<script>alert('$s2')</script>";
        if(isset($_POST["Submit"])) {				// 判断是否有表单提交
        	echo"<script>alert('$s1')</script>";
        	$title = $_POST['title'];
	        $content = $_POST['content'];
	        $password = $_POST['pass'];
	        // 获取要更新的留言id
	        //$mid = $_SESSION['yd631_id'];
	        $mid = $s1;
	        echo"<script>alert('$mid')</script>";
	        // 验证密码是否正确
	        $sql = "select count(*) from tb_message where password='$password' and id=$mid";	
	        $row = $this->db->select($sql);
	        var_dump($row);
	        $s3=$row[0][0];
	        echo"<script>alert('$s3')</script>";
	        if($row[0][0] > 0) {						// 密码正确，执行update更新操作
		    	$sql = "update tb_message set title='$title' , content='$content' where id=$mid";
		    	$result = mysql_query($sql);
		    	echo '<script type="text/javascript">alert("更新成功"); location.href="center.php?show_word";</script>';
	        } else {							// 密码错误，不更新
		    	echo '<script type="text/javascript">alert("密码错误，不能更新！!");history.back();</script>';
	        }
	    } else {    
	    	echo"<script>alert('未有表单提交...')</script>";
	    	echo '<script type="text/javascript">alert("不能更新！!");history.back();</script>';
	    }
	}
	/**
	 * 
	 * 删除信件
	 *
	 */
	private function del(){
		$sql = 'delete from message where to_id='.$_SESSION['yd631_id'];
		$sql.= '  and id='.intval($_GET['id']);
		$result = $this->db->query($sql);
		if ($result){
			$this->show_message('删除成功',$_SERVER['HTTP_REFERER']);
		}else{
			exit('发生错误：'.$this->db->get_error());
		}
	}
	
//新增代码--------------------------------------------------	
	//售票
	private function sp(){
		$user_id = $_SESSION['yd631_id'];
		$user_name = $_SESSION['yd631_name'];
		$sql = "SELECT name,CONVERT( price, CHAR ) as price, CONCAT( name,  '-', CONVERT( price, CHAR ) ) AS pz FROM ticket_kind";
		$pz = $this->db->select($sql);
		$sql = "SELECT name,CONVERT( discount, CHAR ) as discount, CONCAT( name,  '-', CONVERT( discount, CHAR ) ) AS qj FROM period";
		$qj = $this->db->select($sql);
		
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('pz',$pz);	
		$this->tpl->assign('qj',$qj);
		$this->tpl->display('sp.html');
	}	

	private function sp_save(){
		//echo "txtPassword";
		$selectpz=$_POST["selectpz"];
		$price=$_POST["price"];
		$selectqj=$_POST["selectqj"];
		$zkl=$_POST["zkl"];
		$txtzs=$_POST["txtzs"];
		$txtysje=$_POST["txtysje"];
		$txtssje=$_POST["txtssje"];
		$txtzl=$_POST["txtzl"];
		$human=$_POST["human"];
		$remark=$_POST["remark"];
		$sptime=date("Y-m-d");
		
		//插入数据
		$sql = "insert sales_ticket set
		sales_time = '{$sptime}',
		ticket_kind_name='{$selectpz}',
		ticket_kind_price={$price},
		sales_amount={$txtzs},
		period_name='{$selectqj}',
		period_discount={$zkl},
		receivable_money={$txtysje},
		received_money={$txtssje},
		odd_change={$txtzl},
		human='{$human}',
		remark='{$remark}'";
		
		$result=$this->db->query($sql);
		
		if ($result){
		//$this->show_message('售票成功','center.php');
		echo"<script>alert('售票成功...再次确认：此票找零 ◆    ￥    $txtzl  元     ◆')</script>";
		$user_id = $_SESSION['yd631_id'];
		$user_name = $_SESSION['yd631_name'];
		$sql = "SELECT name,CONVERT( price, CHAR ) as price, CONCAT( name,  '-', CONVERT( price, CHAR ) ) AS pz FROM ticket_kind";
		$pz = $this->db->select($sql);
		$sql = "SELECT name,CONVERT( discount, CHAR ) as discount, CONCAT( name,  '-', CONVERT( discount, CHAR ) ) AS qj FROM period";
		$qj = $this->db->select($sql);
		
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('pz',$pz);
		$this->tpl->assign('qj',$qj);
		$this->tpl->display('sp.html');
				
		
		}else{
				exit('发生错误：'.$this->db->get_error());
			}
			

	
	}	
	
	//查询
	private function p_cx_human(){
		$sptime=date("Y-m-d");
		$user_id = $_SESSION['yd631_id'];
		$user_name = $_SESSION['yd631_name'];
		$sql = "SELECT name,CONVERT( price, CHAR ) as price, CONCAT( name,  '-', CONVERT( price, CHAR ) ) AS pz FROM ticket_kind";
		$pz = $this->db->select($sql);
		$sql = "SELECT name,CONVERT( discount, CHAR ) as discount, CONCAT( name,  '-', CONVERT( discount, CHAR ) ) AS qj FROM period";
		$qj = $this->db->select($sql);
		
		$this->tpl->assign('sptime',$sptime);
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('pz',$pz);
		$this->tpl->assign('qj',$qj);
		$this->tpl->display('p_cx_human.html');
	}

	
	
	private function p_cx_human_cx(){
		$sptime=date("Y-m-d");
		$user_id = $_SESSION['yd631_id'];
		$user_name = $_SESSION['yd631_name'];
		
		//$everwhere_1=implode(',',$_POST["everwhere_1"]);
		$everwhere_a=$_POST["everwhere_1"];
		if (count($everwhere_a)<>0){
			foreach($everwhere_a as $value){
			$v.="'".$value."',";
			}
			//$everwhere_1 = "(".$v."'abcdefg')";
			$everwhere_1 = "(".substr($v,0,strripos($v, ',')).")";
		}else{
			$everwhere_1 = '';
		}
		
		if (strlen(trim($everwhere_1)) <> 0 ){
			//echo $everwhere_1;	
			$sqlwhere = " ticket_kind_name in " .$everwhere_1 ;
		}else{
			//echo 'kc';
			$sqlwhere = "1=1";
		}
		
		
		unset($v);
		
		//$everwhere_2=implode(',',$_POST["everwhere_2"]);
			$everwhere_a=$_POST["everwhere_2"];
		if (count($everwhere_a)<>0){
			foreach($everwhere_a as $value){
			$v.="'".$value."',";
			}
			//$everwhere_2 = "(".$v."'abcdefg')";
			$everwhere_2 = "(".substr($v,0,strripos($v, ',')).")";
		}else{
			$everwhere_2 = "";
		}
		
		
		if (strlen(trim($everwhere_2)) <> 0 ){
			//echo $everwhere_2;	
			$sqlwhere.=  " and period_name in " .$everwhere_2 ;
		}else{
			//echo 'kc';
			$sqlwhere.="";
		}
	
		$txtrq_1=$_POST["txtrq_1"];
		//echo"<script>alert('售票日期1：$txtrq_1')</script>";
		if (strlen(trim($txtrq_1)) <> 0 ){
			$sqlwhere.=  " and DATE_FORMAT(sales_time,'%Y-%m-%d' ) >= '" .$txtrq_1."'" ;
				
		}else{
			$sqlwhere.="";
		}	
			
		$txtrq_2=$_POST["txtrq_2"];
		//echo"<script>alert('售票日期2：$txtrq_2')</script>";
		if (strlen(trim($txtrq_2)) <> 0 ){
			$sqlwhere.=  " and DATE_FORMAT(sales_time,'%Y-%m-%d' ) <= '" .$txtrq_2."'" ;
		
		}else{
			$sqlwhere.="";
		}		
		
		$txtzs_1=$_POST["txtzs_1"];
		//echo"<script>alert('张数1：$txtzs_1')</script>";
		if (strlen(trim($txtzs_1)) <> 0 ){
			$sqlwhere.=  " and sales_amount >= " .$txtzs_1 ;
		
		}else{
			$sqlwhere.="";
		}		
		$txtzs_2=$_POST["txtzs_2"];
		//echo"<script>alert('张数2：$txtzs_2')</script>";
		if (strlen(trim($txtzs_2)) <> 0 ){
			$sqlwhere.=  " and sales_amount <= " .$txtzs_2 ;
		
		}else{
			$sqlwhere.="";
		}		
		
		$txtysje_1=$_POST["txtysje_1"];
		//echo"<script>alert('应收金额1：$txtysje_1')</script>";
		if (strlen(trim($txtysje_1)) <> 0 ){
			$sqlwhere.=  " and receivable_money >= " .$txtysje_1 ;
		
		}else{
			$sqlwhere.="";
		}
		
		$txtysje_2=$_POST["txtysje_2"];
		//echo"<script>alert('应收金额2：$txtysje_2')</script>";
		if (strlen(trim($txtysje_2)) <> 0 ){
			$sqlwhere.=  " and receivable_money <= " .$txtysje_2 ;
		
		}else{
			$sqlwhere.="";
		}		
		$txtssje_1=$_POST["txtssje_1"];
		//echo"<script>alert('实收金额1：$txtssje_1')</script>";
		if (strlen(trim($txtssje_1)) <> 0 ){
			$sqlwhere.=  " and received_money >= " .$txtssje_1 ;
		
		}else{
			$sqlwhere.="";
		}		
		$txtssje_2=$_POST["txtssje_2"];
		//echo"<script>alert('实收金额2：$txtssje_2')</script>";
		if (strlen(trim($txtssje_2)) <> 0 ){
			$sqlwhere.=  " and received_money <= " .$txtssje_2 ;
		
		}else{
			$sqlwhere.="";
		}		
		$txtzl_1=$_POST["txtzl_1"];
		//echo"<script>alert('找零1：$txtzl_1')</script>";
		if (strlen(trim($txtzl_1)) <> 0 ){
			$sqlwhere.=  " and odd_change >= " .$txtzl_1 ;
		
		}else{
			$sqlwhere.="";
		}		
		$txtzl_2=$_POST["txtzl_2"];
		//echo"<script>alert('找零2：$txtzl_2')</script>";
		if (strlen(trim($txtzl_2)) <> 0 ){
			$sqlwhere.=  " and odd_change <= " .$txtzl_2 ;
		
		}else{
			$sqlwhere.="";
		}	

		$sqlwhere = "where ".$sqlwhere."  and human='".$user_name."'";
		//echo $sqlwhere;
		$sql = "select 
				id,
				sales_time,
				ticket_kind_name,
				ticket_kind_price, 
				sales_amount,
				period_name,
				period_discount,
				receivable_money,
				received_money,
				odd_change,
				human,
				remark 
				from sales_ticket " . $sqlwhere ;
		//echo $sql;
		$sql_hj = "select sum(sales_amount) as zshj,
				sum(receivable_money) as ysjehj,
				sum(received_money) as ssjehj,
				sum(odd_change) as zljehj  
				from sales_ticket " . $sqlwhere ;
		require_once('page.class_sp.php');
		$obj_page = new pageClass();
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$hj = $obj_page->getlist($sql_hj);
		$page = $obj_page->showpage();
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('hj',$hj);
		$this->tpl->assign('page',$page);
		$this->tpl->display('lsjl.html');
	}	
	
//---------------------------------------------------------	
	
}
$show = new showPage();
$show->main();
unset($show);
?>
