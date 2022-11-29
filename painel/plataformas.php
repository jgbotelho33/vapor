<?php require('./modulos/top-menu.php');



$query_lista_plataform = "SELECT id, nome FROM plataforma;" ;
$lista_plataform = mysqli_query($conn, $query_lista_plataform);

?>

<div id="plataforma-conteiner">
    <div class="conteiner-botao">
        <a href="nova-plataforma.php">
            <button class="btn-efeito"> Adicione uma Plataforma </button>
    </a>
        
    </div>
    <div id="lista">
        <table class="tabela-all">
            <tr>
                <th>Plataforma</th>
                <th class="edicao">Editar</th>
                <th class="delete">Excluir</th>
            </tr>
           

            <?php while ($plataform= mysqli_fetch_assoc($lista_plataform)) { ?>

                <tr>
                    <td><?= $plataform['nome'] ?></td>
                    <td class="nomeedicao"><a class="link" href="editar-plataforma.php?id=<?= $plataform['id'] ?>"> Editar </a></td>
                    <td class="nomedelete"><a class="link" href="excluir-plataforma.php?id=<?= $plataform['id'] ?>"> Excluir </a></td>
                   
                </tr>
                



                <?php } ?>
          
   
        </table>
    </div>
</div>