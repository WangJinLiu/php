<?php 
	//重新设置cookie
	setcookie("name0000","Franch",time() + 86400);
	//删除cookie
	// setcookie("name0000","dadfaef",time() - 3600);
	if (count($_COOKIE) > 0) {

		echo "一共有".count($_COOKIE)."个cookie数据";
	}else{
		echo "没有cookie";
	}
	if(isset($_COOKIE['name0000'])){
		echo "你的用户名：".$_COOKIE['name0000'];
	}else{
		echo "用户名不存在";
	}



 ?>