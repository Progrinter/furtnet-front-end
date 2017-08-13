<?php
	include "cdb/config.php";
	include "cdb/dados-user.php";

	$connection = mysqli_connect($host, $login, $pass, $db);
	$query = "INSERT into usuario (nome, cpf, genero, data, email, senha) values ('{$nome}', '{$cpf}', '{$genero}', '{$data}', '{$email}', '{$senha}')";

	mysqli_query($connection,$query);

	header("Location:laudo.php");	
?>