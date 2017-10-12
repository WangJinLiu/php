
<div class="container">
	<?php 
		#检查是否存在data的name属性
		if(filter_has_var(INPUT_POST,"data")){
			// echo "data存在";
			$email = $_POST["data"];
			// echo $email;
			#过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;
			#验证是否是一个有效的邮箱
			if(filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)){
				echo "邮箱合法";
			}
			else{
				echo "邮箱不合法";
			}
		}else{
			echo "data不存在";
		}
		/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/

		//练习验证一个变量中的值是否是合法的整型
		$var = 23;//”23“也合法，它指
		if(filter_var($var,FILTER_VALIDATE_INT)){
			echo "合法";

		}else{
			echo "不合法";
		}


		#获取字符串中所有数值
		$var = "dfrg55g4864ghd1fgt5864fhg15fzs1gf51g";
		$mm = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
		echo $mm;//得到所有的数值了5548641586415151

		#特殊字符
		$var = "<script>alert(1)</script>";
		// echo $var;//能弹出1
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);//<script>alert(1)</script>

		#验证数组中每个元素
		//自己定义的验证规则
		/*$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				// 这里边的名是固定的
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" => 1,
					"max_range" => 150

				)
			)
		);*/
		// print_r(filter_input_array(INPUT_POST,$filters));

		//练习验证form表单中input的内容，第一个input一定是email，第二个input一定是数值，并且数值不能小于1，大于150
		// 单个判断
		/*
		if(filter_has_var(INPUT_POST,"data")){
			if(filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)){
				echo "第一个input输入内容合法";
			}else{
				echo "第一个input输入内容不合法";
			}
		}else{
			echo "data不存在";
		}
		// echo filter_has_var(INPUT_POST,"data2");
		if(filter_has_var(INPUT_POST,"data2")){
			if(filter_input(INPUT_POST, "data2",FILTER_VALIDATE_INT)){
				if($_POST["data2"]>1 && $_POST["data2"]<100){
					echo "第二个input中内容合法";
				}else{
					echo "第二个input中数值范围不对";
				}

			}else{
					echo "第二个input不合法";
			}
		}else{
			echo "data2不存在";
		}*/

		//
		$arr = array(
			"name" => "henry",
			"age" => "30",
			"email" => "henry@gmail.com"
		);
		//自己定义的验证规则
		$filters = array(
			"name" => array(
				"filter" => FILTER_CALLBACK,
				"options" => "ucwords"
			),
			"age" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" => 1,
					"max_range" => 100
				)
			),
			"email" => FILTER_VALIDATE_EMAIL
		);
		print_r(filter_var_array($arr,$filters));


	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters 过滤器</title>
	<!-- <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<input type="text" name="data" class="form-control">
			<input type="text" name="data2" class="form-control">
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>