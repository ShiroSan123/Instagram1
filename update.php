<?php 
	$con = mysqli_connect('127.0.0.1','root','','Instagram');
	$txt = $_GET['txt'];
	$id = $_GET['id'];
	$img = $_GET['img'];
	mysqli_query($con,"UPDATE Posts SET text='{$txt}' , img='{$img}' WHERE id = '{$id}' ");

	header("Location: index.php"); 
 ?>