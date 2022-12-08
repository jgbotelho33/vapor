function excluirJogo(idJogo) {
    let excluirJogo = confirm("Realmente deseja deletar esse gamezaço?")

    if(excluirJogo == true) {
        window.open("excluir-jogo.php?id=" +idJogo, "_SELF")
}

}

function  removeElementPorID(IDElement) {
    let element = document.getElementById(IDElement)

    if (element != null) {
    element.remove()
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

function updateClock() {

    const clock = document.getElementById('clock')
    clock.innerHTML = obterDataHoraAtual()

    setInterval(function(){
        clock.innerHTML = obterDataHoraAtual()
        1000
    })
}

function cor_random() {
    const r = Math.floor(Math.random() * 256)
    const g = Math.floor(Math.random() * 256)
    const b = Math.floor(Math.random() * 256)
    const cores = "rgb(" + r + "," + g + "," + b + ")"

    document.getElementById("nomesite").style.color = cores
    document.getElementById("nomeadm").style.color = cores
   
}

function iniciar_mudanca_de_cor() {
    setInterval(cor_random, 1000)
}

function transformar_texto_maiuscula(element){
    element.value = element.value.ToUpperCase()
}

function primeira_letra_maiuscula(element){
    const valor_do_usuario = element.value
    element.value = valor_do_usuario[0]. ToUpperCase() + valor_do_usuario.slice(1).toLowerCase()
}
