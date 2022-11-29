<?php
$titulo_pagina = "Suporte";

require('./modulos/top-menu.php');
$message = $_GET['success'] ?? null;
?>


<!DOCTYPE html>
<html lang="pt-BR">


<body>
    <div id="body-container">
        <?php require('./modulos/side-menu.php') ?>
        <div id="content">
            <div id="header">SUPORTE</div>




            <div class="formulario-contato">
                <h1 class="branco">Formulário de Contato!</h1>

                <form class="formulario" method="post" action="cadastrar-mensagem.php">

                    <div class="metade left">

                        <input name="nome" type="text" placeholder="Nome" required="">
                        <input name="email" type="email" placeholder="E-mail" required="">
                        <select required name="assunto" id="assunto">
                            <option value="" disabled selected>Selecione um assunto</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="critica">Crítica</option>
                            <option value="elogio">Elogio</option>
                            <option value="duvida">Dúvida</option>
                            <option value="suporte">Suporte</option>
                            <option value="outros">Outros</option>
                        </select>

                    </div>

                    <div class="metade right">
                        <textarea name="mensagem" type="text" placeholder="Mesagem" required=""></textarea>
                    </div>

                    <input type="submit" value="Enviar Dados" class="btn-submit">
                    <?php if ($message != null) { ?>
                            <div class="success-mensagem"><?= $message ?></div>
                        <?php } ?>

                </form>



            </div>
        </div>
</body>

</html>