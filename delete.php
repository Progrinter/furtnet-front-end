<?php
	include "cdb/config.php";

	session_start();
	$id = $_GET['id'];
	$tipo = $_SESSION['tipo'];
	$connection = mysqli_connect($host,$login,$pass,$db);

	if($tipo == "0"){
		$query = "DELETE FROM usuario WHERE user_id='$id'";
		deletar($connection,$id,$query);
	}

	if($tipo == "1"){
		$query = "DELETE FROM psicologo WHERE psico_id='$id'";
		deletar($connection,$id,$query);
	}

	function deletar($connection,$id,$query){
		$consulta = mysqli_query($connection,$query);
		session_destroy();
		header('location:index.html');
	}
	
?>