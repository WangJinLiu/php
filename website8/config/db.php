<!-- 公共的 -->
<?php 

	#连接数据库
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	#判断是否连接成功
	if(mysqli_connect_errno()) {
		echo "数据库连接失败".mysqli_connect_errno(); 

	}
?>