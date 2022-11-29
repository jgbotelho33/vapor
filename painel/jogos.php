<?php require('./modulos/top-menu.php');
$query_lista_jogos = "SELECT id, nome FROM jogo; ";
$lista_jogos = mysqli_query($conn, $query_lista_jogos);
?>

<div id="jogo-conteiner">
    <div id="botao">
        <a href="novo-jogo.php">
            <button class="btn-efeito"> Adicione um Jogo </button>
        </a>

    </div>
    <div class="tabela-all">
        <table >
            <tr>
                <th>Jogo</th>
                <th class="edicao">Idiomas</th>
                <th class="edicao">Plataformas</th>
                <th class="edicao">Editar</th>
                <th class="delete">Excluir</th>
            </tr>

            
            <?php while ($lista_jogo = mysqli_fetch_array($lista_jogos)) { ?>

            
            

                <tr >
                    <td><?= $lista_jogo['nome'] ?></td>
                    <td class="nomeedicao"><a class="link" href="editar-idiomas-jogos.php?id=<?= $lista_jogo['id'] ?>"> Idiomas </a></td>
                    <td class="nomeedicao"><a class="link" href="editar-plataformas-jogos.php?id=<?= $lista_jogo['id'] ?>"> Plataformas </a></td>
                    <td class="nomeedicao"><a class="link" href="editar-jogo.php?id=<?= $lista_jogo['id'] ?>"> Editar </a></td>
                    <td class="nomedelete"><a class="link" href="excluir-jogo.php?id=<?= $lista_jogo['id'] ?>"> Excluir </a></td>

                </tr>
               



            <?php } ?>


        </table>
    </div>
</div>
</div>
</div>
</body>