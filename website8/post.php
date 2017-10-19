<!-- 查看详情第二个页面 -->
<?php 
	require("config/config.php");
	require("config/db.php");
	#查询删除博客
	//点击删除之后会重新刷新页面，url中的id就取不到了所以在底下写了一个隐藏的input，把刷新前的id传过来
	if(isset($_POST['delete'])){
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		var_dump($delete_id);
		#写sql语句
		$query = "DELETE FROM posts WHERE id='$delete_id'";
		if(mysqli_query($conn,$query)){
			// header("location: index.php");

		}else{
			echo "error".mysqli_error($conn);
		}

	}
	#设置utf8编码
	mysqli_query($conn,"set names utf8");
	// $id = $_GET['id'];(从别的页面跳转过来的时候才能拿到id值)
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
		<h1>博客详情</h1>
			<div class="well">

				<h3><?php echo $post['title']; ?></h3>
					<p>
						<strong>ID:</strong>
						<?php echo $post['id']; ?>
					</p>
				<p>
					<strong>作者：</strong>
					<?php echo $post['author']; ?>
				</p>
				
				<p>
					<strong>内容：</strong>
					<?php echo $post['body']; ?>
				</p>
				<p>
					<strong>时间：</strong>
					<?php echo $post['created_at']; ?>
				</p>
				<br>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="pull-right">
					<input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
					<input type="submit" name="delete" value="删除" class="btn btn-danger">
				</form>
				<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">编辑</a>

				
			</div>
			<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">返回主页</a>
	</div>
<?php include("inc/footer.php"); ?>
