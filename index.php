<?php
$config = parse_ini_file("./.ini", true);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStock</title>
    <link rel="stylesheet" href="./src/styles/globals.css">
    <link rel="stylesheet" href="./src/styles/header.css">
    <link rel="stylesheet" href="./src/styles/footer.css">
    <link rel="stylesheet" href="./src/styles/home.css">

    <!-- choose one -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body>
    <?php include "./src/components/header.php";?>
    <section class="section1">
        <div class="section1texto">
            <h1>Bem-Vindo ao TeckStock</h1>
            <h5>Sua plataforma completa para suporte técnico e controle de ativos.</h5>
            <a class="btn" href="#">Experimente Agora</a>
        </div>
        <img src="<?= $config["FILES"]["IMAGES"]; ?>\imagem1.png" alt="Homem no PC">
    </section>
    <div class="divisao"></div>
    <section class="section2">
        <div class="section2textocontainer">
            <div class="section2texto">
                <h2 style="font-weight: 500;">Por que escolher a TechStock?</h2>
                <br>
                <ul>
                    <li><b>Suporte Rápido e Eficiente: </b>"Resolvemos seus problemas técnicos de forma rápida e eficiente, garantindo que você possa focar no que realmente importa."</li>
                    <li><b>Monitoramento em Tempo Real: </b>"Mantenha o controle total de sua infraestrutura de TI com nosso sistema de monitoramento contínuo."</li>
                    <li><b>Portal de Autoatendimento: </b>"Acesso fácil a tutoriais, FAQs e guias para resolver problemas comuns de maneira independente."</li>
                    <li><b>Relatórios Detalhados: </b>"Gere relatórios completos para análise de desempenho e identificação de áreas de melhoria."</li>
                </ul>
            </div>
        </div>
        <img class="section2imagem" src="<?= $config["FILES"]["IMAGES"]; ?>\imagem2.png" alt="Homem no PC">
    </section>
    <div class="divisao"></div>
    <section class="section3">
        <h2>Funcionalidades que fazem a diferença</h2>
        <div class="table">
            <ul>
                <li><b>Sistema de Chamados: </b>"Abertura e acompanhamento de chamados de suporte de maneira simples e organizada."</li>
                <li><b>Chat ao Vivo: </b>"Suporte em tempo real para resolver seus problemas de forma imediata."</li>
            </ul>
            <ul>
                <li><b>Painel de Controle: </b>"Visão geral do status dos sistemas críticos e infraestrutura de TI."</li>
                <li><b>Alertas e Notificações: </b>"Receba alertas instantâneos sobre incidentes críticos e garanta a continuidade dos serviços."</li>
            </ul>
        </div>
    </section>
    <section class="section4">
        <form action="" method="post">
            <h3>Entre em Contato</h3>
            <p>Tem alguma dúvida ou quer saber mais? Nossa equipe está pronta para ajudar.</p>
            <div class="inputContato">
                <i data-feather="user"></i>
                <input class="inputContatojs" type="text" name="nome" placeholder="Nome...">
            </div>
            <div class="inputContato">
                <i data-feather="mail"></i>
                <input class="inputContatojs" type="text" name="email" placeholder="Email...">
            </div>
            <div class="inputContato">
                <i data-feather="edit"></i>
                <input class="inputContatojs" type="text" name="mensagem" placeholder="Mensagem...">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </section>
    
    <?php include "./src/components/footer.php";?>
    <script>
        feather.replace();
        
        Array.from(document.getElementsByClassName("inputContatojs")).forEach(element => {
            console.log("Evento: ")
            element.addEventListener("focus", e => {
                element.parentElement.classList.add("focoInputContato")
            })
            element.addEventListener("blur", e => {
                element.parentElement.classList.remove("focoInputContato")
            })
        });
    </script>
</body>
</html>