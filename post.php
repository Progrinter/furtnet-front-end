<?php
	session_start();
	include "cdb/config.php";

	$email = $_SESSION['logon'];
	$texto = $_POST['texto'];

	$query = "INSERT INTO posts (user, privacidade, post) VALUES ('$email', 'publico','$texto')";
	mysqli_query($connection,$query);
	header('location:home.php');
?>