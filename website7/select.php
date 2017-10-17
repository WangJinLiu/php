<?php 
	function selectData($sql){
		#连接数据库
		$mysqli = new mysqli("localhost","root","","people");
		#测试是否连接成功
		#connect_errno 0成功 非0 失败
		if($mysqli->connect_errno){
			die($mysqli->connect_errno);

		}
		
		
		#设置utf-8
		$mysqli->query("set names utf8");
		#执行sql语句
		// 失败时返回 FALSE，通过mysqli_query() 成功执行SELECT, SHOW, DESCRIBE或 EXPLAIN查询会返回一个mysqli_result 对象，其他查询则返回TRUE。
		$result = $mysqli->query($sql);
		var_dump($result);
		if($result->num_rows){
			
			// MYSQL_NUM 只得到数字索引数组,MYSQL_ASSOC 只得到关联索引数组, MYSQL_BOTH，将得到一个同时包含关联和数字索引的数组
			//以关联数组形式返回，默认下标数据
			$data = $result->fetch_all(MYSQL_ASSOC);
			//把数组转化为json数据（前端就能拿到了）对变量进行 JSON 编码
			echo json_encode($data);

		}
		#断开连接
		$mysqli->close();

	}
	#准备sql语句
	$sql = "SELECT * FROM customers";
	selectData($sql);






 ?>