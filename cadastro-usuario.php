<?php
	include "cdb/config.php";

	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
	$data = $_POST['data'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$connection = mysqli_connect($host, $login, $pass, $db);
	$select = "SELECT email FROM usuario WHERE email='$email'";

	//Select para procura de duplicidade
	$result = mysqli_query($connection,$select);
	$lista = mysqli_fetch_row($result);

	if($lista >= 1) {
		echo "<p>O email ja esta cadastrado</p>";
	}else{
		$query = "INSERT INTO usuario (nome, genero, data, email, senha, tipo) values ('$nome', '$genero', '$data', '$email', '$senha', '$tipo')";
		mysqli_query($connection,$query);
		header("Location:laudo.php");
	}
?>