<?php
	$tipo = $_COOKIE['Tipo'];

	if ($tipo == "0") {
		include "templates/home-user.php";
	}
	if($tipo == "1") {
		include "templates/home-psico.php";
	}
?>