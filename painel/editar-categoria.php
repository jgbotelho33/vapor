<?php

require('./modulos/top-menu.php');



$titulo_pagina = "DashBoard";





 $error = $_GET['error'] ?? null;

 $id_categoria = $_GET['id'] ?? null;

$consultar_categoria = "SELECT nome FROM categoria WHERE id = '{$id_categoria}'";
 $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));
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
    <div id="atualizar_categoria">
        <form action="./atualizar-categoria.php" method="post">

            <div id="atualize_categoria">
                <div id="atualiz_categoria">

            
                    <label for="categoria"> Categoria </label>
                    <input value="<?=$categoria['nome']?>" name="categoria" id="categoria" class="input_categoria" type="text">
                    <input value="<?=$id_categoria?>" name="id" type="hidden">

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