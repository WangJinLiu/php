<?php 

	#循环 loops 让项目制作的更高效
	#根据某个条件重复执行某段代码
	/*
		-for
		-while
		-do....while
		-foreach


	*/

	//for
	//@params - init(初始化),condition（条件）, inc（自增）
	for($i = 0;$i<10;$i++){
		echo ($i+1)."<br>";

	}
	// echo $i;//10
	$mm = '';
	echo $mm;
	//white 循环
	//@params -condition
	$i = 0;
	while($i < 10){
		echo $i."<br>";
		$i++;

	}
	# do...while
	$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}while($i < 10);
	# foreach 循环，下标数组
	$people = array("Henry","Bucky","Emily");
	foreach($people as $person){
		echo $person;
		echo "<br>";

	}
	# foreach 循环，关联数组
	$people = array(
		"Henry"=>"Henry@gmail.com",
		"Bucky"=>"Henry@gmail.com",
		"Emily"=>"Emily@gmail.com"

	);
	foreach ($people as $key => $value) {
		echo $key.":".$value;
		echo "<br>";
	}

	//练习打印1-100  7的倍数
	//打印1-100  个位为7的数
	// 打印1-100  十位7的倍数
	// 打印1-100  个位不为7，十位不为7，以及不是7的倍数
	//练习2打印九九乘法表




 ?>