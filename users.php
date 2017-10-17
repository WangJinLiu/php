<!-- 从ajax4中POSTinput输入数据，然后在ajax5中点击输出   
	这个过程：在ajax4 中最后一个input中输入，然后ajax4通过process。PHP上传到服务器，ajax5中通过users.php查询数据库内容然后返回给ajax5，用ajax方式获取数据库中的内容，解析显示到ajax5中-->
<?php 

	//从数据库中拿到数据
	#连接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtext");
	//查询 SELECT * FROM 表名称 
	$query = "SELECT * FROM users";
	//增删改返回真假，0  1
	//执行  mysqli_query对数据库执行一次查询
	//查询的返回的是值，增删改返回的是true或false
	$result = mysqli_query($conn,$query);
	// print_r($result);// [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 6 [type] => 0
	//获取数据
	//MYSQLI_ASSOC关联数组 （把$result 中的数据转化为关联数组的形式）
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// print_r($users);

	//json_encode把数组转化为json
	echo json_encode($users);
	// print_r(json_encode($users));





 ?>