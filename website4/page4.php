<?php 
	#取消对应session
	session_start();
	unset($_SESSION['name0000']);
	#取消所有session内容
	session_destroy();

	// 用unset取消完对应数据后会把对应数据变成null
	//isset()监测的是变量有没有定义并且不是null




 ?>