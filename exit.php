<?php
	include "cdb/config.php";
	session_start();
	$logon = $_SESSION['logon'];
	$tipo = $_SESSION['tipo'];
	$connection = mysqli_connect($host,$login,$pass,$db);

	if($tipo == "0") {
		$table = "usuario";
		mudaStatus($connection,$table,$logon);
	}

	if($tipo == "1") {
		$table = "psicologo";
		mudaStatus($connection,$table,$logon);
	}

	function mudaStatus($connection,$table,$logon){
		$query = "UPDATE $table set status='0' WHERE email='$logon'";
		mysqli_query($connection,$query);
		session_destroy();
		header("location:index.html");
	}
?>