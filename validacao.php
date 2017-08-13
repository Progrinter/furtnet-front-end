<?php


    /* Código que vai na index.php e na psico-login.php
     *
     * include "validacao.php";
    
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
    
    *********Depois do body
    <?php
    
        if($valido == true)
        {
            echo "Cadastro realidado com sucesso";
        }
        else
        {
            echo $erro;
    
    ?>
    
    *********Dentro de cada input usuário
    <?php if(isset($_POST["nome"])) { echo "value='" . $_POST["nome"] . "'";} ?>
    
    <?php if(isset($_POST["cpf"])) { echo "value='" . $_POST["cpf"] . "'"; } ?>
    
    <?php if(isset($_POST["genero"]) && $_POST["genero"] == "Masculino") { echo "selected"; } ?> 
    
    <?php if(isset($_POST["genero"]) && $_POST["genero"] == "Feminino") { echo "selected"; }?>
    
    <?php if(isset($_POST["genero"]) && $_POST["genero"] == "Outro") { echo "selected"; }?>
    
    <?php if(isset($_POST["data"])) { echo "value='" . $_POST["data"] . "'";}?>
    
    <?php if(isset($_POST["email"])) { echo "value='" . $_POST["email"] . "'";} ?>
    
    ********Dentro de cada input psico
    <?php if(isset($_POST["formacao"])) { echo "value='" . $_POST["formacao"] . "'";} ?>
    
    <?php if(isset($_POST["crp"])) { echo "value='" . $_POST["crp"] . "'"; } ?>
    
    *********Depois do form
    
        }
    
    */
    
    function valida()
    {
        if(strlen(utf8_decode($_POST["nome"])) < 3)
        {
            return $erro = "É necessário preencher o campo nome corretamente";
        }
        else if(isset($_POST["cpf"]) && strlen($_POST["cpf"]) < 11)
        {
            return $erro = "É necessário informar um cpf válido";
        }
        else if(isset($_POST["crp"]) && strlen($_POST["crp"]) < 8)
        {
            return $erro = "É necessário informar um crp válido";
        }
        else if(isset($_POST["formacao"]) && strlen($_POST["formacao"]) < 5)
        {
            return $erro = "Informe uma formação existente";
        }
        else if($_POST["genero"] != "Masculino" && $_POST["genero"] != "Feminino" && $_POST["genero"] != "Outro")
        {
            return $erro = "Selecione um gênero";
        }
        else if(is_numeric($_POST["data"]) == false && strlen($_POST["data"]) < 8)
        {
            return $erro = "É necessário informar uma data de nascimento válida";
        }
        else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false)
        {
            return $erro = "Informe uma e-mail valido";
        }
        else if (strlen($_POST["senha"]) < 8)
        {
            return $erro = "Digite uma senha com no mínimo de 8 digitos";
        }
        else if ($_POST["confirma"] != $_POST["senha"])
        {
            return $erro = "As senhas são diferentes";
        }
    }
?>