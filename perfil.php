<?php
	include "cdb/config.php";

	$id = $_GET['id'];

	$connection = mysqli_connect($host,$login,$pass,$db);
	$query = "SELECT email,cpf FROM usuario WHERE user_id='$id'";
	$busca = mysqli_query($connection,$query);
	$resultado = mysqli_fetch_row($busca);

	if($resultado >= 1){
		include "templates/perfil-user.php";
	}else{
		header('location:home.php');
	}
?>