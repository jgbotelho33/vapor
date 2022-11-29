<?php  

require('./modulos/conexao.php');

$id_jogao = $_GET['id_jogo'] ?? null;
$id_plataform = $_GET['id_plataforma'] ?? null;

$query_excluir_plataform_jogao = "DELETE FROM jogo_plataforma WHERE id_jogo = {$id_jogao} AND id_plataforma = {$id_plataform}";
mysqli_query($conn, $query_excluir_plataform_jogao);

header("location: editar-plataformas-jogos.php?id={$id_jogao}");

?>