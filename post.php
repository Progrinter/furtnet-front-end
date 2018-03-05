<?php
	session_start();
	include "cdb/config.php";

	$email = $_SESSION['logon'];
	$texto = $_POST['texto'];
	$date = date('Y-m-d H:i');

	$query = "INSERT INTO posts (user, privacidade, postagem,data) VALUES ('$email', 'publico','$texto', '$date')";
	mysqli_query($connection,$query);
	header('location:home.php');
?>