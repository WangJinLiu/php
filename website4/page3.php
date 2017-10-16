<?php 
	session_start();
	//改变session存储的值
	// $_SESSION['email0000'] = '1111111@qq.com';
	#获取session存储的值
	$email =isset($_SESSION['email0000']) ? $_SESSION['email0000']: "name属性不存在" ;
	$name = isset($_SESSION['name0000']) ? $_SESSION['name0000']: "email属性不存在" ;
	







 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>page 3</title>
 </head>
 <body>
 	<h2>你的邮箱是：<?php echo $email; ?></h2>
 	<h2>你的名字：<?php echo $name; ?></h2>
 	
 </body>
 </html>