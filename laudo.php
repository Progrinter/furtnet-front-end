<?php include "user-head.php"; ?>
<div class="col-md-12" style="background-color:#daf4d7">
    <div class="text-center col-md-12" style="height: auto; width: auto; left: 0px;">
      	<img src="images/usr.png" alt="user" width="75" height="75" class="img-thumbnail" style="border-radius:100px;"></img>
       	<div class="text-center col-md-12">
       		<h4><?php echo $nome; ?></h4>
       	</div>
    </div>
    <!-- Início do formulário -->
    <form action="laudo.php" method="post">
    <div class="col-md-6 jumbotron container">
      	<div class="text-center">
       		<h3>Precisamos conhecê-lo um pouco mais</h3>
       	</div>
       	<div class="col-md-6">
       		<label>Uso de medicamento contínuo:</label>
       		<select class="form-control" id="medicamento-continuo">
       			<option selected="selected">Selecione</option><div>errado</div>
       			<option>Sim</option>
       			<option>Não</option>
       		</select>
       	</div>
       	<div class="col-md-12">
       		<label>Nome do(s) remédio(s)</label>
       		<input class="form-control" type="text" id="remedios" placeholder="Separe com vírgulas">
       	</div>
    </div>
    </form>
        <!-- Fim do formulário -->
</div>
</html>