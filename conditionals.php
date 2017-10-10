<?php 
	header('content-type:text/html;charset=utf-8'); 
	// 分支语句
	# if & switch
	#关系运算符
	/* > < == != >= <= === !=== */
	// 如果if语句没有花括号就只执行if最近的一条语句
	$num = 6;
	/*if ($num <= 4) 
		echo 'num值一定<=4';//不知执行
	echo "hello";//执行*/

	#if else
	if($num >= 4){

		echo "true";
	}else{
		echo "false";
	}

	#nesting if (if嵌套)
	$num = 4;
	if($num >= 4){
		if($num <= 10){
			echo "num一定在4-10之间";

		}else{
			echo "num一定大于10";
		}

	}else{
		echo "num一定小于4";
	}

	#逻辑运算符
	/* 逻辑与 &&   AND
	   逻辑或||    OR
	   逻辑非! 
	   逻辑异或    XOR(只有一边为真才是真，两边结果都是真为假)
	 */
	$num = 3;
	if($num < 2 XOR $num > 10){
		echo "num一定>3并<10";
	}
	// 与和或有短路现象（与中第一个是假的后边就不会判断了）

	// switch(在js中判断时用的===,php==不判断类型)
	$favColor = "green";
	switch($favColor){
		case "red":
			echo "angry";
			break;
		case "yellow":
			echo "happly";
			break;
		case "blue":
			echo "silence";
			break;
		case "green":
			echo "forgive";
			break;
		default:
			echo "GUN";
			break;

	}

	
	
	


 ?>