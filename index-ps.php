<?php include "head-login.php" ?>
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
    <ul id=erros style="color:#ff0000; list-style: none;"></ul>
    <form action="login.php" method="post" id="form">
    <div class="col-md-12">
        <label>Nome:</label>
        <input class="form-control" type="text" placeholder="Digite seu nome" name="nome" />
    </div>
    <div class="col-md-12">
        <label>Email:</label>
        <input class="form-control" type="text" placeholder="exemplo@exemplo.com" name="email" />
    </div>
    <div class="col-md-12">
        <label>Formação:</label>
        <input class="form-control" type="text" placeholder="Digite sua formação" name="formacao" />
    </div>
    <div class="col-md-12">
        <label>CRP:</label>
        <input class="form-control" type="text" placeholder="Digite seu CRP" name="crp" />
    </div>
    <div class="col-md-6">
        <label>Genero:</label>
        <select class="form-control" id=genero>
            <option value="Selecione">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>
    </div>
    <div class="col-md-6">
        <label>Nascimento:</label>
        <input type="Data" class="form-control" placeholder="__/__/____" name="data" />
    </div>
    <div class="col-md-12">
        <label>Senha:</label>
        <input class="form-control" type="password" placeholder="Digite sua senha" name="senha" />
    </div>
    <div class="col-md-12">
        <label>Confirme sua Senha:</label>
        <input class="form-control" type="password" placeholder="Digite novamente a senha" name="confsenha"/>
    </div>
    <br/>
    <div class="col-xs-12" style="height:50px;"></div>
    <center>
       <p><input type="submit" class="btn btn-primary btn-lg col-md-12" value="Cadastrar" id=enviaForm></p>
    </center>
    </form>
    
    <script src="Js/validacao-psico.js"></script>
    <?php include "footer-login.php" ?>