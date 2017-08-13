<?php include "config.php";
	$database = mysqli_connect($host, $login, $pass);
	$base = mysqli_select_db($db);

	$search = mysqli_query ("SELECT * FROM * `$table` WHERE `login` = '$login'", $database);
	$validaLogin = mysqli_num_rows ($search);

	if ($validaLogin == 1) {
		$errors .= "Login escolhido já está em uso<br>";
	}

	if ($error == "") {
		mysqli_query("INSERT INTO `$table` (nome, cpf, genero, data, email, senha");
        VALUES ('$nome','$cpf','$genero','$data','$email','$senha');
	}
?>