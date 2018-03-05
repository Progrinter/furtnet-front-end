<?php
	include "cdb/config.php";

	session_start();
	$id = $_GET['id'];
	$tipo = $_SESSION['tipo'];
	$email = $_SESSION['logon'];
	$connection = mysqli_connect($host,$login,$pass,$db);

	if($tipo == "0"){
		$query = "DELETE FROM usuario WHERE user_id='$id'";
		delPosts($connection,$email);
		deletar($connection,$id,$query);
	}

	if($tipo == "1"){
		$query = "DELETE FROM psicologo WHERE psico_id='$id'";
		delPosts($connection,$email);
		deletar($connection,$id,$query);
	}

	function deletar($connection,$id,$query){
		$consulta = mysqli_query($connection,$query);
		session_destroy();
		header('location:index.html');
	}

	function delPosts($connection,$email) {
		$delete = "DELETE FROM posts WHERE user='$email'";
		$excluir = mysqli_query($connection, $delete);
	}
	
?>