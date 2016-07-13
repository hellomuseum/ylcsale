<meta http-equiv="content-type" content="text/html; charset=GB2312" />
<?php
$tns = "  
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = LOCALHOST)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl)
    )

  )";
$db_username = "ffgl";
$db_password = "ffgl";
$str1 = "tj0124";
$str2 = "唐山24";
$str3 = "tj0114";
$str4 = "唐山14";
try{
	$conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
	//开始事务
	$conn->beginTransaction();
	//往ORACLE 添加或更新数据需iconv('utf-8','gb2312//IGNORE', '唐山'),将UTF-8 转换为 GB2312
	//$conn->exec("insert into dwb(syh,dw) values('".$str1."','".iconv('utf-8','gb2312//IGNORE', $str2)."')");
	//$conn->exec("update dwb set dw='".iconv('utf-8','gb2312//IGNORE', $str4)."' where trim(syh)='".$str3."'");

	////-----添加数据的预处理方式一==============
	//$stmt = $conn->prepare("INSERT INTO dwb(syh,dw) VALUES (:syh,:dw)");
	//$stmt->bindParam(":syh", $syh);
	//$stmt->bindParam(":dw", $dw);

	//// 插入一行
	//$syh = "tj0126";
	//$dw1 = "车间名称2";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();

	////  用不同的值插入另一行
	//$syh = "tj0127";
	//$dw1 = "车间名称3";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();

	//$syh = "tj0128";
	//$dw1 = "车间名称4";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();
	////============================================

	////-----添加数据的预处理方式二==============
	//$stmt = $conn->prepare("INSERT INTO dwb(syh,dw) VALUES (?, ?)");
	//$stmt->bindParam(1, $syh);
	//$stmt->bindParam(2, $dw);

	//// 插入一行
	//$syh = "tj0129";
	//$dw1 = "车间名称5";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();

	// 用不同的值插入另一行
	//$syh = "tj0130";
	//$dw1 = "车间名称6";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();
	////==============================================

	////-----更新数据的预处理方式一==============
	//$stmt = $conn->prepare("update dwb set dw = :dw where trim(syh)=:syh");
	//$stmt->bindParam(":syh", $syh);
	//$stmt->bindParam(":dw", $dw);

	//// 更新一行
	//$syh = "tj0118";
	//$dw1 = "更新车间名称1";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();
	////============================================

	////-----更新数据的预处理方式二  *?*==============
	//$stmt = $conn->prepare("update dwb set dw = ? where trim(syh)= ?");
	//$stmt->bindParam(1, $dw);
	//$stmt->bindParam(2, $syh);
	// 更新一行
	//$syh = "tj0113";
	//$dw1 = "更新车间名称zzz";
	//$dw = "'".iconv('utf-8','gb2312//IGNORE', $dw1)."'";
	//$stmt->execute();
	//============================================

	////----调用存储过程方式一*?*===========================
	//$stmt = $conn->prepare("CALL bgrq_qbbg(?)");
	//$stmt->bindParam(1, $value, PDO::PARAM_STR, 40); 
	//$value = "2019-12-31";
	//// 调用存储过程
	//$stmt->execute();

	//===========================================


	////----调用存储过程方式二===========================
	//$stmt = $conn->prepare("CALL bgrq_qbbg(:rq)");
	//$stmt->bindParam(":rq", $value, PDO::PARAM_STR, 40); 
	//$value = "2020-12-31";
	//// 调用存储过程
	//$stmt->execute();

	////===========================================


	////----调用带输出参数的存储过程方式一  输入输出参数是不同的变量===========================
	//$stmt = $conn->prepare("CALL bgrq_qbbg(:rq,:v_sl)");
	//$stmt->bindParam(":rq", $value, PDO::PARAM_STR, 40); 
	//$stmt->bindParam(":v_sl",$vv_sl,PDO::PARAM_INPUT_OUTPUT, 40); 
	//$value = "2022-12-31";
	//// 调用存储过程
	//$stmt->execute();
	//print "procedure returned $vv_sl\n<br/>";

	////===========================================

	////----调用带输出参数的存储过程方式二 *?* 输入输出参数是不同的变量===========================
	//$stmt = $conn->prepare("CALL bgrq_qbbg(?,?)");
	//$stmt->bindParam(1, $value, PDO::PARAM_STR, 40); 
	//$stmt->bindParam(2,$vv_sl,PDO::PARAM_INPUT_OUTPUT, 40); 
	//$value = "2023-12-31";
	//// 调用存储过程
	//$stmt->execute();
	//print "procedure returned $vv_sl\n<br/>";

	//===========================================

	////----调用带输出参数的存储过程方式三 输入输出参数是同一个变量 *?*===========================
	//$stmt = $conn->prepare("CALL bgrq_qbbg(?)");
	//$stmt->bindParam(1, $value, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 40); 
	//$value = "2024-12-31";
	//// 调用存储过程
	//$stmt->execute();
	//print "procedure returned $value\n<br/>";

	//===========================================

	//----调用带输出参数的存储过程方式四-输入输出参数是同一个变量===========================
	$stmt = $conn->prepare("CALL bgrq_qbbg(:rq)");
	$stmt->bindParam(":rq", $value, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 40); 
	$value = "2025-12-31";
	// 调用存储过程
	$stmt->execute();
	print "procedure returned $value\n<br/>";

	//===========================================

	//提交事务
	$conn->commit();
	//$conn->exec("SET CHARACTER SET gb2312"); 
	$rs = $conn->query("SELECT syh,dw FROM dwb");
	while ($row = $rs->fetch()) 
	{
		//从oracle调出数据时需iconv('gb2312', 'utf-8', "$row[1]")，将GB2312转换为UTF-8
    		echo "syh=$row[0]," ."dw=".iconv('gb2312', 'utf-8//IGNORE', "$row[1]")."<br/>";
    		//echo "syh=$row[0]," ."dw="."$row[1]"."<br/>";
	}
}catch(PDOException $e){
	$conn->rollBack();
	echo ($e->getMessage());
}
$conn = null;
?>