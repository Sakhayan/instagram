<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "insta");
	mysqli_query($connect, "DELETE FROM posts WHERE id = '{$_GET['id']}' ");
	header("location:index.php");
 ?>