<?php 
	function updateData($sql){
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
		$result = $mysqli->query($sql);
		if($result){
			echo "更新成功";

		}else{
			echo "插入失败";
		}
		#断开连接
		$mysqli->close();

	}
	#准备sql语句
	$sql = "UPDATE customers SET name='孙摔死',email='s545215@qq.com' WHERE id=6";
	updateData($sql);





 ?>