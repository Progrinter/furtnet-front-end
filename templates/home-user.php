<?php
	include "cdb/config.php";

	$connection = mysqli_connect($host,$login,$pass,$db);
	$query = "SELECT nome,id FROM usuario WHERE email='$logon'";
	$busca = mysqli_query($connection,$query);
	$lista = mysqli_fetch_row($busca);

	$nome = $lista[0];
	$id = $lista[1];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Furtnet</title>
	<link rel="shortcut icon" href="images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/perfil.css">
</head>
<body>
	<div class="col-md-12" style="background-color:#2F9B8C">
        <div class="col-md-6">
            <a href="home.php"><img src="images\furtnet.jpg" style="width:15%"></img></a>
        </div>
        <div class="cold-md-4">&nbsp;</div>
        <div class="cold-md-2 text-right">
        	<a href="exit.php" style="color: white"><h4>Sair</h4></a>
        </div>
    </div>
	<div class="content" style="background-color: #daf4d7; size: 100%;">
		<div class="col-md-3" style="background-color: #daf4d7">
    		<div class="text-center col-md-12">
        		<img src="images/usr.png" alt="user" width="75" height="75" class="img-thumbnail" style="border-radius:100px;"></img>
        		<h3><?php echo $nome ?></h3>
      		</div>
      		<div class="col-md-12 text-center perfil">
      			<div class="col-md-12">
      				<a href="#"><h4>Minhas Postagens</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Configurações</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Consultas</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Comunidades</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Discussões</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Avaliações</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Chat - Amigos</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Chat - Psicólogos</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="exit.php"><h4>Sair</h4></a>
      			</div>
      		</div>
		</div>
		<div class="col-md-6" style="background-color: white">
			<div class="col-md-6">&nbsp;</div>
			<div class="col-md-12" style="border-bottom: 1px solid #2F9B8C; border-top: 1px solid #2F9B8C;">
				<form action="post.php">
					<div class="col-md-6">&nbsp;</div>
					<div class="col-md-9">
						<label>Como você está se sentindo:</label>
						<textarea class="form-control" rows="5" cols="12" name="posts"></textarea>
					</div>
					<div class="col-md-9">&nbsp;</div>
					<div class="col-md-6">
						<input class="btn btn-primary" type="submit" value="Postar">
					</div>
					<div class="col-md-9">&nbsp;</div>
				</form>
			</div>
			<!--<?php/*
				$query = "SELECT post FROM postagens WHERE id='$id'";
				$busca = mysqli_query($connection,$query);
				$posts = mysqli_fetch_row($busca);

				foreach ($posts as $key => $value) {
					echo 
						"<div class=col-md-6>
							<h3>" . $value . "</h3>"
				}
			*/?>-->
		</div>
		<div class="col-md-3" style="background-color: #daf4d7">
			&nbsp;<br>
			&nbsp;<br>
			&nbsp;<br>
		</div>
	</div>
</body>
</html>