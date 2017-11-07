<?php
	include "cdb/config.php";

	$logon = $_POST['logon'];
	$password = $_POST['password'];
	$link = "location:home.php";
	$index = "location:index.html";

	$connection = mysqli_connect($host, $login, $pass, $db);
	$queryUser = "SELECT user_id,email, senha FROM usuario WHERE email='$logon' AND senha='$password'";
	$buscaUser = mysqli_query($connection,$queryUser);
	$resultUser = mysqli_fetch_row($buscaUser);

	$queryPsico = "SELECT psico_id,email,senha FROM psicologo WHERE email='$logon' AND senha='$password'";
	$buscaPsico = mysqli_query($connection,$queryPsico);
	$resultPsico = mysqli_fetch_row($buscaPsico);

	//condição caso a query ache um cadastro na tabela de usuários
	if($resultUser >= 1) {
		session_start();
		$tipo = "0";
		//variaveis de sessão logon, tipo, status salvas para serem usadas
		$_SESSION['logon'] = $logon;
		$_SESSION['tipo'] = $tipo;
		$_SESSION['status'] = true;
		$table = "usuario";
		//chamada de função para mudar o status do usuário
		mudaStatus($connection,$table,$logon);
		//transferencia da página de login para a home
		header($link);
	}
	//condição caso a query ache um cadastro na tabela de psicólogos
	if($resultPsico >= 1) {
		session_start();
		$tipo = "1";
		//variaveis de sessão logon, tipo, status salvas para serem usadas
		$_SESSION['logon'] = $logon;
		$_SESSION['tipo'] = $tipo;
		$_SESSION['status'] = true;
		$table = "psicologo";
		//chamada de função para mudar o status do psicologo no sistema
		mudaStatus($connection,$table,$logon);
		//transferencia da página de login para a home
		header($link);
	}
	//se o resultado das consultas for 0 a sessão é finalizada e o usuário volta à tela inicial
	if($resultUser == 0 && $resultPsico == 0) {
		session_destroy();
		header($index);
	}
	//a função pega os dados da conexão, tabela e o email de login e muda o status do usuario de 0 (offline) para 1 (online)
	function mudaStatus($connection,$table,$logon){
		$query = "UPDATE $table set status='1' WHERE email='$logon'";
		mysqli_query($connection,$query);
	}
?>