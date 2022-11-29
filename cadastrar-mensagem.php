<?php
require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$assunto = $_POST['assunto'] ?? null;
$mensagem = addslashes($_POST['mensagem'] ?? null);

$query_enviar_mensagem = "INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('{$nome}','{$email}','{$assunto}','{$mensagem}')";

mysqli_query($conn, $query_enviar_mensagem);

//  $enviar_mensagem =

header('location: suporte.php?success= Sua mensagem foi enviada com sucesso!');


?>

<!-- INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('victor','victor@gmial.com','Outros','Força Neymar!!!'); -->


<!-- INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('{$nome}' , '{$email}' , '{$assunto}' , '{$mensagem}')"; -->