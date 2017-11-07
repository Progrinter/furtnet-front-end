<?php
	session_start();
	//as variaveis de sessão são chamadas para serem usadas no site
	$logon = $_SESSION['logon'];
	$tipo = $_SESSION['tipo'];
	$statusLogin = $_SESSION['status'];

	//condição de status para determinar o tipo de usuário
	//se o status for True e o tipo for 0 (usuário) é incluído o template de usuário
	if($statusLogin) {
		if ($tipo == "0") {
			include "templates/home-user.php";
		}
	// se o status for True e o tipo for 1 (psicólogo) é incluído o template de psicólogo
		if($tipo == "1") {
			include "templates/home-psico.php";
		}
		//se o status for false, a sessão é destruída e o usuário volta à página inicial
	}else{
		session_destroy();
		header("location:index.html");
	}
	
?>