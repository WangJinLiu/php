<?php
	# string function: 处理字符串的函数

	# 返回字符串的一部分 substr(文档中[]代表可选)（后两个参数代表开始位置和结束位置）
	// $output = "Hello World";
	// $output = substr($output,1);
	// $output = substr($output, 1,5);//ello
	// echo $output;

	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);//11

	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output, "o");
	// echo $output;//4
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	// $output = strrpos($output, "l");
	// echo $output;

	# 去除首尾空格trim
	// $output = "  hellowirld   ";
	// echo strlen($output);//15
	// $output = trim($output);
	// echo $output;//返回值String
	// echo strlen($output);//10

	
	
	# 将字符串转为大写 strtoupper
	// $str = "hello world";
	// $newstr = strtoupper($str);//HELLO WORLD
	// echo $newstr;
	
	# 将字符串转为小写 strtolower
	// $lowerStr = strtolower($newstr);
	// echo $lowerStr;
	
	# 将每个单词首字母大写 ucwords
	// $ucword = ucwords($str);
	// echo $ucword;//Hello World
	
	# 替换所有匹配的内容  str_replace(第三个参数是字符串的变量)(也可用于数组，返回的是数组)
	// $text = "Hello World";
	// echo str_replace("World","EveryBody", $text);
	// $a = [22,25,35,46,[1,2,3]];
	// $replace = str_replace([1,2,3],89, $a);
	// print_r($replace) ;//Array ( [0] => 8989 [1] => 895 [2] => 895 [3] => 46 [4] => Array ( [0] => 1 [1] => 2 [2] => 3 ) )
	
	# 判断是否是字符串  is_string
	// $val = "22";
	// $output = is_string($val);
	// echo $output;//是字符串打印1 不是打印空

	# 过滤掉数组中非字符串的值
	$values = array(true,false,"Hello",25,56,"23",23.4,""," ",0,"0");
	foreach ($values as $value) {
		#判断value是否是字符串，如果是输出
		if(is_string($value)){
			echo $value."is a string!<br>";
		}
	}
	# 压缩字符串  gzcompress
	// $string = "16515";
	// $compress = gzcompress($string);
	// echo $compress;//x�34354

	# 解压字符串 gzuncompress
	// echo gzuncompress($compress);//16515

 ?>