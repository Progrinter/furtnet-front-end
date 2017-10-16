<?php
	session_start();

	if($_SESSION['logon'] || $_SESSION['0']) {
		include "templates/home-user.php";
	}

	if($_SESSION['logon'] || $_SESSION['1']) {
		include "templates/home-psico.php";
	}else{
		session_destroy();
		header("location:login.php");
	}