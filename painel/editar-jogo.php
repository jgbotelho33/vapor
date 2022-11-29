<?php

require('./modulos/top-menu.php');


$titulo_pagina = "DashBoard";

$error = $_GET['error'] ?? null;
$success = $_GET['success'] ?? null;
$id_jogao = $_GET['id'] ?? null;

$query_jogo_listado_categoria = "SELECT * FROM categoria ORDER BY nome ASC";
$jogo_listado_categoria = mysqli_query($conn, $query_jogo_listado_categoria);

$query_jogao = "SELECT * FROM jogo WHERE id = {$id_jogao}";
$jogao = mysqli_fetch_assoc(mysqli_query($conn, $query_jogao));

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
    <div id="editar_jogo">
        <form action="./atualizar-jogo.php" method="post">

            <div class="input_atualizar_jogo">
                <input type="hidden" name="id_jogo" value="<?= $id_jogao ?>">

                <div class="marcacoes_jogo">

                    <label for="nome">Nome*</label>

                    <input required title="Nome" type="text" name="nome" class="marcacoes" id="nome" value="<?= $jogao['nome'] ?>">

                </div>
                <div class="marcacoes_jogo">

                    <label for="preco">Valor*</label>

                    <input required title="Preço" type="number" min="0.00" name="preco" id="preco" class="marcacoes" value="<?= $jogao['valor'] ?>">

                </div>
                <div class="marcacoes_jogo">

                    <label for="imagem">Imagem*</label>

                    <input required title="Link da imagem" type="text" class="marcacoes" min="0" name="imagem" id="nome" value="<?= $jogao['imagem_url'] ?>">

                </div>
                <div class="marcacoes_jogo">

                    <label for="video">Vídeo</label>

                    <input title="Link do vídeo" type="text" class="marcacoes" name="video_url" id="video" value="<?= $jogao['video_url'] ?>" min="0">

                </div>
            </div>



            <div class="input_atualizar_jogo">

                <label for="data_lancamento">Data de lançamento*</label>

                <input required title="Data de lançamento" type="date" class="marcacoes" name="data_lancamento" id="data-lancamento" value="<?= $jogao['data_lancamento'] ?>">

            </div>
            <div class="marcacoes_jogo">

                <label for="desenvolvedora">Desenvolvedora*</label>

                <input required title="Desenvolvedora" type="text" class="marcacoes" name="desenvolvedora" id="desenvolvedora" value="<?= $jogao['desenvolvedora'] ?>">

            </div>
            <div class="marcacoes_jogo">

                <label for="categoria">Categoria*</label>

                <select name="categoria" id="categoria" title="Categoria" class="marcacoes" required>
                    <option value="" disabled selected>Selecione</option>


                    <?php while ($jogao_categoria = mysqli_fetch_array($jogo_listado_categoria)) { ?>
                        <option <?php if ($jogao_categoria['id'] == $jogao['id_categoria']) {
                                    echo 'selected';
                                } ?> value="<?= $jogao_categoria['id'] ?>"><?= $jogao_categoria['nome'] ?></option>
                    <?php } ?>

                </select>


            </div>
            <div class="marcacoes_jogo_textarea">

                <label for="descricao">Descrição*</label>


                <textarea required name="descricao" id="descricao" cols="30" rows="10"><?= $jogao['descricao'] ?></textarea>


            </div>



            <?php if ($error != null) { ?>
                <div class="error-mensagem"><?= $error ?></div>
            <?php } ?>

            <?php if ($success != null) { ?>
                <div class="success-mensagem"><?= $success ?></div>
            <?php } ?>


            <div class="salvar">
                <button class="botao_salvar" type="submit">Salvar</button>
            </div>
        </form>
    </div>