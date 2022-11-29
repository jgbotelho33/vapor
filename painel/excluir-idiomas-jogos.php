<?php  

require('./modulos/conexao.php');

$id_jogao = $_GET['id_jogo'] ?? null;
$id_idioma = $_GET['id_idioma'] ?? null;

$query_excluir_idioma_jogao = "DELETE FROM jogo_idioma WHERE id_jogo = {$id_jogao} AND id_idioma = {$id_idioma}";
mysqli_query($conn, $query_excluir_idioma_jogao);

header("location: editar-idiomas-jogos.php?id={$id_jogao}");

?>