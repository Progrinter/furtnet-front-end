<?php
	include "cdb/config.php";

	$logon = $_SESSION['logon'];
	$post = $_SESSION['post'];
	$connection = mysqli_connect($host,$login,$pass,$db);
	
	$query = "SELECT id FROM usuario WHERE email='$logon'";
	$busca = mysqli_query($connection,$busca);
	$resultado = mysqli_fetch_row($busca);

	$id = $resultado[0];

	$postagem = "UPDATE postagem SET post='$post' WHERE id='$id'";
	$insere = mysqli_query($connection,$postagem);
	header("location:home.php");
?>