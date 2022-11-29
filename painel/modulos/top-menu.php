<?php

require('autenticacao.php');

require('conexao.php');

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/styles.css">
    <title> DashBoard </title>


</head>

<body>
<?php require('./modulos/side-menu.php') ?>
    <div id="principal">
        
        <div id="sub-container">
            <div id="top-menu">
                <div id="sub-menu">
                    <div id="nomesite"> DashBoard </div>
                    <div id="nomeadm">  <b>Olá, Administrador!</b>  </div>
                </div>
            </div>
        