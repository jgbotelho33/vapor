<?php 

require('./modulos/conexao.php');

$nome_plataform = $_POST['plataforma'] ?? null;
$id_plataform = $_POST['id'] ?? null;

$consultar_plataform = "SELECT nome FROM plataforma WHERE nome = '{$nome_plataform}' AND id != {$id_plataform}";

$plataform = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataform));

$atualizar_plataform = "UPDATE plataforma SET nome = '{$nome_plataform}' WHERE id = {$id_plataform}";


if($plataform == null) {
    mysqli_query($conn, $atualizar_plataform);
    header("location: plataformas.php");
} else {
    header("location: editar-plataforma.php?error=Esta plataforma já está cadastrada!&id={$id_plataform}");
}


?>