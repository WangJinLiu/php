<!-- 可以用标签里包含PHP -->
<!-- <h1> -->
	<!-- <?php
	 // echo "Hello World!";
 	?> -->
<!-- </h1> -->
<!-- <?php
	 // echo "Hello World!";
?> -->
<?php
// php 中分号不能少
	 // echo "Hello Everybody!";
	 //单行注释   command /
	 # 单行注释   shift  3
	 /* 多行注释  option(alt) command /
	 */

	 #variable 变量
	 $output = "Hello World!";
	 /*
	 	变量
	 	-前缀 $
	 	-以字母/数字/下划线组成
	 	-数字不能开头
	 	-驼峰命名法
	*/
	 echo $output;
	 /*
	 	数据类型
	 	String Integer Float Boolean Array Object Resource(函数)
	 */
	 $output = 22;
	 $bool = true;
	 echo $bool;//1 false 打印为空
	 echo $output;

	 #运算符
	 $num1 = 10;
	 $num2 = 20;
	 $sum = $num1 + $num2;
	 echo $sum;

	 #字符串拼接
	 $string1 = "Hello";
	 $string2 = "World";
	 $greeting = $string1 + $string2;
	 // (在PHP中+只是单纯的加号，没有拼接功能,.是拼接)
	 $greeting = $string1.",".$string2."!";
	 echo $greeting;//第一回0，第一回Hello,World!

	 #php中引号的区别
	 $greeting2 = '$string1 $string2';//''单纯的是字符串$string1 $string2
	 $greeting3 = "$string1 $string2";//”“中是变量的话可以正常解析Hello World
	 echo $greeting3;
	 #转义字符
	 $string3 = 'They\'re here';
	 $string4 = "They're here";
	 echo $string3.",".$string4."<br>";
	 // echo $string3,$string4;
	 echo "<hr>";
	 #输出
	 // echo 不是一个方法，没有返回值
	 // printf 有返回值 成功返回值1，它是一个方法
	 printf($string4);

	 #常量
	 // define(name,value,true);（三个参数，前两个必须写）name 必须大写,true 不分大小写
	 // define("GREETING","WhatEver!");
	 // echo GREETING;
	 define("GREETING","What  Ever!",true);
	 // (写上第三个参数true就可以不区分name的大小写)
	 echo greeting;

	 var_dump(greeting);





?>


