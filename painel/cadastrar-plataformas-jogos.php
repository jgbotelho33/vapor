<?php 

require('./modulos/conexao.php');

$id_jogao = $_POST['id_jogo'] ?? null;
$id_plataform = $_POST['id_plataforma'] ?? null;

$query_inserir_plataform_jogao = "INSERT INTO jogo_plataforma (id_jogo, id_plataforma) VALUES ({$id_jogao},{$id_plataform})";
mysqli_query($conn, $query_inserir_plataform_jogao);


header("location: editar-plataformas-jogos.php?id={$id_jogao}");

?>
