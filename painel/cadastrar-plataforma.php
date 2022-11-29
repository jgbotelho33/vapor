<?php


require('./modulos/conexao.php');

$nome_plataformas = $_POST['plataforma'] ?? null;

$consultar_plataformas = "SELECT nome FROM plataforma WHERE nome = '{$nome_plataformas}'";

$criar_plataformas = "INSERT INTO plataforma (nome) VALUES ('{$nome_plataformas}')";

$plataformas = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataformas));

if ($plataforma == null) {
    mysqli_query($conn, $criar_plataformas);
    header("Location: plataformas.php");
} else {
    header("Location:nova-plataforma.php?error=Esta plataforma já existe!");
}


?>

