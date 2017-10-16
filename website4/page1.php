<?php 
	#session 
	# session_start();
	if (isset($_POST["submit"])) {
		#使用session之前一定要写session_start();
		#session是把数据上传到服务器，cookie是上传到本地浏览器(客户端)
		# code...
		// echo "123";
		session_start();
		$_SESSION['name0000'] = $_POST['name'];
		$_SESSION['email0000'] = $_POST['email'];
		header("Location: page2.php");

	}





 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>page 1</title>
 </head>
 <body>
 	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
 		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
 		<input type="submit" name="submit" value="提交" >
 	</form>
 	
 </body>
 </html>