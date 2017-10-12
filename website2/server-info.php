<?php 
	#$_SERVER[]:用于记录客户端&服务端的配置信息

	# 服务器端数组信息
	$server = [
		"主机名" => $_SERVER["SERVER_NAME"],
		"软件信息" => $_SERVER["SERVER_SOFTWARE"],
		"文件根路径" => $_SERVER["DOCUMENT_ROOT"],
		"绝对路径" => $_SERVER["SCRIPT_FILENAME"],
		"当前路径" => $_SERVER["PHP_SELF"],



	];
	// echo $_SERVER["SERVER_NAME"];//127.0.0.1
	// echo $server["主机名"]."<hr>";//127.0.0.1
	// echo $server["软件信息"]."<hr>";//Apache/2.4.26 (Unix) OpenSSL/1.0.2l PHP/5.6.31 mod_perl/2.0.8-dev Perl/v5.16.3
	// echo $server["文件根路径"]."<hr>";///Applications/XAMPP/xamppfiles/htdocs
	// echo $server["绝对路径"]."<hr>";///Applications/XAMPP/xamppfiles/htdocs/phpsandbox/website2/server-info.php
	// echo $server["当前路径"]."<hr>";///phpsandbox/website2/server-info.php
	// print_r($server);




	/*
		SERVER_NAME => 主机名
		SERVER_SOFTWARE => 服务器软件信息
		DOCUMENT_ROOT => 文档根路径
		SCRIPT_FILENAME => 绝对路径
		PHP_SELF => 当前路径
	*/
	$client = [
		"用户代理" => $_SERVER["HTTP_USER_AGENT"],//
		"客户端IP" => $_SERVER["REMOTE_ADDR"],
		"端口号" => $_SERVER["REMOTE_PORT"],//尽量设置1000以上
	];
	//三个输出
	//Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36
	//127.0.0.1
	//50557
	// print_r($client);
	# 客户端数组信息
	/*
		HTTP_USER_AGENT => 客户端系统信息
		REMOTE_ADDR => 客户端IP
		REMOTE_PORT => 客户端端口号
	*/






	


 ?>