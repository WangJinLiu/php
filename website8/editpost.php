
<?php 
		require("config/config.php");
		require("config/db.php");
		mysqli_query($conn,"set names utf8");
		// $id = $_GET['id'];(从别的页面跳转过来的时候才能拿到id值)
		#编辑博客
		if(isset($_POST['submit'])){
			#获取input中的数据
			$title = mysqli_real_escape_string($conn,$_POST['title']);
			$author = mysqli_real_escape_string($conn,$_POST['author']);
			$body = mysqli_real_escape_string($conn,$_POST['body']);
			$update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
			if(!empty($title) && !empty($author) && !empty($body)){
				$query = "UPDATE posts SET title='$title',author='$author',body='$body' WHERE id='$update_id'";
				#设置utf8编码
				mysqli_query($conn,"set names utf8");
				$result = mysqli_query($conn,$query);
				if($result){
					header('location: index.php');


				}else{
					echo "更新失败".mysqli_error($conn);//拿到
				}

			}

		}
		//直接去数据库里找,但是也要根据url上的id取值（直接在当前页面拿到id）
		$id = mysqli_real_escape_string($conn,$_GET['id']);//转义特殊字符，
		$query = "SELECT * FROM posts WHERE id={$id}";
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
		<h1 class="text-muted">编辑博客</h1>
		<br>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<label for="">标题</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
			</div>
			<div class="form-group">
				<label for="">作者</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
			</div>
			<div class="form-group">
				<label for="">内容</label>
				<input type="text" name="body" class="form-control" value="<?php echo $post['body']; ?>">
			</div>
			<input type="hidden" value="<?php echo $post['id']; ?>" name="update_id">
			<input type="submit" value="确认" name="submit" class="btn btn-primary">
		</form>
	</div>


<?php include("inc/footer.php"); ?>
