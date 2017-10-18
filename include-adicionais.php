<?php
	include "cdb/config.php";

	$tipo = $_COOKIE['Tipo'];

	if ($tipo == "0") {
		include "cdb/adicional-user.php";
		$connection = mysqli_connect($host,$login,$pass,$db);
		$query = "UPDATE usuario SET cpf='$cpf', medicamento='$medicamento', nomes_remedios='$nomes_remedios', consulta='$consulta', sintomas='$sintomas', status = '1' WHERE email='$email'";
		mysqli_query($connection,$query);
		header("location:home.php");
	}
	if ($tipo == "1") {
		include "cdb/adicional-psico.php";
		$connection = mysqli_connect($host,$login,$pass,$db);
		$query = "UPDATE psicologo SET cpf='$cpf', crp='$crp', formacao='$formacao', instituicao='$instituicao', cursos='$cursos', experiencia='$experiencia', status='1' WHERE email='$email'";

		mysqli_query($connection,$query);

		header("location:home.php");
	}
?>