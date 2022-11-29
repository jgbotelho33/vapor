<?php require('./modulos/top-menu.php');
$query_lista_categorias = "SELECT id, nome FROM categoria; ";
$lista_categorias = mysqli_query($conn, $query_lista_categorias);
?>

<div id="idioma-conteiner">
    <div id="botao">
        <a href="nova-categoria.php">
            <button class="btn-efeito"> Adicione uma Categoria </button>
        </a>

    </div>
    <div class="tabela-all">
        <table >
            <tr>
                <th>Categoria</th>
                <th class="edicao">Editar</th>
                <th class="delete">Excluir</th>
            </tr>


            <?php while ($categorias = mysqli_fetch_array($lista_categorias)) { ?>

                <tr>
                    <td><?= $categorias['nome'] ?></td>
                    <td class="nomeedicao"><a class="link" href="editar-categoria.php?id=<?= $categorias['id'] ?>"> Editar </a></td>
                    <td class="nomedelete"><a class="link" href="excluir-categoria.php?id=<?= $categorias['id'] ?>"> Excluir </a></td>

                </tr>




            <?php } ?>


        </table>
    </div>
</div>
</div>
</div>
</body>