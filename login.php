<?php
	include "cdb/config.php";
	$logon = $_POST['logon'];
	$password = $_POST['password'];
	$link = "location:home.php";
	$index = "location:index.html";

	$connection = mysqli_connect($host, $login, $pass, $db);
	$queryUser = "SELECT email, senha FROM usuario WHERE email='$logon' AND senha='$password'";
	$buscaUser = mysqli_query($connection,$queryUser);
	$resultUser = mysqli_fetch_row($buscaUser);

	$queryPsico = "SELECT email,senha FROM psicologo WHERE email='$logon' AND senha='$password'";
	$buscaPsico = mysqli_query($connection,$queryPsico);
	$resultPsico = mysqli_fetch_row($buscaPsico);

	if($resultUser >= 1) {
		session_start();
		$tipo = "0";
		$_SESSION['logon'] = $logon;
		$_SESSION['tipo'] = $tipo;
		$_SESSION['status'] = true;
		$table = "usuario";
		mudaStatus($connection,$table,$logon);
		header($link);
		echo "voce eh um usuario";
	}
	if($resultPsico >= 1) {
		session_start();
		$tipo = "1";
		$_SESSION['logon'] = $logon;
		$_SESSION['tipo'] = $tipo;
		$_SESSION['status'] = true;
		$table = "psicologo";
		mudaStatus($connection,$table,$logon);
		header($link);
		echo "voce eh um psicologo";
	}
	if($resultUser == 0 && $resultPsico == 0) {
		session_destroy();
		header($index);
	}
	function mudaStatus($connection,$table,$logon){
		$query = "UPDATE $table set status='1' WHERE email='$logon'";
		mysqli_query($connection,$query);
	}
?>