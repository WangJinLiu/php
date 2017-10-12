<div class="container">
<!--一进来的时候（没提交），if条件里的就不会执行，当你提交了内容会从头执行  -->
<?php 
	// 只能获取到input中的name属性
	// echo $_GET["sbqname"];
	//检查sbqname 是否能获取到(判断的是有没有提交)
	//$_GET[]   只能获取get(input中的method是get)
	// if(isset($_GET['sbqname']) && isset($_GET["sbqemail"])){
	// 	// echo $_GET["sbqname"];
	// 	$name = $_GET["sbqname"];
	// 	$email = $_GET["sbqemail"];
	// 	echo $name.":".$email;

	// }
	// print_r($_GET);//获取到的是个数组Array ( [sbqname] => 122 [sbqemail] => 1242178302@qq.com )
	// print_r($_POST);

	//$_POST[]   只能获取post(input中的method是post)
	// if(isset($_POST['sbqname']) && isset($_POST["sbqemail"])){
	// 	// echo $_GET["sbqname"];
	// 	$name = $_POST["sbqname"];
	// 	$email = $_POST["sbqemail"];
	// 	if(!empty($name) && !empty($email)){

	// 		echo $name.":".$email;
	// 	}
	// 	print_r($_POST);
		
	// }
	
	//$_REQUEST  get post 都能获取
	// if(isset($_REQUEST['sbqname']) && isset($_REQUEST["sbqemail"])){
	// 	// echo $_GET["sbqname"];
	// 	$name = $_REQUEST["sbqname"];
	// 	$email = $_REQUEST["sbqemail"];
	// 	if(!empty($name) && !empty($email)){

	// 		echo $name.":".$email;
	// 	}
	// 	print_r($_REQUEST);
		
	// }

	//查询URL地址？后面的参数（POST得不到，因为POST url中不显示form表单提交的东西）
	echo $_SERVER["QUERY_STRING"];//sbqname=123&sbqemail=1242178302%40qq.com
	

	/*总结：

		$_GET $_POST都能根据input中的name属性获取到form表单提交的数据，得到的是一个数组，
		数组的格式（以上面例子来说）：Array ( [sbqname] => 122 [sbqemail] => 1242178302@qq.com ) 关联数组
		但$_GET能获取到url（地址）中的？后面的值然后转换为数组的格式，$_POST不能

	*/






 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- action 提交到哪里去 -->
		<!-- get post 区别：get所有的参数值会在url？后边拼接，不安全，传递大小有限制，小   post不会拼接参数，安全，传递大小有限制，但足够大
			name 属性规定 <input> 元素的名称。
			name 属性用于在 JavaScript 中引用元素，或者在表单提交后引用表单数据。
			注意：只有设置了 name 属性的表单元素才能在提交表单时传递它们的值。-->
		<form action="get_post.php" method="get">
			<div class="from-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="sbqname">
			</div>
			<br>
			<div class="from-group">
				<label for="">Email</label>
				<input type="email" class="form-control" name="sbqemail">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>
		<!-- 另一个功能 -->
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name1=小一"; ?>" class="btn btn-success btn-block">
					小一
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name1=小二"; ?>" class="btn btn-info btn-block">
					小二
				</a>
			</li>
		</ul>
		<?php print_r($_GET)   ;?>
		<!-- 点击哪个 Array ( [name1] => 小一 )  或者 Array ( [name1] => 小二 ) -->
		<h1>
			<?php if(isset($_GET["name1"])){echo $_GET["name1"];}?>
		</h1>
	</div>
</body>
</html>