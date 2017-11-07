<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  $nome = $_SESSION['nome'];
  $logon = $_SESSION['logon'];
  $genero =  $_SESSION['genero'];
  $status = $_SESSION['status'];


  if($status == "logado" && $tipo == "0") {
    include "templates/adicionais-paciente.php";
  }
  if($status == "logado" && $tipo == "1") {
    include "templates/adicionais-psicologo.php";
  }
?>