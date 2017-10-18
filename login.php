<?php
	include "cdb/config.php";
	$logon = $_POST['logon'];
	$password = $_POST['password'];
	$link = "location:home.php";

	$connection = mysqli_connect($host, $login, $pass, $db);
	$queryUser = "SELECT email, senha FROM usuario WHERE email='$logon' AND senha='$password'";
	$buscaUser = mysqli_query($connection,$queryUser);
	$resultUser = mysqli_fetch_row($buscaUser);

	$queryPsico = "SELECT email,senha FROM psicologo WHERE email='$logon' AND senha='$password'";
	$buscaPsico = mysqli_query($connection,$queryPsico);
	$resultPsico = mysqli_fetch_row($buscaPsico);

	if($resultUser >= 1) {
		$query = "SELECT tipo FROM usuario WHERE email='$logon' AND senha='$password'";
		$busca = mysqli_query($connection,$query);
		$resultado = mysqli_fetch_row($busca);
		foreach ($resultado as $key => $value) {
			$tipo = $value;
		}
		setcookie("Tipo",$tipo);
		setcookie("Logon",$logon);
		header($link);
	}
	if($resultPsico >= 1) {
		$query = "SELECT tipo FROM psicologo WHERE email='$logon' AND senha='$password'";
		$busca = mysqli_query($connection,$query);
		$resultado = mysqli_fetch_row($busca);
		foreach ($resultado as $key => $value) {
			$tipo = $value;
		}
		setcookie("Logon",$logon);
		setcookie("Tipo",$tipo);
		header($link);
	}

?>