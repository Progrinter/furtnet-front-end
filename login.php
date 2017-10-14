<?php
	include "cdb/config.php";
	include "cdb/dados.php";

	$connection = mysqli_connect($host, $login, $pass, $db);
	$selectUser = "SELECT email from usuario where email='$email' AND senha='$password'";
	$selectPsi = "SELECT email from psicologo where email='$email' AND senha='$password'";

	$busca = mysqli_query($connection,$select);
	$lista = mysqli_fetch_row($busca);

	if($lista > 1) {
		buscaTipo($connection,$email);
	}else{
		echo "<p>Usuario nao encontrado</p>";
	}

	function buscaTipo($connection,$email) {
		$buscaUser = "SELECT tipo from usuario where email='$email'";
		$listaUser = mysqli_query($connection,$buscaUser);
		$resultado = mysqli_fetch_row($listaUser);
		
		if($resultado == "0") {
			header("location:perfil-usuario.php");
		}
		if($resultado == "1") {
			header("location:perfil-usuario.php");
		}
	}
?>