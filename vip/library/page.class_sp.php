<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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
		$this->pagesize = 10;
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
		$page_str .= "<a href='".$url.$request.'&page='.$pre_page."'>上一页</a> ";
		$page_str .= "<a href='".$url.$request.'&page='.$next_page."'>下一页</a>";
		return $page_str;
	}
}
?>
<script src="../js/jquery-1.11.3.js"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"></script>
<script src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"></script>
<script type="text/javascript">
function dodel() {
	//alert("abcd");
	if (!confirm("是否确认删除, 删除后不可恢复(售票信息)"))  {
                return false;
            }
    //alert($(".child:checked").length);
    for (var i = 0;i<$(".child:checked").length; i++) {
        //alert($(".child:checked:eq("+i+")").val());
        $.ajax({
			url: "member57-sp.php",     //提交的动态页面地址
			data: 'action=check&id='+ $(".child:checked:eq("+i+")").val() ,   //提交过去的参数
			type:'post',   //上面的参数会以POST形式提交给后台
			dataType:"html",   //返回纯文本HTML信息
			beforeSend: function(XMLHttpRequest){
//----------------------------------------------------



      //通过表单验证插件实施验证。
      //ShowLoading('验证中');
      //alert('验证中');



//-------------------------------------------------
    },
			success: function(data){
				//alert(data);
				if('1'==data){
					//alert('删除成功');
					window.location.href="center.php?action=p_cx_human_cx";
				}
				
			}
		});
     }	  
};
 $(function(){
        var children = $("[class=child]:input");      //将常用的jQuery对象存为DOM对象
                                                     //节省资源
        $('#checkAll').click(function(){             //全选checkbox与其控制子checkbox同步
            children.attr("checked",true);	
        });
        $('#checkRev').click(function(){            //反选
            children.each(function(){
                this.checked = !this.checked;
            });
        $("#checkAll").attr("checked",children.length==children.filter(":checked").length);
        }); 
        children.click(function(){          //全选checkbox与其控制子checkbox同步
        $("#checkAll").attr("checked",children.length==children.filter(":checked").length);
        });
		// $("#del_selected").click(function() { 
		//         	if (!confirm("是否确认删除, 删除后不可恢复"))  {
		//                 return false;
		//             }
		//             $("tbody input:checkbox").each(function() {  
		//                 if (this.checked) {  
		//                     $(this).parent().parent().remove();  
		//                 }  
		//             });  
		  
		//         });
 });
</script>
    <input type="button"  id="checkAll" value="全选" />
    <input id="checkRev" type="button" value="反选" />
    <input id="del_selected" type="button" name="delid" value="删除选中项" onclick="dodel()" />
</html>
