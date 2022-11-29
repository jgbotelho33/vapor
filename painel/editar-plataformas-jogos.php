<?php

require('./modulos/top-menu.php');


$titulo_pagina = "DashBoard";

$id_jogao = $_GET['id'] ?? null;

$query_jogao = "SELECT nome FROM jogo WHERE id = {$id_jogao}";
$jogao = mysqli_fetch_array(mysqli_query($conn, $query_jogao));


$query_plataform_jogao = "SELECT * FROM plataforma WHERE id IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$id_jogao})";
$plataform_jogao = mysqli_query($conn, $query_plataform_jogao);

$query_plataform_jogao_cadastrar = "SELECT * FROM plataforma WHERE id NOT IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$id_jogao})";
$plataform_jogao_cadastrar = mysqli_query($conn, $query_plataform_jogao_cadastrar);

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


    <div id="editar-plataformas-jogao">
        <div class="jogao">
            <table>
                <tr>
                    <th>Plataformas - <?= $jogao['nome'] ?></th>
                    <th class="remove">Excluir</th>
                </tr>

                <?php while ($plataforma = mysqli_fetch_array($plataform_jogao)) { ?>

                    <tr>
                        <td><?= $plataforma['nome'] ?></td>
                        <td class="remove"><a href="excluir-plataformas-jogos.php?id_plataforma=<?= $plataforma['id'] ?>&id_jogo=<?= $id_jogao ?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </table>

            <?php if ($plataform_jogao->num_rows == 0) { ?>
                <h1> Não há plataformas cadastradas para <?= $jogao['nome'] ?></h1>

            <?php } ?>

            <div id="cadastrar_plataformas_jogao">
                <form action="./cadastrar-plataformas-jogos.php" method="post">

                    <select required name="id_plataforma" id="plataforma">
                        <option value="" disabled selected>Selecione uma Plataforma</option>

                        <?php while ($plataforma = mysqli_fetch_array($plataform_jogao_cadastrar)) { ?>
                            <option value="<?= $plataforma['id'] ?>"><?= $plataforma['nome'] ?></option>
                        <?php } ?>


                    </select>

                    <input type="hidden" value="<?= $id_jogao ?>" name="id_jogo">

                    <button type="submit">Cadastrar</button>








                </form>
            </div>





        </div>
    </div>


<body>






    </head>






</html>