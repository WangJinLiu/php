<?php 
// 自己写的
	require("config/config.php");
	require("config/db.php");
	// $id = $_GET['id'];
	// var_dump($id);
	# 设置sql语句
	if(isset($_POST['submit'])){
		$id = $_POST['hid'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$body = $_POST['body'];
		#设置utf8编码
		mysqli_query($conn,"set names utf8");
		$query = "UPDATE posts SET title='$title',author='$author',body='$body' WHERE id='$id'";
		#执行语句
		$result = mysqli_query($conn,$query);
		if($result){
			header('location: index.php');

		}else{
			echo "数据更新失败".mysqli_error($conn);//拿到
		}
		#释放数据(可释放可不释放)
		mysqli_free_result($result);
		mysqli_close();
	}
	//直接去数据库里找,但是也要根据url上的id取值（直接在当前页面拿到id）
		$id = mysqli_real_escape_string($conn,$_GET['id']);//转义特殊字符，
		$query = "SELECT * FROM posts WHERE id={$id}";
		mysqli_query($conn,"set names utf8");
		#执行语句
		$result = mysqli_query($conn,$query);
		//mysqli_fetch_all 拿到的是一个二维数组,mysqli_fetch_assoc获取到的是一个一维数组
		$post = mysqli_fetch_assoc($result);
		// var_dump($post);
		#释放数据(可释放可不释放)
		mysqli_free_result($result);
		#断开连接
		mysqli_close($conn);
	
	






 ?>
<?php include("inc/header.php"); ?>
	<div class="container">
		<h1 class="text-muted">更改博客</h1>
		<br>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<label for="">标题</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
			</div>
			<div class="form-group">
				<label for="">作者</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author'] ?>">
			</div>
			<div class="form-group">
				<label for="">内容</label>
				<input  type="text" name="body" class="form-control" value="<?php echo $post['body'] ?>">
			</div>
			<input type="hidden" value="<?php echo $_GET['id'];?>" name="hid">
			<input type="submit" value="确定" name="submit" class="btn btn-primary">
		</form>
	</div>


<?php include("inc/footer.php"); ?>