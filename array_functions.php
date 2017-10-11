<?php 

	$array = array("Henry","Bucky","Emily");
	# 计算数组个数 count
	// echo count($array);//3
	# 将数组开头的单元移出数组 array_shift
	// $newArray = array_shift($array);//返回的是移掉的东西
	// print_r($newArray);
	# 在数组开头插入一个或多个单元 array_unshift
	// $insertValue = array_unshift($array, "Henry");
	// print_r($array);
	# 将一个或多个单元压入数组的末尾（入栈）array_push
	// array_push($array,"Elyse");
	// print_r($array);
	# 弹出数组最后一个单元（出栈） array_pop
	// array_pop($array);
	// print_r($array);
	# 数组排序 sort(按ASCII码值排序)
	// $values = array(22,56,23,56,86);
	// sort($values);
	// print_r($values);
	
	# 数组转字符串 implode
	$arrayToString = array("a","b","c");
	$value = implode(',', $arrayToString);//第一个参数用什么分隔
	echo $value;
	# 字符串转数组 explode
	$array = explode(",", $value);//以分隔符转化成数组
	var_dump($array);


 ?>