<?php

$error_message = $_GET['error'] ?? null;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/styles.css">
    <title> Login </title>
</head>

<body>
    
<section class="boxLogin container">
<div class="content">
      
      <form class="login" method="post" name="login" action="./login.php">
        <h1><i class="icon icon-key-1"></i>Login</h1>
        <div class="padding">
          <label>
            <input type="text" class="campos" placeholder="E-mail" name="email">
          </label>
          <label>
            <input type="password" class="campos" placeholder="Password"  name="senha">
          </label>
          <input type="submit" class="btn-efeito" name="login" value="Entrar">
          
        </div><!--padding-->
       
      </form>
 </div>
 </section><!--Login-->





</body>

</html>