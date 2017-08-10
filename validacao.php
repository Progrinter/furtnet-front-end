<?php

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