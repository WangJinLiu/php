<!-- 页面一 -->
<?php 
	/*面向过程的方法*/
	require("config/config.php");

	require("config/db.php");
	#设置utf8编码
	mysqli_query($conn,"set names utf8");
	# 设置sql语句(order bt desc 降序排序)
	$query = "SELECT * FROM posts ORDER BY created_at DESC";
	#执行语句
	$result = mysqli_query($conn,$query);
	# 获取数据
	$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// print_r($posts);
	#释放数据(可释放可不释放)
	mysqli_free_result($result);
	#断开连接
	mysqli_close($conn);
?>
<?php include("inc/header.php"); ?>
	<div class="container">
		<h1>博客总览</h1>
		<?php foreach($posts as $post): ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<p>
					<strong>作者：</strong>
					<?php echo $post['author']; ?>
				</p>
				<p>
					<strong>时间：</strong>
					<?php echo $post['created_at']; ?>
				</p>
				<p>
					<strong>内容：</strong>
					<?php echo $post['body']; ?>
				</p>
				<!-- 给一个标识，用ID -->
				<a class="btn btn-primary" href="post.php?id=<?php echo $post['id']; ?>">博客详情</a>
				<!-- 底下是自己加的 -->
				<a href="delpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">删除</a>
				<a href="uppost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">更新</a>

			</div>
		<?php endforeach; ?>
	</div>
<?php include("inc/footer.php"); ?>