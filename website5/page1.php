<?php 
	#监听用户是否触发了submiit
	if(isset($_POST['submit'])) {
		// 当input中输入的是空的不会存在cookie
		$username = $_POST['username'];
		setcookie('name0000',$username,time() + 86400);//86400秒  24小时
		// var_dump(time());//time() 函数返回自 Unix 纪元（January 1 1970 00:00:00 GMT）起的当前时间的秒数。
		// echo date("Y-m-d h:i:sa",time()+3600*24);
		header("Location: page2.php");

	}




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="username" placeholder="enter ur name">
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>