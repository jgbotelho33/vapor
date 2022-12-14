<?php
$titulo_pagina = "Home";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php require('./modulos/top-menu.php');

$query_games = "SELECT id, nome, imagem_url, valor, data_lancamento FROM jogo";
$lista_games = mysqli_query($conn, $query_games);



?>

<body>
    <div id="body-container">
        <?php require('./modulos/side-menu.php') ?>
        <div id="content">
            <div id="header">RECOMENDADOS E EM DESTAQUE</div>
            <div id="game-list">
                <?php while ($jogo = mysqli_fetch_array($lista_games)) {

                    $query_plataformas = "SELECT plataforma.nome FROM plataforma INNER JOIN jogo_plataforma ON jogo_plataforma.id_plataforma = plataforma.id WHERE jogo_plataforma.id_jogo = {$jogo['id']}";
                    $lista_plataformas = mysqli_query($conn, $query_plataformas);

                    $query_idiomas = "SELECT idioma.nome FROM idioma INNER JOIN jogo_idioma ON jogo_idioma.id_idioma = idioma.id WHERE jogo_idioma.id_jogo = {$jogo['id']}";
                    $lista_idiomas = mysqli_query($conn, $query_idiomas);

                ?>
                    <div class="game">
                        <div class="photo">
                            <img src="<?= $jogo['imagem_url'] ?>" alt="<?= $jogo['nome'] ?> Photo">
                        </div>

                        <div class="info">
                            <div class="title"><?= ucfirst(mb_strtolower($jogo['nome'])) ?></div>
                            <div class="platforms">
                                <?php while ($plataforma = mysqli_fetch_array($lista_plataformas)) { ?>
                                    <div class="platform sub-block"><?= $plataforma['nome'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="idioms">
                                <?php while ($idioma = mysqli_fetch_array($lista_idiomas)) { ?>
                                    <div class="idiom sub-block"><?= $idioma['nome'] ?> </div>
                                <?php } ?>

                            </div>
                            <div class="release-date"><?= $jogo['data_lancamento'] ?></div>
                        </div>
                        <div class="price">R$ <?= number_format($jogo['valor'], 2, ",") ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</body>

</html>