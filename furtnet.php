<?php
	
	function mudaStatus($connection,$table,$logon){
		$query = "UPDATE $table set status='1' WHERE email='$logon'";
		mysqli_query($connection,$query);
	}

	function buscaUsuario($connection,$logon, $password){
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

	function busca($connection,$logon,$password,$tipo,$tabela){
		$query = "SELECT '$tipo',email,senha FROM '$tipo' WHERE email='$logon' AND senha='$password'";
		$busca = mysqli_query($connection,$query);
		$resultado = mysqli_fetch_row($busca);
		return $resultado;
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