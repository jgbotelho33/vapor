<?php

require('./modulos/top-menu.php');


$titulo_pagina = "DashBoard";

$error = $_GET['error'] ?? null;

$query_jogo_listado_categoria = "SELECT * FROM categoria ORDER BY nome ASC";

$jogo_listado_categoria = mysqli_query($conn, $query_jogo_listado_categoria);

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
    <div id="adicionar_jogo">
        <form action="./cadastrar-jogo.php" method="post">

            <div id="adicionar_novo_jogo">
                <div class="marcacoes_jogo">

                    <label for="nome">Nome*</label>

                    <input required title="Nome" type="text" name="nome" class="marcacoes" id="nome" placeholder="Nome do jogo">

                </div>
                <div class="marcacoes_jogo">

                    <label for="preco">Valor*</label>

                    <input required title="Preço" type="number" min="0.00" name="preco" id="preco" class="marcacoes" placeholder="Valor">

                </div>
                <div class="marcacoes_jogo">

                    <label for="imagem_url">Imagem*</label>

                    <input required title="Link da imagem" type="text" class="marcacoes" min="0" name="imagem_url" id="nome" placeholder="Link da imagem">

                </div>
                <div class="marcacoes_jogo">

                    <label for="video_url">Vídeo</label>

                    <input  title="Link do vídeo" type="text" class="marcacoes" name="video_url" id="video" placeholder="Link do vídeo" min="0">

                </div>
                <div class="marcacoes_jogo">

                    <label for="data_lancamento">Data de lançamento*</label>

                    <input required title="Data de lançamento" type="date" class="marcacoes" name="data_lancamento" id="data_lancamento" placeholder="Data de lançamento">

                </div>
                <div class="marcacoes_jogo">

                    <label for="desenvolvedora">Desenvolvedora*</label>

                    <input required title="Desenvolvedora" type="text" class="marcacoes" name="desenvolvedora" id="desenvolvedora" placeholder="Desenvolvedora">

                </div>
                <div class="marcacoes_jogo">

                    <label for="categoria">Categoria*</label>

                    <select name="categoria" id="categoria" title="Categoria"  class="marcacoes"  required>
                        <option value="" disabled selected>Selecione</option>


                        <?php while ($categoria = mysqli_fetch_array($jogo_listado_categoria)) { ?>
                            <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                        <?php } ?>

                    </select>


                </div>
                <div class="marcacoes_jogo_textarea">

                    <label for="descricao">Descrição*</label>


                    <textarea required name="descricao" id="descricao" cols="30" rows="10"></textarea>



                </div>

                <?php
                if ($error != null) {  ?>
                    <div class="error_mensagem"><?= $error ?></div>
                <?php } ?>

                <div id="botao_salvar_jogo">
                    <button type="submit" title="Salvar Jogo" class="salvar"> Salvar </button>
                </div>








            </div>

        </form>
    </div>



</body>




</head>



</html>