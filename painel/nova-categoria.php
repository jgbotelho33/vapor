<?php

require('./modulos/top-menu.php');


$titulo_pagina = "DashBoard";

$error = $_GET['error'] ?? null;
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
    <title> DashBoard </title>


    <body>
    <div id="adicionar_categoria">
        <form action="./cadastrar-categoria.php" method="post">

            <div id="adicione_nova_categoria">
                <div id="nome_nova_categoria">

                    <span> Adicione aqui uma nova Categoria</span>

                    <input type="categoria" name="categoria" id="nova_categoria" placeholder="Categoria" required>

                </div>

                <div id="botao_salvar_categoria" title="Salvar a Categoria">
                    <button type="submit" class="salvar"> Salvar </button>
                </div>

                <?php
                if ($error != null) {  ?>
                    <div class="error_salva"><?= $error ?></div>
                <?php } ?>






            </div>

        </form>
    </div>



</body>




</head>



</html>