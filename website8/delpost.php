<?php 
	//自己写的
	require("config/config.php");
	require("config/db.php");
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	#设置utf8编码
	mysqli_query($conn,"set names utf8");
	# 设置sql语句
	$query = "DELETE FROM posts WHERE id={$id}";
	#执行语句
	$result = mysqli_query($conn,$query);
	if($result){
		header('location: index.php');

	}else{
		echo "数据删除失败".mysqli_error($conn);//拿到
	}
	#释放数据(可释放可不释放)
	mysqli_free_result($result);
	mysqli_close();






 ?>