<?php
class MysqlClass {
	/**
	 * 构造函数
	 *
	 */
	public function __construct() {
		@mysql_connect(db_host,db_user,db_pwd) or exit($this->get_error());
		mysql_select_db(db_name);
		mysql_query('set names utf8');
	}
	/**
	 * 执行SELECT语句
	 *
	 * @param string $sql
	 */
	public function select($sql=''){
		if ($rs = mysql_query($sql)){
			while($row = mysql_fetch_array($rs)){
				$array[] = $row; 	
			}
		}
		return $array;
	}
	/**
	 * 执行INSERT 语句
	 *
	 * @return unknown
	 */
	public function insert($sql=''){
		if (mysql_query($sql)){
			return mysql_insert_id();
		}else{
			return false;
		}
	}
	/**
	 * 执行UPDATE、DELETE 语句
	 *
	 * @param string $sql
	 * @return 
	 */
	public function query($sql=''){
		return mysql_query($sql);
	}
	/**
	 * 返回错误信息
	 *
	 * @return unknown
	 */
	public function get_error(){
		return mysql_error();
	}
}
?>
