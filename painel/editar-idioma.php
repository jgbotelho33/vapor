<?php

require('./modulos/top-menu.php');



$titulo_pagina = "DashBoard";





 $error = $_GET['error'] ?? null;

 $id_idioma = $_GET['id'] ?? null;

$consultar_idioma = "SELECT nome FROM idioma WHERE id = '{$id_idioma}'";
 $idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));
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
    <div id="atualizar_idioma">
        <form action="./atualizar-idioma.php" method="post">

            <div id="atualize_idioma">
                <div id="atualiz_idioma">

            
                    <label for="idioma"> Idioma </label>
                    <input value="<?=$idioma['nome']?>" name="idioma" id="idioma" class="input_idioma" type="text">
                    <input value="<?=$id_idioma?>" name="id" type="hidden">

                </div>


                <?php if($error != null) { ?>
    <div class="error_message"><?=$error?></div>
    
    <?php } ?>

                <div id="botao_salvar_editação" title="Atualizar">
                    <button type="submit" id="atualizar"> Atualizar </button>
                </div>

                





            </div>

        </form>
    </div>



</body>



</head>






</html>