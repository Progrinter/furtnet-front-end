<?php
	session_start();
	include "cdb/config.php";
	include "cdb/dados-login.php";

	$connection = mysqli_connect($host, $login, $pass, $db);
	$selectUser = "SELECT email from usuario where email='$loginUser' AND senha='$password'";
	$selectPsi = "SELECT email from psicologo where email='$loginUser' AND senha='$password'";

	$buscaUser = mysqli_query($connection,$selectUser);
	$listaUser = mysqli_fetch_row($buscaUser);

	$buscaPsico = mysqli_query($connection,$selectPsi);
	$listaPsico = mysqli_fetch_row($buscaPsico);

	if($listaUser > 1) {
		$_SESSION["0"];
		$_SESSION["logon"];
		header("location:home.php");
	}
	if($listaPsico > 1) {
		$_SESSION["1"];
		$_SESSION["logon"];
		header("location:home.php");
	}else{
		session_destroy();
	}
?>