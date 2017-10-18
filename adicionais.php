<?php
  session_start();
  $tipo = $_COOKIE['Tipo'];
  $nome = $_COOKIE['Nome'];
  $email = $_COOKIE['Email'];
  $genero =  $_COOKIE['Genero'];


  if(isset($_SESSION['logon']) || $tipo == "0") {
    include "templates/adicionais-paciente.php";
  }
  if(isset($_SESSION['logon']) || $tipo == "1") {
    include "templates/adicionais-psicologo.php";
  }
?>