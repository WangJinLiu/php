<?php 

	session_start();
	$name =isset($_SESSION['name0000']) ? $_SESSION['name0000']: "name属性不存在";
	var_dump($_SESSION['name0000']);//unset之后变成null




 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>page 2</title>
 </head>
 <body>
 	<h2>你的名字是：<?php echo $name;  ?></h2>
 	<a href="page3.php">GO to Page3</a>
 </body>
 </html>