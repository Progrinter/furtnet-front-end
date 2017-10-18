<?php
	session_start();
	$logon = $_SESSION['logon'];
	$tipo = $_SESSION['tipo'];
	$statusLogin = $_SESSION['status'];
	if($statusLogin) {
		if ($tipo == "0") {
			include "templates/home-user.php";
		}
		if($tipo == "1") {
			include "templates/home-psico.php";
		}
	}else{
		session_destroy();
		header("location:index.html");
	}
	
?>