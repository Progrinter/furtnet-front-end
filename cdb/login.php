<?php
	include "config.php";
	$email = $_POST['email'];
	$password = $_POST['password'];

	$connection = mysqli_connect($host, $login, $pass, $db);
	$select = "SELECT email from usuario where email='$email' AND senha='$password'";

	$busca = mysqli_query($connection,$select);
	$lista = mysqli_fetch_row($busca);

	if($lista > 1) {
		echo "<p>Usuario logado</p>";
	}else{
		echo "<p>Usuario nao encontrado</p>";
	}

?>