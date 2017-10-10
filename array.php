<?php 
	#array：数组（有效的控制资源）存储很多数据的集合
	/*
		分类：下标数组，关联数组
		下标数组：下标以0开始  -0结尾
		关联数组：以第一个名字开头  -0结尾


	*/
	// 创建数组方式1
	$people =  array("Kevin","Henry","Mary");
	//echo 不能打印数组(能打印单个的)
	echo $people[1];
	// 创建数组方式2
	$ids = [23,56,25];
	echo $ids[1];

	$cards = ["Honda","Toyota","BYD"];
	$cards[3] = "NMBH";
	// echo $cards[3];
	echo count($cards);//打印当前数组个数
	#打印数组的方法
	print_r($cards);
	#万能打印方法
	var_dump($cards);


	// 关联数组
	$people = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $people["Emily"];//20

	$ids = [22=>"Henry",25=>"Bucky"];
	echo $ids[22];//Henry
	$ids[35] = "Emily";
	echo $ids[35];

	$cars[] = "Bence";//下标数组不给他下标就会在最后一个插
	//下边是关联数组
	$ids[] = "Joins";//Array ( [22] => Henry [25] => Bucky [35] => Emily [36] => Joins )
	$people[] = 55;


	print_r($people);

	//多维数组
	$cars = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("Ford",15,10)
	);
	// $cars[[],[],[]];
	echo $cars[2][1];//15

	

 ?>