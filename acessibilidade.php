<?php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessibilidade</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <h1>Site Acessivel</h1>
        <p>Simplificamos o design e o código para garantir que você acesse o que precisa, do seu jeito. Conteúdo 100% acessível, legível e intuitivo.</p>
    </header>

    <main>
        <section class="controles" aria-label="Controles de Acessibilidade">
            <button onclick="aumentarTexto()">A+ Aumentar texto</button>

            <button onclick="diminuirTexto()">A- Diminuir Texto</button>

            <button onclick="altoContraste()">🌓 Alto Contraste</button>
            
            <button onclick="lerPagina()">🔊 Ler Página</button>

            <button onclick="pararLeitura()">⏹️ Parar Leitura</button>
        </section>
        
        <section id="conteudo">

            <h2>Bem-Vindo!</h2>
            <p>Este é um exemplo de uma página acessivel, que conta com diversos recursos de acessibilidade</p>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>
</html>

?>