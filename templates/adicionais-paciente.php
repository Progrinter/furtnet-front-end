<?php
	$nome = $_COOKIE['Nome'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicional Paciente</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
	<meta charset="utf-8">
	<script type="text/javascript" src="style/bootstrap/js/bootstrap.js"></script>
    <link rel="shortcut icon" href="images/favicon.jpg">
</head>
<body>
	<div class="col-md-12" style="background-color:#2F9B8C">
        <div class="col-md-6">
            <a href="index.html"><img src="images\furtnet.jpg" style="width:15%"></img></a>
        </div>
    </div>
	<div class="col-md-12" style="background-color: #daf4d7; height: 100%; size: 100%">
		<div class="col-md-4">
    		<div class="text-center col-md-12" style="left: 0px;">
        		<img src="images/usr.png" alt="user" width="75" height="75" class="img-thumbnail" style="border-radius:100px;"></img>
        		<h3><?php echo $nome ?></h3>
      		</div>
    	</div>
    	<form action="include-adicionais.php" method="post">
      		<div class="col-md-6 jumbotron container">
        		<div class="text-center">
        			<h2>Seja bem-vindo <?php echo $nome ?>!</h2>
          			<h3>Precisamos conhecê-lo um pouco mais!</h3>
        		</div>
				<div class="col-md-6">
	          		<label>CPF:</label>
    	      		<input class="form-control" type="text" name="cpf" placeholder="CPF sem pontuação">
        		</div>
        		<div class="col-md-6">
          			<label>Utiliza medicamento contínuo?</label>
          			<select class="form-control" name="medicamento">
          				<option>Selecione</option>
          				<option value="sim">Sim</option>
          				<option value="nao">Não</option>
          			</select>
        		</div>
        		<div class="col-md-12">
        			<label>Em caso afirmativo, digite o nome dos medicamentos:</label>
        			<input class="form-control" type="text" name="nomes_remedios" placeholder="Separe com vírgulas">
        		</div>
        		<div class="col-md-7">
        			<label>Já passou por alguma consulta psiquiátrica?</label>
        			<select class="form-control" name="consulta">
        				<option>Selecione</option>
        				<option value="Sim">Sim</option>
        				<option value="Nao">Não</option>
        			</select>
        		</div>
        		<div class="col-md-12">
        			<label>Tente nos dizer como se sente, o que está sentindo</label>
        			<textarea class="form-control" rows="5" cols="12" name="sintomas"></textarea>
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