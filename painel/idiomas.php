<?php require('./modulos/top-menu.php');
$query_lista_idiomas = "SELECT id, nome FROM idioma; ";
$lista_idiomas = mysqli_query($conn, $query_lista_idiomas);
?>

<div id="idioma-conteiner">
    <div id="botao">
        <a href="novo-idioma.php">
            <button class="btn-efeito"> Adicione um Idioma </button>
        </a>

    </div>
    <div >
        <table  >
            <tr >
                <th>Idioma</th>
                <th class="edicao">Editar</th>
                <th class="delete">Excluir</th>
            </tr>


            <?php while ($lista_idioma = mysqli_fetch_array($lista_idiomas)) { ?>

                <tr >
                    <td ><?= $lista_idioma['nome'] ?></td>
                    <td class="nomeedicao"><a class="link" href="editar-idioma.php?id=<?= $lista_idioma['id'] ?>"> Editar </a></td>
                    <td class="nomedelete"><a class="link" href="excluir-idioma.php?id=<?= $lista_idioma['id'] ?>"> Excluir </a></td>

                </tr>




            <?php } ?>


        </table>
    </div>
</div>
</div>
</div>
</body>