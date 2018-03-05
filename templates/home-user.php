<?php
	include "cdb/config.php";

	$logon = $_SESSION['logon'];
	
	$connection = mysqli_connect($host,$login,$pass,$db);
	$query = "SELECT nome,user_id FROM usuario WHERE email='$logon'";
	$busca = mysqli_query($connection,$query);
	$lista = mysqli_fetch_assoc($busca);

	$nome = $lista['nome'];
	$id = $lista['user_id'];
	$_SESSION['id'] = $id;
	$_SESSION['nome'] = $nome;

	$perfil = "<a href=perfil.php?id=$id><h3>$nome</h3></a>";

  
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
        		<?php echo $perfil ?>
      		</div>
      		<div class="col-md-12 text-center perfil">
      			<div class="col-md-12">
      				<a href="configuracoes.php"><h4>Configurações</h4></a>
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
      				<a href="#"><h4>Amigos</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="#"><h4>Psicólogos</h4></a>
      			</div>
      			<div class="col-md-12">
      				<a href="exit.php"><h4>Sair</h4></a>
      			</div>
      		</div>
		</div>
		<div class="col-md-6" style="background-color: white">
			<div class="col-md-6">&nbsp;</div>
			<div class="col-md-12" style="border-bottom: 1px solid #2F9B8C; border-top: 1px solid #2F9B8C;">
				<form action="post.php" method="post">
					<div class="col-md-6">&nbsp;</div>
					<div class="col-md-9">
						<label>Como você está se sentindo:</label>
						<textarea class="form-control" rows="5" cols="12" name="texto" placeholder="Diga, como está?"></textarea>
					</div>
					<div class="col-md-9">&nbsp;</div>
					<div class="col-md-6">
						<input class="btn btn-primary" type="submit" value="Postar">
					</div>
					<div class="col-md-9">&nbsp;</div>
				</form>
			</div>
        <?php
        //postagens
        $queryPostagem = "SELECT id, postagem, data FROM posts WHERE user='$logon' ORDER BY data DESC";
        $executaBusca = mysqli_query($connection,$queryPostagem);
        while($rowBusca = mysqli_fetch_array($executaBusca)){
          //echo $rowBusca['postagem'] . "<br>";
          $data = $rowBusca['data'];
          $postagem = $rowBusca['postagem'];
          $post = $rowBusca['id'];
          echo '
            <div class="col-md-12" style="border-bottom: 1px solid #2F9B8C; border-bottom: 1px solid #2F9B8C;">
              <div class="col-md-9">
                <h5>' . $nome . '</h5>
                <p>' . $data . '</p>
                <h4>' . $postagem . '</h4>
                <a href=delete.php?id='.$post.'><h8>Excluir</h8></a>
              </div>
            </div>
          ';
        }
      ?>
		</div>
		<div class="col-md-3" style="background-color: #daf4d7">
			&nbsp;<br>
			&nbsp;<br>
			&nbsp;<br>
		</div>
	</div>
  
</body>
</html>