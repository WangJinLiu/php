<?php 
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['success']);
	header('location: index.php');



 ?>