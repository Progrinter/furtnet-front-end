<?php include "head-login.php" ?>
<h1>Seja Bem Vindo ao Furtnet!</h1>
<h1>Crie a sua conta,você é:</h1>
        <div>
            <a href="index-ps.php"><button  class="btn btn-primary"  >Psicólogo</button></a>
            <a href="index.php"><button  class="btn btn-primary" >Usuário</button></a>
        </div>
        <br/>
    </center>
</div>
<div class="col-md-3 jumbotron container" style="text-align: left; background-color: white;">
    <h2>Cadastre-se</h2>
    <h4>Cadastro para usuários</h4>
    <ul id=erros style="color:#ff0000; list-style: none;"></ul>
    <form action="cdb/cadastro.php" method="post" id="form">
    <div class="col-md-12">
        <label>Nome:</label>
        <input class="form-control" type="text" placeholder="Digite seu nome" name="nome" />
    </div>
    <div class="col-md-12">
        <label>CPF</label>
        <input class="form-control" type="text" placeholder="Digite seu CPF sem pontos" id="cpf" name="cpf">
    </div>
    <div class="col-md-6">
        <label>Genero:</label>
        <select class="form-control" id="genero" name="genero">
            <option value="Selecione">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>
    </div>
    <div class="col-md-6">
        <label>Nascimento:</label>
        <input type="Data" class="form-control" placeholder="__/__/____" id="data" name="data" />
    </div>
    <div class="col-md-12">
        <label>Email:</label>
        <input class="form-control" type="email" placeholder="exemplo@exemplo.com" id="email" name="email" />
    </div>
    <div class="col-md-12">
        <label>Senha:</label>
        <input class="form-control" type="password" placeholder="Digite sua senha" id="senha" name="senha" />
    </div>
    <div class="col-md-12">
        <label>Confirme:</label>
        <input class="form-control" type="password" placeholder="Digite novamente a senha" name="confirma"/>
    </div>
    <div class="col-xs-12" style="height:50px;"></div>
    <p><input type="submit" class="btn btn-primary btn-lg col-md-12" value="Cadastrar" id=enviaForm></p>
    </form>
    
    <script src="Js/validacao.js"></script>
<?php include "footer-login.php" ?>