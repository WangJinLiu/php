<?php 

	
	$loggedIn = false;
	$names = ["Henry","Bucky","Emily"];
	/*
	if($loggedIn){
		echo "U r Loffed In"."<hr>";

	}else{
		echo "U r NOT Logged In"."<hr>";
	}
	#三目运算符
	echo ($loggedIn)?"U r Loffed In <hr>":"U r NOT Logged In <hr>";
	#简写得到 true 或 false
	$isRegistered = ($loggedIn == true)? true:false;
	echo $isRegistered;//1

	#三目嵌套
	$age = 18;
	$score = 80;
	echo "You score is".($score > 70 ? ($age < 20 ? "优秀":"一般"): ($age < 20 ? "一般" :"差等"));//优秀
	*/







 ?>
 <!-- HTML + php 嵌套语法糖 -->
 <div>
 	<?php if($loggedIn){?>
 	<p>Welcome to Beijing!</p>
 	<?php }else{ ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php } ?>
 </div>
 <!-- 优化 -->
 <div>
 	<?php if($loggedIn):?>
 	<p>Welcome to Beijing!</p>
 	<?php else: ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php endif; ?>
 </div>
 <!-- 遍历数组  foreach-->
<div>
	<?php foreach($names as $val): ?>
	<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div>

<!-- 遍历数组 for -->
<div>
	<?php for($i = 0;$i<count($names);$i++): ?>
		<p><?php echo $names[$i]; ?></p>
	<?php endfor; ?>
</div>

