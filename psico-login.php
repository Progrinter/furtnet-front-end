<?php

    include "head.php";
    include "validacao.php";
    
    $valido = false;
    $erro = null;
    
    if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == true)
    {
        $erro = valida();
        
        if($erro == "")
        {
            $valido = true;
        }
    }
?>
    <h1>Seja Bem Vindo ao Furtnet!</h1>
    <h1>Crie a sua conta,você é:</h1>
        <div>
            <a href="psico-login.php"><button  class="btn btn-primary" >Psicólogo</button></a>
            <a href="index.php"><button  class="btn btn-primary" >Usuário</button></a>
        </div>
        <br/>
    </center>
</div>
<div class="col-md-3 jumbotron container" style="background-color: white;">
    <h2>Cadastre-se </h2>
    <h4>Cadastro para psicólogos</h4>
    <?php
    
        if($valido == true)
        {
            echo "Cadastro realidado com sucesso";
        }
        else
        {
            echo $erro;
    
    ?>
    <form action="?envio=true" method=POST>
        
    <div class="col-md-12">
        <label>Nome:</label>
        <input class="form-control" type="text" placeholder="Digite seu nome" id="nome" name="nome"
        <?php if(isset($_POST["nome"])) { echo "value='" . $_POST["nome"] . "'";} ?>
        />
    </div>
    
    <div class="col-md-12">
        <label>Email:</label>
        <input class="form-control" type="text" placeholder="exemplo@exemplo.com" id="email" name="email"
        <?php if(isset($_POST["email"])) { echo "value='" . $_POST["email"] . "'";} ?>
        />
    </div>
    
    <div class="col-md-12">
        <label>Formação:</label>
        <input class="form-control" type="text" placeholder="Digite sua formação" id="formação" name="formacao"
        <?php if(isset($_POST["formacao"])) { echo "value='" . $_POST["formacao"] . "'";} ?>
        />
    </div>
    
    <div class="col-md-12">
        <label>CRP:</label>
        <input class="form-control" type="text" placeholder="Digite seu CRP" id="crp" name="crp"
        <?php if(isset($_POST["crp"])) { echo "value='" . $_POST["crp"] . "'"; } ?>
        />
    </div>
    
    <div class="col-md-6">
        <label>Genero:</label>
        <select class="form-control" name="genero">
            <option value="Selecione">Selecione</option>
            
            <option value="Masculino"
            <?php if(isset($_POST["genero"]) && $_POST["genero"] == "Masculino") { echo "selected"; } ?>
            >Masculino</option>
            
            <option value="Feminino"
            <?php if(isset($_POST["genero"]) && $_POST["genero"] == "Feminino") { echo "selected"; }?>
            >Feminino</option>
            
            <option value="Outro"
            <?php if(isset($_POST["genero"]) && $_POST["genero"] == "Outro") { echo "selected"; }?>
            >Outro</option>
        </select>
    </div>
    
    <div class="col-md-6">
        <label>Nascimento:</label>
        <input type="Data" class="form-control" placeholder="__/__/____" name="data"
        <?php if(isset($_POST["data"])) { echo "value='" . $_POST["data"] . "'";}?>
        />
    </div>
    
    <div class="col-md-12">
        <label>Senha:</label>
        <input class="form-control" type="password" placeholder="Digite sua senha" id="senha" name="senha"/>
    </div>
    
    <div class="col-md-12">
        <label>Confirme sua Senha:</label>
        <input class="form-control" type="password" placeholder="Digite novamente a senha" name="confirma"/>
    </div>
    
    <br/>
    <div class="col-xs-12" style="height:50px;"></div>
    <center>
       <p><input type="submit" class="btn btn-primary btn-lg col-md-12" value="Cadastrar"></p>
    </center>
    </form>
<?php
        
        }
    
    include "footer.php"

?>