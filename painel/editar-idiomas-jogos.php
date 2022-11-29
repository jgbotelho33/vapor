<?php

require('./modulos/top-menu.php');


$titulo_pagina = "DashBoard";

$id_jogao = $_GET['id'] ?? null;

$query_jogao = "SELECT nome FROM jogo WHERE id = {$id_jogao}";
$jogao = mysqli_fetch_array(mysqli_query($conn, $query_jogao));

$query_idiomas_jogao = "SELECT * FROM idioma WHERE id IN (SELECT id_idioma FROM jogo_idioma WHERE id_jogo = {$id_jogao})";
$idiomas_jogao = mysqli_query($conn, $query_idiomas_jogao);

$query_idiomas_jogao_cadastrar = "SELECT * FROM idioma WHERE id NOT IN (SELECT id_idioma FROM jogo_idioma WHERE id_jogo = {$id_jogao})";
$idiomas_jogao_cadastrar = mysqli_query($conn, $query_idiomas_jogao_cadastrar);




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


    <div id="editar-idiomas-jogao">
        <div class="jogao">
            <table>
                <tr>
                    <th>Idiomas - <?= $jogao['nome'] ?></th>
                    <th class="remove">Excluir</th>
                </tr>

                <?php while ($idioma = mysqli_fetch_array($idiomas_jogao)) { ?>

                    <tr>
                        <td><?= $idioma['nome'] ?></td>
                        <td class="remove"><a href="excluir-idiomas-jogos.php?id_idioma=<?= $idioma['id'] ?>&id_jogo=<?= $id_jogao ?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </table>

            <?php if ($idiomas_jogao->num_rows == 0) { ?>
                <h1> Não há idiomas cadastrados para <?= $jogao['nome'] ?></h1>

            <?php } ?>

            <div id="cadastrar_idiomas_jogao">
                <form action="./cadastrar-idiomas-jogos.php" method="post">

                    <select required name="id_idioma" id="idioma">
                        <option value="" disabled selected>Selecione um Idioma</option>

                        <?php while ($idioma = mysqli_fetch_array($idiomas_jogao_cadastrar)) { ?>
                            <option value="<?= $idioma['id'] ?>"><?= $idioma['nome'] ?></option>
                        <?php } ?>


                    </select>

                    <input type="hidden" value="<?= $id_jogao ?>" name="id_jogo">

                    <button class="btn-efeito" type="submit">Cadastrar</button>








                </form>
            </div>





        </div>
    </div>


<body>






    </head>






</html>