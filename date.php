<?php 

	// echo data();至少要给一个参数
	echo date("d");#day
	echo "<hr>";
	echo date("m");#month
	echo "<hr>";
	echo date("Y");#Year 2017 year 17
	echo "<hr>";
	echo date("l");#day of week
	echo "<hr>";
	echo date("Y/m/d");//年  月 日
	echo "<hr>";
	echo date("d-m-Y");//日月年
	echo "<hr>";
	echo date('h');//hour
	echo "<hr>";
	echo date('i');//minute
	echo "<hr>";
	echo date("s");//seconds
	echo "<hr>";
	echo date('a');//AM or PM(上午或下午)
	echo "<hr>";
	//上面的采用的不是北京时间
	//设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sa');
	echo "<hr>";
	#mktime
	$timestamp = mktime(07,00,12,1,24,1988);//（时，分，秒，月，日，年）
	echo $timestamp;//1970年到自己设定的时间毫秒数

	echo "<hr>";
	#完整时间
	echo date("m/d/Y h:i:sa",$timestamp);
	echo "<hr>";
	#字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");//在今天基础上加两天
	echo date("m/d/Y h:i:sa",$timestamp3);




 ?>