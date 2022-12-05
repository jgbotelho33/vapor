function excluirJogo(idJogo) {
    let excluirJogo = confirm("Realmente deseja deletar esse gamezaço?")

    if(excluirJogo == true) {
        window.open("excluir-jogo.php?id=" +idJogo, "_SELF")
}

}

function obterDataHoraAtual() { 
    const data = new Date()
    let horas = data.getHours()
    let minutos = data.getMinutes()
    let segundos = data.getSeconds()
    let dia = data.getDate()
    let mes = data.getMonth()+1
    let ano = data.getFullYear()

    if(horas <= 9) {
        horas = "0" + hora
    }
    if(minutos <= 9) {
        minutos = "0" + minutos
    }
    if(segundos <= 9) {
        segundos = "0" + segundos
    }

    let dataAtual = dia + "/" + mes + "/" + ano + " - " + horas + ":" + minutos + ":" + segundos;

    return dataAtual
}

function updateClock() {}

