<?php

require('./modulos/top-menu.php');


$titulo_pagina = "Novo idioma";

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
    <title> DashBoard <?=$titulo_pagina?></title>


    <body>
    <div id="adicionar_idioma">
        <form action="./cadastrar-idioma.php" method="post">

            <div id="adicione_novo_idioma">
                <div id="nome_novo_idioma">

                    <span> Adicione aqui um novo Idioma</span>

                    <input type="idioma" name="idioma" id="novo_idioma" placeholder="Idioma" required>

                </div>

                <div id="botao_salvar_idioma" title="Salvar o Idioma">
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