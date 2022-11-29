<?php

$titulo_pagina = "Visualizar mensagem";

require('./modulos/top-menu.php');

$id_mensagem = $_GET['id'] ?? null;

$query_visualizar_mensagem = "SELECT * FROM mensagem WHERE id = {$id_mensagem};";

$visualizar_mensagem = mysqli_fetch_array(mysqli_query($conn, $query_visualizar_mensagem));



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/styles.css">
    <title> DashBoard <?= $titulo_pagina ?></title>
</head>

<div>
    <form class="formulario de contato">
        <div>

            <div> <label for="" class="labeis">Nome ----> </label><?= $visualizar_mensagem['nome'] ?>
            </div>
            <div> <label for="" class="labeis">E-mail ----> </label><?= $visualizar_mensagem['email'] ?>
            </div>
            <div> <label for="" class="labeis">Assunto ----> </label><?= $visualizar_mensagem['assunto'] ?>
            </div>
            <div> <label for="" class="labeis">Mensagem ----></label> <textarea disabled class=""><?= $visualizar_mensagem['mensagem'] ?></textarea>


            </div>


        </div>
    </form>