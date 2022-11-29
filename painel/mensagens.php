<?php require('./modulos/top-menu.php');


$nome = $_post['nome'] ?? null;
$mensagem = $_post['id'] ?? null;
$assunto = $_post['assunto'] ?? null;
// $visualizar = $_post['visualizar'] ?? null;
// $arquivar = $_post['arquivar'] ?? null;

$query_lista_arquivos = "SELECT id, nome, email, assunto FROM mensagem; ";
$arquivar = mysqli_query($conn, $query_lista_arquivos);



?>

<div id="mensagem-conteiner">

    <div id="lista_mensagem">
        <table>


            <?php if ($arquivar->num_rows == 0) { ?>
               <div class="sem_mensagens"><h1> Não há mensagens disponíveis! </h1></div> 

            <?php } ?>

            <tr>



                <th>Nome</th>
                <th class="assunto">Assunto</th>
                <th class="visualizar">Visualizar</th>
                <th class="arquivar">Arquivar</th>



            </tr>



            <?php while ($tabela_arquivos = mysqli_fetch_array($arquivar)) { ?>

                <tr>



                    <td><?= $tabela_arquivos['nome'] ?></td>
                    <td class="nomevisualizar"><?= $tabela_arquivos['assunto'] ?></td>
                    <td class="nomevisualizar"><a class="link" href="visualizar-mensagem.php?id=<?= $tabela_arquivos['id'] ?>">Visualizar</a></td>
                    <td class="nomevisualizar"><a class="link" href="arquivar-mensagem.php?id=<?= $tabela_arquivos['id'] ?>">Arquivar</a></td>



                </tr>






            <?php } ?>

        </table>
    </div>
</div>
</div>
</div>
</body>