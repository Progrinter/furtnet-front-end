<?php
	include "cdb/config.php";
	$index = "location:index.html";

	if(!isset($_POST['logon']) && !isset($_POST['password'])){
		session_start();
		$logon = $_SESSION['logon'];
		$password = $_SESSION['password'];
		$resultUser = buscaUsuario($connection, $logon, $password);
		$resultPsico = buscaPsico($connection,$logon,$password);
		if($resultUser >= 1){
			entrada($connection,$logon,"usuario","0");
		}
		if($resultPsico >= 1){
			entrada($connection,$logon,"psicologo","1");
		}
		if($resultUser == 0 && $resultPsico == 0){
			session_destroy();
			header($index);
		}
	}else{
		session_start();
		$logon = $_POST['logon'];
		$password = $_POST['password'];
		$resultUser = buscaUsuario($connection,$logon,$password);
		$resultPsico = buscaPsico($connection,$logon,$password);
		if($resultUser >= 1) {
			entrada($connection,$logon,"usuario","0");
		}
		if($resultPsico >= 1) {
			entrada($connection,$logon,"psicologo","1");
		}
		if($resultUser == 0 && $resultPsico == 0) {
			session_destroy();
			header($index);
		}
	}

	function mudaStatus($connection,$table,$logon){
		$query = "UPDATE $table set status='1' WHERE email='$logon'";
		mysqli_query($connection,$query);
	}

	function buscaUsuario($connection,$logon,$password){
		$queryUser = "SELECT user_id,email, senha FROM usuario WHERE email='$logon' AND senha='$password'";
		$buscaUser = mysqli_query($connection,$queryUser);
		$resultUser = mysqli_fetch_row($buscaUser);
		return $resultUser;
	}

	function buscaPsico($connection,$logon,$password){
		$queryPsico = "SELECT psico_id,email,senha FROM psicologo WHERE email='$logon' AND senha='$password'";
		$buscaPsico = mysqli_query($connection,$queryPsico);
		$resultPsico = mysqli_fetch_row($buscaPsico);
		return $resultPsico;
	}

	function entrada($connection,$logon,$table,$tipo){
		session_start();
		//variaveis de sessão logon, tipo, status salvas para serem usadas
		$_SESSION['logon'] = $logon;
		$_SESSION['tipo'] = $tipo;
		$_SESSION['status'] = true;
		$home = "location:home.php";
		//chamada de função para mudar o status do usuário
		mudaStatus($connection,$table,$logon);
		//transferencia da página de login para a home
		header($home);
	}
?>