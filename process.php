<!-- 只有在MySQL中可以使用“utf-8”的别名“utf8”，但是在其他地方一律使用大写“UTF-8”。】 具体为：   在命令“mysql_query(set names utf8)”外一律用大写“UTF-8”。 -->
<?php 

	// echo "HEllo World!";
	// if(isset($_GET['name'])){
	// 	echo "你的名字是".$_GET['name'];

	// }
	// if(isset($_POST['name'])){
	// 	echo "你的名字是".$_POST['name'];

	// }
	//把input输入的内容存储到数据库中
	#1.连接到数据库(面向过程)
	// mysqli_connect("host","username","passwd","dbname");
	$conn = mysqli_connect("localhost","root","","ajaxtext");
	// 连接数据库之后，读取数据之前加
	mysqli_query('set names utf8');
	if(isset($_POST['name'])){
		// echo "你的名字是".$_POST['name'];
		$name = $_POST['name'];
		//users 表名
		//用sql语句把从input获取到的内容插入数据库
		//INSERT INTO 表名称 VALUES (值1, 值2,....)  语句用于向表格中插入新的行。
		$query = "INSERT INTO users(name) VALUES('$name')";//注意：这里的$name 要加引号
		//set names utf-8 解决乱码问题
		// mysqli_query对数据库执行一次查询
		// 失败时返回 FALSE，通过mysqli_query() 成功执行SELECT, SHOW, DESCRIBE或 EXPLAIN查询会返回一个mysqli_result 对象，其他查询则返回TRUE
		$result = mysqli_query($conn,$query);//返回要么是1要么是0 
		var_dump($result);
		if($result){
			echo "数据插入成功";

		}else{
			echo "数据插入失败".mysqli_error($conn);
		}

	}

	


 ?>