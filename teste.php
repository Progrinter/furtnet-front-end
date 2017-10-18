<?php
	include "cdb/config.php";

	$connection = mysqli_connect($host,$login,$pass,$db);
	$query = "SELECT user_id,nome,email FROM usuario WHERE email='paulohenriquepaiva@ymail.com'";
	$resultado = mysqli_query($connection,$query);
	$lista = mysqli_fetch_row($resultado);

	$id = $lista[0];
	$nome = $lista[1];
	$email = $lista[2];

	echo $id . "<br>" . $nome . "<br>" . $email;
?>