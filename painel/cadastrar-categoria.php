<?php


require('./modulos/conexao.php');

$nome_categoria = $_POST['categoria'] ?? null;

$consultar_categoria = "SELECT nome FROM categoria WHERE nome = '{$nome_categoria}'";

$criar_categoria = "INSERT INTO categoria (nome) VALUES ('{$nome_categoria}')";

$categorias = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));

if ($categorias == null) {
    mysqli_query($conn, $criar_categoria);
    header("Location: categorias.php");
} else {
    header("Location:novo-idioma.php?error=Esta categoria já existe!");
}


?>