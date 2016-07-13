<?php
/**
 * 用户登录与注册
 * 
 */

//引入初始化文件
require('config.php');
@mysql_connect(db_host,db_user,db_pwd) or exit('数据库连接失败...');
//@屏蔽错误信息
//常量不加''修饰
$sql = "CREATE DATABASE IF NOT EXISTS " . db_name ." DEFAULT CHARSET utf8 COLLATE utf8_general_ci";
$result=mysql_query($sql);
mysql_select_db(db_name);
$sql = "CREATE TABLE IF NOT EXISTS message (
  id int(11) NOT NULL AUTO_INCREMENT,
  to_id int(11) NOT NULL,
  title varchar(50) NOT NULL,
  content text NOT NULL,
  createtime varchar(50) NOT NULL,
  from_id varchar(50) NOT NULL,
PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
";
$result=mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS tb_message (
  id int(4) NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  content text NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(10) DEFAULT NULL,
  time varchar(50) NOT NULL,
PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
";
$result=mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS users (
  yd_id int(10) NOT NULL , # id
  yd_name varchar(10) NOT NULL,  # 姓名
  yd_pws varchar(32) NOT NULL,  # 口令密码
  yd_sex varchar(4) NOT NULL,  # 性别
  yd_age varchar(4) NOT NULL,  # 年龄
  yd_call varchar(15) NOT NULL,  # 电话
  yd_email varchar(20) NOT NULL,  # 电子邮箱
  yd_address text NOT NULL,  # 家庭住址
  yd_pass varchar(20) NOT NULL, # 是否审核
  yd_time date NOT NULL,  # 创建时间
  life_cityorhamlet varchar(200) DEFAULT NULL,  # 生活过的地方
  PRIMARY KEY (yd_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
";
$result=mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS ticket_kind (
  name varchar(50) not null, # 名称
  price decimal(10,2) not null default 1.00, # 单价
  remark varchar(200) default null, # 备注 
  PRIMARY KEY (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
$result=mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS period (
  name varchar(50) not null, # 名称
  discount decimal(10,4) not null default 100.0000, # 折扣百分比
  remark varchar(200) default null, # 备注
  PRIMARY KEY (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
$result=mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS  sales_ticket (
  id int(20) NOT NULL AUTO_INCREMENT , # ID 
  sales_time date NOT NULL, # 售票时间
  ticket_kind_name varchar(50) not null, # 售票种类
  ticket_kind_price decimal(10,2) not null default 1.00, # 售票单价
  sales_amount decimal(10) not null default 1, # 售票张数
  period_name varchar(50) not null, # 售票期间
  period_discount decimal(10,4) not null default 100.0000, # 折扣百分比
  receivable_money decimal(10,2) not null default 1.00, # 应收金额=sales_amount * ticket_kind_price * period_discount 
  received_money decimal(10,2) not null default 1.00, # 实收金额 >= receivable_money
  odd_change decimal(10,2) not null default 1.00, # 找零= receivable_money（实收金额） - receivable_money（应收金额）
  human varchar(50) not null, # 售票人
  remark varchar(200), # 备注 
  PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
";
$result=mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS city (
  id int(20) NOT NULL AUTO_INCREMENT,
  adress varchar(50) NOT NULL,
  PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
";
$result=mysql_query($sql);

class showPage extends FrameWork {
	public function main(){
		switch ($_GET['action']) {
			case 'reg_save':
				$this->reg_save();
				break;
			case 'reg':
				$this->reg();
				break;
			case 'login':
				$this->login();
				break;
			case 'login_save':
				$this->login_save();
				break;
			case 'out':
				$this->out();
				break;
			case 'admin':
			    $this->admin();
			    break;
			case 'admin_cl':
			    $this->admin_cl();
			    break;	
            case 'dsc':
                $this->dsc();
                break; 
            case 'dsc_cl':
                $this->dsc_cl();
                break; 
            case 'message_list':
                $this->message_list();
                break; 
            case 'delete':
                $this->delete();
                break; 
            case 'member':
                $this->member();
                break;
            case 'hygl':
               	$this->hygl();
               	break;    
            case 'pzlr':
           		$this->pzlr();
           		break;    
            case 'reg_save_pzlr':
            	$this->reg_save_pzlr();
            	break; 
        	case 'pzwh':
           		$this->pzwh();
           		break; 
      		case 'qjlr':
       			$this->qjlr();
       			break;
   			case 'qjwh':
   				$this->qjwh();
   				break; 
			case 'reg_save_qjlr':
				$this->reg_save_qjlr();
				break;   				      			           		           	              		           	            
			default:
				$this->index();
				break;
//售票查询（售票员）
			case 'p_cx_human':
				$this->p_cx_human();
				break;
//售票查询（售票员）
			case 'p_cx_human_cx':
				$this->p_cx_human_cx();
				break;		
			case 'cswh':
				$this->cswh();
				break;	
			case 'cslr':
				$this->cslr();
				break;	
			case 'reg_save_cslr':
				$this->reg_save_cslr();
				break;			
			case 'tjgl':
				$this->tjgl();
				break;	
//统计报表（日期段）
			case 'tjgl_date_tiaojian':
				$this->tjgl_date_tiaojian();
				break;
//统计报表（日期段统计部分）
			case 'tjgl_date_tj':
				$this->tjgl_date_tj();
				break;				
//统计报表（票种统计部分）
			case 'tjgl_pz_tj':
				$this->tjgl_pz_tj();
				break;
//统计报表（期间统计部分）
			case 'tjgl_qj_tiaojian':
				$this->tjgl_qj_tiaojian();
				break;	
//统计报表（日期段统计部分）
			case 'tjgl_qj_tj':
				$this->tjgl_qj_tj();
				break;
//统计报表（票种统计部分）
			case 'tjgl_qijian_tj':
				$this->tjgl_qijian_tj();
				break;			
				
				
//----------------------------------------------------				
		}
	}
	public function index(){
		$this->tpl->display('index.html');
	}
	//管理员登录界面
	public function admin(){
		
		$this->tpl->display('admin.html');
	}
	//注册页面
	public function reg(){
        //曾居地列表
        $sql = "select adress from city";
        $list = $this->db->select($sql);
        //print_r($list);
        $this->tpl->assign('list',$list);
		$this->tpl->display('reg.html');
	}
	//登录页面
	public function login(){
		$this->tpl->display('login.html');
	}
    //留言管理
    public function message_list(){
        require_once('page.class.php');
        $obj_page = new pageClass();        
        $sql = "select id,title,content,username,time from tb_message";
        $obj_page->pagesize(5);
        $list = $obj_page->getlist($sql);
        $page = $obj_page->showpage();
        $this->tpl->assign('list',$list);
        $this->tpl->assign('page',$page);
        $this->tpl->display('message_list.html');
    }
    //用户管理
    public function member(){
        //echo 'abcd';
        require_once('page.class_member.php');
        $obj_page = new pageClass();        
        $sql = "select yd_id,yd_name,yd_pws,yd_sex,yd_age,yd_call,yd_email,yd_address,yd_pass,yd_time date,life_cityorhamlet from users";
        $obj_page->pagesize(5);
        $list = $obj_page->getlist($sql);
        $page = $obj_page->showpage();
        $this->tpl->assign('list',$list);
        $this->tpl->assign('page',$page);
        $this->tpl->display('member.html');
    }

	//保存注册信息
	public function reg_save(){
        //echo $_POST['everwhere[]'];
        $yd631_name=$_POST["txtloginname"];
        $yd631_pws=md5($_POST["txtPassword"]);
        $yd631_sex=$_POST["yd631_sex"];
        $yd631_age=$_POST["yd631_age"];
        $yd631_call=$_POST["yd631_call"];
        $yd631_email=$_POST["txtemail"];
        $yd631_address=$_POST["yd631_address"];
        $everwhere=implode(',',$_POST["everwhere"]);
        $yd631_time=date("Y-m-d");
        $yd631_pass="no";
        $yd631_id="00005";

//获取最大值----------------------------------------------
        $sql="select max(yd_id) from users ";
        $rs = $this->db->select($sql);
        //print_r($rs);
        $max=$rs[0][0];
        ++$max;
        $cnt = (string)$max;
        $result2=$this->db->insert("insert into users set yd_id=$cnt,yd_name='{$yd631_name}',yd_pws='{$yd631_pws}',
        	yd_sex='{$yd631_sex}',yd_age='{$yd631_age}',yd_call='{$yd631_call}',yd_email='{$yd631_email}',
        	yd_address='{$yd631_address}',life_cityorhamlet='{$everwhere}',yd_time='{$yd631_time}',yd_pass='{$yd631_pass}'");
		if (!$result2){
			$this->show_message('注册成功','index.php');
		}else{
			exit('发生错误：'.$this->db->get_error());
		}
    }
	/**
	 * 登录验证
	 *
	 */
	public function login_save(){
        //echo "abcd";
		session_start();
        $yd631_name= $_POST["yd631_name"]; //用户名已经记录了
        $yd631_pws= md5($_POST["yd631_pws"]); //密码已经记录了
        $member=$this->db->select("select count(*) from users where yd_name='$yd631_name' and yd_pws='$yd631_pws'");
        if($member[0][0]>0){
        	$member=$this->db->select("select * from users where yd_name='$yd631_name' and yd_pws='$yd631_pws'");
        //print_r($member);
        //验证用户是不是被审核通过了
        if($member[0]["yd_pass"]=="no"){
			echo ("<script type='text/javascript'> alert('您还没有被审核呢！');history.go(-1);</script>");
			exit;
	    }
        if (strtolower($_SESSION["yanzhengma"])!==strtolower($_POST["yanzhengma"])) {
            echo ("<script type='text/javascript'> alert('验证码错误!');history.go(-1);</script>");
            exit;
        }
//        if ($_SESSION['yd631_name'] = $member[0]['yd_name']||$_SESSION['yd631_pws'] = $member[0]['yd_pws']){
            //var_dump($_POST);
            $_SESSION['yd631_name'] = $_POST['yd631_name'];
            $gr1 = $_SESSION['yd631_name'];
            //echo "<script>alert('$gr1')</script>";
            //echo $_SESSION['yd631_name'];
            $_SESSION['yd631_id'] = $member[0]['yd_id'];
            $_SESSION['yd631_pws'] = $_POST['yd631_pws'];
			$this->show_message('登录成功','center.php');
//        }else{
//			echo ("<script type='text/javascript'> alert('用户名或密码不正确！');history.go(-1);</script>");
//		}
		
	}else{
		echo ("<script type='text/javascript'> alert('用户名或密码不正确！');history.go(-1);</script>");
    }
		
	}

	//管理员登录验证
	public function admin_cl(){
		if(empty($_POST["yd631_name"])){
	       echo ("<script type='text/javascript'> alert('用户名不能是空的');history.go(-1);</script>");
        }
        if(empty($_POST["yd631_pws"])){
	       echo ("<script type='text/javascript'> alert('密码不能是空的');history.go(-1);</script>");
        }
        $yd631_name=$_POST["yd631_name"];
        $yd631_pwse=$_POST["yd631_pws"];	
        if($yd631_name=="admin" and $yd631_pwse=="admin"){
        $_SESSION["admin"]="yd631";
        $this->tpl->assign('PageURLk',PageURL);
	    $this->tpl->display('main.html');
        }else{
        echo ("<script type='text/javascript'> alert('用户名或密码不对');history.go(-1);</script>");
        }
    }
    
    //用户管理界面
    public function hygl(){
    
        $this->tpl->assign('PageURLk',PageURL);
	    $this->tpl->display('main.html');
    }
    /**
     * 
     * 删除留言
     *
     */
    public function delete(){
        //echo "0123qw";
        $sql = "delete from tb_message where id=$id";
        $result = $this->db->query($sql);
        if ($result){
            $this->show_message('删除成功',$_SERVER['HTTP_REFERER']);
        }else{
            exit('发生错误：'.$this->db->get_error());
        }
    }
	/**
	 * 退出登录
	 *
	 */
//新增代码----------------------------------------------
//票种录入    
    public function pzlr(){
    	$sql = "select adress from city";
    	$list = $this->db->select($sql);
    	$this->tpl->assign('list',$list);
    	$this->tpl->display('pzlr.html');
    }

//城市信息注册
    public function cslr(){
    //	$sql = "select adress from city";
    //	$list = $this->db->select($sql);
    //	$this->tpl->assign('list',$list);
    	$this->tpl->display('cslr.html');
    }
        
    //保存票种信息
    public function reg_save_pzlr(){
    	//echo $_POST['everwhere[]'];
    	$yd631_name=$_POST["txtloginname"];//票种名称
    	$yd631_pws=$_POST["txtPassword"];//备注
    	$yd631_age=$_POST["yd631_age"];//单价
    	$result2=$this->db->insert("insert into ticket_kind set name='{$yd631_name}',price={$yd631_age},remark='{$yd631_pws}'");
    		if (!$result2){
    			echo "<script>alert('注册成功...')</script>";
    			$sql = "select adress from city";
    			$list = $this->db->select($sql);
    			$this->tpl->assign('list',$list);
    			$this->tpl->display('pzlr.html');
    			
    			
    		//$this->show_message('注册成功','index.php');

    		}else{
    			exit('发生错误：'.$this->db->get_error());
    		}
	}    
	
//票种维护	
	public function pzwh(){
		//echo 'abcd';
		require_once('page.class_pzwh.php');
		$obj_page = new pageClass();
		$sql = "select name,price,remark from ticket_kind";
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('member_pzwh.html');
	}
	
//期间录入
	public function qjlr(){
		$sql = "select adress from city";
		$list = $this->db->select($sql);
		$this->tpl->assign('list',$list);
		$this->tpl->display('qjlr.html');
	}	
//期间维护
	public function qjwh(){
		//echo 'abcd';
		require_once('page.class_qjwh.php');
		$obj_page = new pageClass();
		$sql = "select name,discount,remark from period";
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('member_qjwh.html');
	}	

	//城市维护
	public function cswh(){
		//echo 'abcd';
		require_once('page.class_cswh.php');
		$obj_page = new pageClass();
		$sql = "select id,adress from city";
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('member_cswh.html');
	}	
	
	//保存城市信息
	public function reg_save_cslr(){
		//echo $_POST['everwhere[]'];
		$city_name=$_POST["cityname"];//城市名称
		//$resulte=$this->db->insert("insert into city set adress='{$city_name}'");
		$resulte=$this->db->insert("insert into city(adress) values ('".$city_name."')");
		if ($resulte){
			echo "<script>alert('注册成功!')</script>";
			//$sql = "select adress from city";
			//$list = $this->db->select($sql);
			//$this->tpl->assign('list',$list);
			$this->tpl->display('cslr.html');
			 
			 
			//$this->show_message('注册成功','index.php');
	
		}else{
			exit('发生错误：'.$this->db->get_error());
		}
	}	
	
	
	//保存期间信息
	public function reg_save_qjlr(){
		//echo $_POST['everwhere[]'];
		$yd631_name=$_POST["txtloginname"];//期间名称
		$yd631_pws=$_POST["txtPassword"];//备注
		$yd631_age=$_POST["yd631_age"];//折扣比率
		$result2=$this->db->insert("insert into period set name='{$yd631_name}',discount={$yd631_age},remark='{$yd631_pws}'");
		if (!$result2){
			echo "<script>alert('注册成功...')</script>";
			$sql = "select adress from city";
			$list = $this->db->select($sql);
			$this->tpl->assign('list',$list);
			$this->tpl->display('qjlr.html');
			 
			 
			//$this->show_message('注册成功','index.php');
	
		}else{
			exit('发生错误：'.$this->db->get_error());
		}
	}
	
//管理员历史售票查询分析	
	
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
		$this->tpl->display('p_cx_human_admin.html');
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
	
		$sqlwhere = "where ".$sqlwhere;
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
//		echo $sql;
		$sql_hj = "select sum(sales_amount) as zshj,
				sum(receivable_money) as ysjehj,
				sum(received_money) as ssjehj,
				sum(odd_change) as zljehj
				from sales_ticket " . $sqlwhere ;
		require_once('page.class_sp_admin.php');
		$obj_page = new pageClass();
		$obj_page->pagesize(5);
		$list = $obj_page->getlist($sql);
		$hj = $obj_page->getlist($sql_hj);
		$page = $obj_page->showpage();
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('hj',$hj);
		$this->tpl->assign('page',$page);
		$this->tpl->display('lsjl_admin.html');
	}	
	
	private function tjgl (){
        $this->tpl->assign('PageURLk',PageURL);
	    $this->tpl->display('tjgl.html');
	}
		
//统计报表日期段条件设定	
	private function tjgl_date_tiaojian(){
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
		$this->tpl->display('tjgl_date_tiaojian.html');
	}
	

	private function tjgl_date_tj(){
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
			$sqlwhere2= " 包括的票种： " .$everwhere_1 ;
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
			$sqlwhere2.=  "并且  包括的期间： " .$everwhere_2 ;
		}else{
			//echo 'kc';
			$sqlwhere.="";
		}
	
		$txtrq_1=$_POST["txtrq_1"];
		//echo"<script>alert('售票日期1：$txtrq_1')</script>";
		if (strlen(trim($txtrq_1)) <> 0 ){
			$sqlwhere.=  " and DATE_FORMAT(sales_time,'%Y-%m-%d' ) >= '" .$txtrq_1."'" ;
			$sqlwhere2.=  " 并且  售票日期 大于等于 $txtrq_1" ;
				
		}else{
			$sqlwhere.="";
		}
			
		$txtrq_2=$_POST["txtrq_2"];
		//echo"<script>alert('售票日期2：$txtrq_2')</script>";
		if (strlen(trim($txtrq_2)) <> 0 ){
			$sqlwhere.=  " and DATE_FORMAT(sales_time,'%Y-%m-%d' ) <= '" .$txtrq_2."'" ;
			$sqlwhere2.=  " 并且 售票日期小于等于 $txtrq_2" ;
				
		}else{
			$sqlwhere.="";
		}
	
		$sqlwhere = "where ".$sqlwhere;
		$_SESSION['sqlwhere'] = $sqlwhere;
		$_SESSION['sqlwhere2'] = $sqlwhere2;
		
		$this->tjgl_pz_tj();
/*
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "index.php?action=tjgl_pz_tj");
		curl_setopt($ch, CURLOPT_TIMEOUT, 2);
		curl_setopt($ch, CURLOPT_HEADER, 1); //如果设为0，则不使用header
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$result = curl_exec($ch);
		curl_close($ch);
		file_get_contents("index.php?action=tjgl_pz_tj");		
	
		$sql = "select
				ticket_kind_name,
				sum(sales_amount) as sales_amount,
				sum(receivable_money) as receivable_money,
				sum(received_money) as received_money,
				sum(odd_change) as odd_change 
				from sales_ticket " . $_SESSION['sqlwhere'] ." group by ticket_kind_name";
		echo $sql;		
		require_once('tjbb_pz_class.php');
		$obj_page = new pageClass();
		$obj_page->pagesize(10);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('sqlwhere2',$sqlwhere2);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('tjgl_pz_bb.html');
*/		
	}	
	
	//统计报表日期段条件设定
	private function tjgl_pz_tj(){
		$tjrq=date("Y-m-d");
		$sql = "select
				ticket_kind_name,
				round(sum(sales_amount),2) as sales_amount,
				round(sum(receivable_money),2) as receivable_money,
				round(sum(received_money),2) as received_money,
				round(sum(odd_change),2) as odd_change
				from sales_ticket " . $_SESSION['sqlwhere'] ." group by ticket_kind_name";
		$sql_hj = "select
				ticket_kind_name,
				round(sum(sales_amount),2) as sales_amount,
				round(sum(receivable_money),2) as receivable_money,
				round(sum(received_money),2) as received_money,
				round(sum(odd_change),2) as odd_change
				from sales_ticket " . $_SESSION['sqlwhere'] ;
		
		
		//		echo $sql;	
	
		require_once('tjbb_pz_class.php');
		$obj_page = new pageClass();
		$obj_page->pagesize(10);
		$list = $obj_page->getlist($sql);
		$list_hj = $obj_page->getlist($sql_hj);
		$page = $obj_page->showpage();
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('tjrq',$tjrq);
		$this->tpl->assign('sqlwhere2',$_SESSION['sqlwhere2']);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('list_hj',$list_hj);
		$this->tpl->assign('page',$page);
		$this->tpl->display('tjgl_pz_bb.html');
		
	}	
	
	
	//统计报表期间条件设定
	private function tjgl_qj_tiaojian(){
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
		$this->tpl->display('tjgl_qj_tiaojian.html');
	}
	private function tjgl_qj_tj(){
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
			$sqlwhere2= " 包括的票种： " .$everwhere_1 ;
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
			$sqlwhere2.=  "并且  包括的期间： " .$everwhere_2 ;
		}else{
			//echo 'kc';
			$sqlwhere.="";
		}
	
		$txtrq_1=$_POST["txtrq_1"];
		//echo"<script>alert('售票日期1：$txtrq_1')</script>";
		if (strlen(trim($txtrq_1)) <> 0 ){
			$sqlwhere.=  " and DATE_FORMAT(sales_time,'%Y-%m-%d' ) >= '" .$txtrq_1."'" ;
			$sqlwhere2.=  " 并且  售票日期 大于等于 $txtrq_1" ;
	
		}else{
			$sqlwhere.="";
		}
			
		$txtrq_2=$_POST["txtrq_2"];
		//echo"<script>alert('售票日期2：$txtrq_2')</script>";
		if (strlen(trim($txtrq_2)) <> 0 ){
			$sqlwhere.=  " and DATE_FORMAT(sales_time,'%Y-%m-%d' ) <= '" .$txtrq_2."'" ;
			$sqlwhere2.=  " 并且 售票日期小于等于 $txtrq_2" ;
	
		}else{
			$sqlwhere.="";
		}
	
		$sqlwhere = "where ".$sqlwhere;
		$_SESSION['sqlwhere_qj'] = $sqlwhere;
		$_SESSION['sqlwhere2_qj'] = $sqlwhere2;
	
		$this->tjgl_qijian_tj();
		/*
			$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "index.php?action=tjgl_pz_tj");
		curl_setopt($ch, CURLOPT_TIMEOUT, 2);
		curl_setopt($ch, CURLOPT_HEADER, 1); //如果设为0，则不使用header
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$result = curl_exec($ch);
		curl_close($ch);
		file_get_contents("index.php?action=tjgl_pz_tj");
	
		$sql = "select
		ticket_kind_name,
		sum(sales_amount) as sales_amount,
		sum(receivable_money) as receivable_money,
		sum(received_money) as received_money,
		sum(odd_change) as odd_change
		from sales_ticket " . $_SESSION['sqlwhere'] ." group by ticket_kind_name";
		echo $sql;
		require_once('tjbb_pz_class.php');
		$obj_page = new pageClass();
		$obj_page->pagesize(10);
		$list = $obj_page->getlist($sql);
		$page = $obj_page->showpage();
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('sqlwhere2',$sqlwhere2);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('page',$page);
		$this->tpl->display('tjgl_pz_bb.html');
		*/
	}

	//统计报表日期段条件设定
	private function tjgl_qijian_tj(){
		$tjrq=date("Y-m-d");
		$sql = "select
				period_name,
				sum(sales_amount) as sales_amount,
				round(sum(receivable_money),2) as receivable_money,
				round(sum(received_money),2) as received_money,
				round(sum(odd_change),2) as odd_change
				from sales_ticket " . $_SESSION['sqlwhere_qj'] ." group by period_name";
//				echo $sql;
		$sql_hj = "select
				ticket_kind_name,
				round(sum(sales_amount),2) as sales_amount,
				round(sum(receivable_money),2) as receivable_money,
				round(sum(received_money),2) as received_money,
				round(sum(odd_change),2) as odd_change
				from sales_ticket " . $_SESSION['sqlwhere'] ;
		
		require_once('tjbb_qj_class.php');
		$obj_page = new pageClass();
		$obj_page->pagesize(10);
		$list = $obj_page->getlist($sql);
		$list_hj = $obj_page->getlist($sql_hj);
		$page = $obj_page->showpage();
		$this->tpl->assign('user_name',$user_name);
		$this->tpl->assign('tjrq',$tjrq);
		$this->tpl->assign('sqlwhere2_qj',$_SESSION['sqlwhere2_qj']);
		$this->tpl->assign('list',$list);
		$this->tpl->assign('list_hj',$list_hj);
		$this->tpl->assign('page',$page);
		$this->tpl->display('tjgl_qj_bb.html');
	
	}
		
//----------------------------------------------------    
	public function out(){
		session_unset();
		session_destroy();
		$this->show_message('退出成功','index.php');
	}
}
$show = new showPage();
$show->main();
unset($show);


?>