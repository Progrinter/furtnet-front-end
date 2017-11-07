<?php
    $logon = $_SESSION['logon'];
	$nome = $_SESSION['nome'];
	$genero = $_SESSION['genero'];
	$doutor = "Dr. " . $nome;
	$doutora = "Drª " . $nome;

	function Doctor($genero,$doutor,$doutora){
		if($genero == "Feminino") {
			echo $doutora;
		} 
		if($genero == "Masculino"){
			echo $doutor;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicional Psicólogo</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
	<meta charset="utf-8">
	<script type="text/javascript" src="style/bootstrap/js/bootstrap.js"></script>
    <link rel="shortcut icon" href="images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
</head>
<body>
	<div class="col-md-12" style="background-color:#2F9B8C">
        <div class="col-md-6">
            <a href="index.html"><img src="images\furtnet.jpg" style="width:15%"></img></a>
        </div>
    </div>
	<div class="col-md-12" style="background-color: #daf4d7; height: 100%; size: 100%;">
		<div class="col-md-4 fixed-left" style="background-color: white;">
    		<div class="text-center col-md-12" style="left: 0px;">
        		<img src="images/usr.png" alt="user" width="75" height="75" class="img-thumbnail" style="border-radius:100px;"></img>
        		<h3><?php Doctor($genero,$doutor,$doutora);?></h3>
      		</div>
    	</div>
    	<div class="col-md-1">
    	</div>
    	<form action="include-adicionais.php" method="post">
      		<div class="col-md-6 jumbotron container" style="background-color: white">
        		<div class="text-center">
        			<h3>Seja bem-vindo <?php Doctor($genero,$doutor,$doutora);?></h3>
          			<h3>Precisamos saber mais sobre você!</h3>
        		</div>
				<div class="col-md-6">
	          		<label>CPF:</label>
    	      		<input class="form-control" type="text" name="cpf" placeholder="CPF sem pontuação">
        		</div>
        		<div class="col-md-6">
          			<label>CRP:</label>
          			<input class="form-control" type="text" name="crp" placeholder="CRP sem pontuação">
        		</div>
        		<div class="col-md-10">
        			<label><?php Doctor($genero,$doutor,$doutora);?>, diga em que é formado:</label>
        			<input class="form-control" type="text" name="formacao" placeholder="Se for necessário, separe com vírgulas">
        		</div>
        		<div class="col-md-7">
        			<label>Em que instituição se formou?</label>
        			<input class="form-control" type="text" name="instituicao" placeholder="Digite a formação principal">
        		</div>
        		<div class="col-md-12">
        			<label>Possui cursos extra-curriculares? Diga-nos:</label>
        			<textarea class="form-control" cols="12" rows="3" placeholder="Separe com vírgulas, se for necessário" name="cursos"></textarea>
        		</div>
        		<div class="col-md-12">
        			<label>Expêriencias de trabalho:</label>
        			<textarea class="form-control" cols="12" rows="3" placeholder="Fique à vontade para descrever" name="experiencia"></textarea>
        		</div>
        		<div class="col-md-12">&nbsp;
        		</div>
        		<div class="col-md-12 text-center">
        			<input class="btn btn-primary button" type="submit" name="submit" value="Enviar Informações">
        		</div>
        	</div>
    	</form>
  	</div>
</body>
</html>