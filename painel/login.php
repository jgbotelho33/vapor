<?php 

require('./modulos/conexao.php');

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

$query_login_adm = "SELECT nome, id, cpf FROM administrador WHERE email = '{$email}' AND senha = '{$senha}'";


$login_adm = mysqli_fetch_assoc(mysqli_query($conn, $query_login_adm));

if($login_adm == null) {
    header('Location: index.php?error=Usuário e/ou senha inválidos');
} else {
    session_start();
    $_SESSION['adm'] = $login_adm;
    header('Location: dashboard.php');
}
