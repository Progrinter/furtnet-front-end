<?php
	include "cdb/config.php";
	session_start();

	$id = $_GET['id'];
	$email = $_SESSION['logon'];

	$query = "DELETE FROM posts WHERE user='$email' AND id='$id'";
	mysqli_query($connection,$query);
	header('location:home.php');
?>