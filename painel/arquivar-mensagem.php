<?php
require('./modulos/top-menu.php');

$id_mensagem = $_GET['id'] ?? null;

$query_inserir_mensagem = "INSERT INTO armazenadas (nome, email, assunto, mensagem) SELECT nome, email, assunto, mensagem FROM mensagem WHERE id = '{$id_mensagem}'";
$inserir_mensagem = mysqli_query($conn, $query_inserir_mensagem);


$query_arquivar_mensagem = "DELETE FROM mensagem WHERE id = '{$id_mensagem}'";
$arquivar_mensagem = mysqli_query($conn, $query_arquivar_mensagem);

header('location: mensagens.php')
?>
<div></div>