let tamanhoGrande = false;

function aumentarTexto() {
    document.body.classList.add("texto-grande");
    tamanhoGrande = true;
}

function diminuirTexto() {
    document.body.classList.remove("texto-grande");
    tamanhoGrande = false;
}

function altoContraste() {
    document.body.classList.toggle("contraste");
}

const leitura = new SpeechSynthesisUtterance(texto);

function lerPagina() {
    speechSynthesis.cancel();

    const texto = document.getElementById("conteudo").innerText;

    const leitura = new SpeechSynthesisUtterance(texto);

    leitura.lang = "jpn";


    leitura.rate = 0.8;

    speechSynthesis.speak(leitura);
}

function pararLeitura() {

    speechSynthesis.cancel();
}
