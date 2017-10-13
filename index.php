<html>
    <head>
        <title>Furtnet</title>
        <link rel="shortcut icon" href="images/favicon.jpg">
        <link rel="stylesheet" type="text/css" href="style\bootstrap\css\bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style\bootstrap\css\bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style/estilo.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <div class="col-md-12" style="background-color:#2F9B8C">
        <div class="col-md-6">
            <img src="images\furtnet.jpg" style="width:15%"></img>
        </div>
        <div class="col-md-6">
            <form class="navbar-form navbar-right" action="cdb/login.php" method="post">
                <label style="color: white;">Acesse sua conta:</label>
                <input class="form-control" type="text" placeholder="E-mail" name="email" />
                <input class="form-control" type="password" placeholder="Senha" name="password" />
                <input type="submit" value="Acessar" class="btn btn-primary button"/>
            </form>
        </div>
    </div>
    <div class="col-md-12 content-index">
        <div class="col-xs-12" style="height:30px;"></div>
            <div class="col-md-8">
                <center style="color:#000;">
                    <h1>Seja Bem Vindo ao Furtnet!</h1>
                    <h2>Entre com seu Login!</h2>
                    <h2>Ainda não tem conta? Faça o seu cadastro</h2>
                </center>
            </div>
        <div class="col-md-3 jumbotron container" align="left" style="background-color: white;">
            <div class="col-md-12">
                <h3>Tipo de acesso:</h3>
            </div>
            <div class="col-md-4 seletor" align="center">
                <label for="usuario">Usuário</label>
                <input type="radio" name="tipo" value="0" id="usuario">
            </div>

            <div class="col-md-3"></div>

            <div class="col-md-4 seletor" align="center">
                <label for="psicologo">Psicólogo</label>
                <input type="radio" name="tipo" value="1" id="psicologo">
            </div>
            <ul id=erros style="color:#ff0000; list-style: none;"></ul>
            <form action="cadastro-usuario.php" method="post" id="form">
                <h3>Cadastre-se</h3>
                <div class="col-md-12">
                    <label>Nome:</label>
                    <input class="form-control" type="text" placeholder="Digite seu nome" name="nome" />
                </div>
                <div class="col-md-12">
                    <label>Email:</label>
                    <input class="form-control" type="email" placeholder="exemplo@exemplo.com" id="email" name="email" />
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
                    <label>Senha:</label>
                    <input class="form-control" type="password" placeholder="Digite sua senha" id="senha" name="senha" />
                </div>
                <div class="col-md-12">
                    <label>Confirme:</label>
                    <input class="form-control" type="password" placeholder="Digite novamente a senha" name="confirma"/>
                </div>
                <div class="col-md-12"></div>
                <div class="col-xs-12" style="height:50px;">
                    <p><input type="submit" class="btn btn-primary btn-lg col-md-12 button" value="Cadastrar" id="enviaForm"></p>
                </div>
            </form>

        </div>
    </div>
    <!--<script src="scripts/validacao.js"></script>-->
</body>
</html>