<?php 
	$con = mysqli_connect('127.0.0.1','root','','Instagram');
	mysqli_query($con, "DELETE FROM Posts WHERE id = '".$_GET['id']."'");

	header("Location: index.php"); 
 ?>