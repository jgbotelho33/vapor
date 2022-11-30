function excluirJogo(idJogo) {
    let excluirJogo = confirm("Realmente deseja deletar esse gamezaço?")

    if(excluirJogo == true) {
        window.open("excluir-jogo.php?id=" +idJogo, "_SELF")
}

}