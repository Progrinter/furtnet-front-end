<?php
	include "cdb/config.php";
	include "cdb/dados.php";

	define("ADICIONAIS","location:adicionais.php");
	$connection = mysqli_connect($host, $login, $pass, $db);
	$selectUser = "SELECT email FROM usuario WHERE email='$email'";
	$selectPsi = "SELECT email FROM psicologo WHERE email='$email'";
	
	if($tipo == "0") {
		$table = "usuario";
		$select = $selectUser;
		$result = mysqli_query($connection,$select);
		$lista = mysqli_fetch_row($result);
		insereCadastro($connection,$select,$table,$lista,$nome,$genero,$data,$email,$senha,$tipo);
	}
	if($tipo == "1") {
		$table = "psicologo";
		$select = $selectPsi;
		$result = mysqli_query($connection,$select);
		$lista = mysqli_fetch_row($result);
		insereCadastro($connection,$select,$table,$lista,$nome,$genero,$data,$email,$senha,$tipo);
	}

	function insereCadastro($connection,$select,$table,$lista,$nome,$genero,$data,$email,$senha,$tipo) {
		if($lista >= 1) {
			echo "<h3>O cadastro já existe!</p>";
		}else{
			$query = "INSERT into $table (nome, genero, data, email, senha, tipo) values ('$nome', '$genero', '$data', '$email', '$senha', '$tipo')";
			mysqli_query($connection,$query);
			session_start();
			$_SESSION['logon'] = $email;
			$_SESSION['status'] = "logado";
			$_SESSION['nome'] = $nome;
			$_SESSION['tipo'] = $tipo;
			$_SESSION['genero'] = $genero;
			header(ADICIONAIS);
		}
	}
?>