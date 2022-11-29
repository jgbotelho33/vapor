<?php

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$preco = $_POST['preco'] ?? null;
$imagem_url = $_POST['imagem_url'] ?? null;
$clipe_url = $_POST['clipe_url'] ?? null;
$data_lancamento = $_POST['data_lancamento'] ?? null;
$desenvolvedora = $_POST['desenvolvedora'] ?? null;
$categoria = $_POST['categoria'] ?? null;
$descricao = $_POST['descricao'] ?? null;


$query_jogo_clipe = "INSERT INTO jogo(nome, valor, descricao, imagem_url, video_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$preco}, '{$descricao}', '{$imagem_url}', '{$clipe_url}', '{$data_lancamento}', '{$desenvolvedora}', {$categoria})";

$query_jogo_sem_clipe = "INSERT INTO jogo (nome, valor, descricao, imagem_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$preco}, '{$descricao}', '{$imagem_url}', '{$data_lancamento}', '{$desenvolvedora}', {$categoria})";


if($clipe_url == "") {
    mysqli_query($conn, $query_jogo_sem_clipe);
} else {
    mysqli_query($conn, $query_jogo_clipe);
}
header('location: novo-jogo.php')

?>