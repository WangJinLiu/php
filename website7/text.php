<?php 

	// $mysqli = new mysqli("localhost","root","","food");
	// if($mysqli->connect_errno){
	// 	die($mysqli->connect_errno);

	// }
	// $sql = "DELETE FROM kind Where id=1";
	// $mysqli->query("set names utf8");
	// $result = $mysqli->query($sql);
	// if($result){
	// 	echo "删除成功";

	// }else {
	// 	echo "删除失败";
	// }
	// $mysqli->close();
	//添加的
	// $mysqli = new mysqli("localhost","root","","food");
	// if($mysqli->connect_errno){
	// 	die($mysqli->connect_errno);

	// }
	// $mysqli->query("set names utf8");
	// $sql = "INSERT INTO kind(color) VALUES('red')";

	// $result = $mysqli->query($sql);
	// if($result){
	// 	echo "添加成功";

	// }else {
	// 	echo "添加失败";
	// }
	// $mysqli->close();
	//查
	$mysqli = new mysqli("localhost","root","","food");
	if($mysqli->connect_errno){
		die($mysqli->connect_errno);

	}
	$mysqli->query("set names utf8");
	$sql = "SELECT * FROM kind";
	$result = $mysqli->query($sql);
	if($result->num_rows){
		$data = $result->fetch_all(MYSQLI_ASSOC);
		echo json_encode($data);
	}

 ?>