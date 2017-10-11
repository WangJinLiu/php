<?php 
	
	#function：函数 - 具有某一功能的代码块
	/*
		命名法：
		Camal Case - myFunction();驼峰
		Lower Case - my_function();小驼峰
		Pascal Case - MyFunction();大驼峰
	*/
	//1.函数第一种无参无返回值
	//定义函数(函数一定有返回值的，如果没有return 返回undefined)函数只有在调用的时候才会写入内存
	function simpleFunction(){
		echo "Hello World!"."<hr>";

	}
	//PHP中函数名大小写不敏感，不分大小写（js中不可以）
	simpleFunction();

	//2.有参数无返回值(PHP中有参数就一定要传参，不传会报错)
	function buy($money = "20块钱"){
		echo $money."有参数无返回值"."<hr>";

	}
	buy("十块钱");//传参优先级比默认值高

	//3.有参加有返回值
	function sumValue($num1,$num2){
		$sum = $num1 + $num2;
		return $sum."<hr>";

	}
	$result = sumValue(15,25);
	echo $result;
	//4.无参数有返回值
	function buyDrink(){
		return "饭后的饮料"."<hr>";
	}
	$s = buyDrink();
	echo $s;
	//扩展
	//函数传引用(就是在函数内可以改变函数外的变量的值，传的是地址，不是变量名)
	$myNum = 10;
	function addFive(&$num){
		$num += 5;

	}
	addFive($myNum);//15
	echo $myNum;//15 拿到了myNum的引用，改变了内存中的数值
	




	




	

 ?>