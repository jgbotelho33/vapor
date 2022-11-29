<?php 

 session_start();

$adm = $_SESSION ['adm'] ?? null;

if($adm == null) {
    header('Location:index.php?error=Você deve fazer login');
}

?>