<?php 
	$users = ["name" => "herry","email" => "1242178302@qq.com","age" => "30"];
	//将数组转化为字节流,然后再把数组放cookie里
	$users = serialize($users);
	setcookie("usersss","$users",time() + 86400);
	//从cookie中取数组时要把字节流转化为数组形式
	$users = unserialize($_COOKIE['usersss']);
	print_r($users);
	





 ?>