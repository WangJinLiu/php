<?php 
	if(isset($_POST['submit'])){
		require("config/config.php");
		require("config/db.php");
		#获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);
		if(!empty($title) && !empty($author) && !empty($body)){
			$query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";
			#设置utf8编码
			mysqli_query($conn,"set names utf8");
			$result = mysqli_query($conn,$query);
			if($result){
				header('location: index.php');


			}else{
				echo "数据插入失败".mysqli_error($conn);//拿到
			}
		}
		#释放数据(可释放可不释放)
		mysqli_free_result($result);
		mysqli_close();

	}


 ?>

<?php include("inc/header.php"); ?>
	<div class="container">
		<h1 class="text-muted">添加博客</h1>
		<br>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<label for="">标题</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="">作者</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label for="">内容</label>
				<input type="text" name="body" class="form-control">
			</div>
			<input type="submit" value="添加" name="submit" class="btn btn-primary">
		</form>
	</div>


<?php include("inc/footer.php"); ?>
