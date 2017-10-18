<?php
  session_start();
  $tipo = $_COOKIE['Tipo'];
  $nome = $_COOKIE['Nome'];
  $email = $_COOKIE['Email'];
  $genero =  $_COOKIE['Genero'];
  $status = $_SESSION['logon'];


  if($status == "logado" && $tipo == "0") {
    include "templates/adicionais-paciente.php";
  }
  if($status == "logado" && $tipo == "1") {
    include "templates/adicionais-psicologo.php";
  }
?>