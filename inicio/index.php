<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* =========================
   CONFIGURAÇÕES GERAIS
========================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #080b14;
    --bg-card: #111625;
    --bg-card-hover: #171d30;
    --primary: #6366f1;
    --primary-hover: #4f46e5;
    --secondary: #22d3ee;
    --text: #ffffff;
    --text-muted: #a7afc2;
    --border: rgba(255, 255, 255, 0.08);
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
    min-height: 100vh;
}


/* =========================
   TÍTULO PRINCIPAL
========================= */

.title {
    max-width: 1000px;
    margin: 90px auto 25px;
    padding: 0 25px;

    text-align: center;
    font-size: clamp(2rem, 5vw, 4rem);
    line-height: 1.1;
    font-weight: 800;

    background: linear-gradient(
        90deg,
        #ffffff,
        #a5b4fc,
        #67e8f9
    );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}


/* =========================
   SUBTÍTULO
========================= */

.subtitle {
    max-width: 800px;
    margin: 0 auto 60px;
    padding: 0 25px;

    text-align: center;
    color: var(--text-muted);

    font-size: 1.2rem;
    font-weight: 400;
}


/* =========================
   CARD PRINCIPAL
========================= */

.top {
    max-width: 1000px;
    margin: auto;
    padding: 45px;

    background: linear-gradient(
        145deg,
        #111625,
        #0d111d
    );

    border: 1px solid var(--border);
    border-radius: 24px;

    box-shadow:
        0 20px 60px rgba(0, 0, 0, 0.35);

    transition: 0.3s;
}

.top:hover {
    transform: translateY(-4px);
    background: var(--bg-card-hover);
}


/* =========================
   TÍTULO DO CARD
========================= */

.top h3 {
    margin-bottom: 30px;

    font-size: 1.5rem;
    line-height: 1.3;

    color: #ffffff;
}


/* =========================
   LISTA DE BENEFÍCIOS
========================= */

.top ul {
    list-style: none;

    display: grid;
    gap: 18px;
}

.top li {
    position: relative;

    padding: 18px 20px 18px 55px;

    background: rgba(255, 255, 255, 0.03);

    border: 1px solid var(--border);
    border-radius: 14px;

    color: var(--text-muted);

    transition: 0.25s;
}

.top li::before {
    content: "✓";

    position: absolute;
    left: 18px;
    top: 50%;

    transform: translateY(-50%);

    width: 25px;
    height: 25px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: var(--primary);
    color: white;

    font-weight: bold;
}

.top li:hover {
    border-color: var(--primary);
    transform: translateX(5px);
}


/* =========================
   ÁREA DE CONTATO
========================= */

.contato {
    max-width: 1000px;

    margin: 60px auto 30px;
    padding: 55px 30px;

    text-align: center;

    border-radius: 24px;

    background:
        radial-gradient(
            circle at top,
            rgba(99, 102, 241, 0.25),
            transparent 60%
        ),
        #111625;

    border: 1px solid var(--border);
}

.contato h2 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.contato h3 {
    color: var(--text-muted);
    font-weight: 400;
    margin-bottom: 25px;
}


/* =========================
   BOTÃO WHATSAPP
========================= */

.whatsapp {
    border: none;
    border-radius: 12px;

    background: #25d366;

    padding: 15px 35px;

    cursor: pointer;

    box-shadow:
        0 10px 30px rgba(37, 211, 102, 0.2);

    transition: 0.25s;
}

.whatsapp:hover {
    transform: translateY(-3px);

    box-shadow:
        0 15px 35px rgba(37, 211, 102, 0.35);
}

.whatsapp a {
    color: white;
    text-decoration: none;

    font-size: 1rem;
    font-weight: 700;
}


/* =========================
   REDES SOCIAIS
========================= */

.midia {
    max-width: 1000px;

    margin: 30px auto 60px;
    padding: 25px;

    text-align: center;

    color: var(--text-muted);

    border-top: 1px solid var(--border);
}

.midia h4 {
    font-size: 1rem;
    font-weight: 400;
}


/* =========================
   INSTAGRAM
========================= */

.intagrm {
    display: block;

    margin: 0 auto 60px;

    border: none;
    border-radius: 12px;

    padding: 12px 30px;

    cursor: pointer;

    background: linear-gradient(
        45deg,
        #f58529,
        #dd2a7b,
        #8134af
    );

    transition: 0.25s;
}

.intagrm:hover {
    transform: translateY(-3px);

    box-shadow:
        0 10px 30px rgba(221, 42, 123, 0.25);
}

.intagrm a {
    color: white;
    text-decoration: none;

    font-weight: bold;
}


/* =========================
   RESPONSIVIDADE
========================= */

@media (max-width: 700px) {

    .title {
        margin-top: 50px;
    }

    .subtitle {
        font-size: 1rem;
        margin-bottom: 35px;
    }

    .top {
        margin: 0 15px;
        padding: 25px;
    }

    .top h3 {
        font-size: 1.25rem;
    }

    .top li {
        padding: 15px 15px 15px 50px;
    }

    .contato {
        margin: 40px 15px 25px;
        padding: 40px 20px;
    }

    .contato h2 {
        font-size: 1.5rem;
    }
}
    </style>
</head>
<body>
    <h1 class="title">Toda empresa precisa de organização e um processo definido e organizados para funcionar de forma eficiente e leve</h1>
    <br>
    <h2 class="subtitle">Pensando nisso a/o [nome do sistema] é a escolha ideal para empresas que precisam de processos mais organizados</h2>
    <br>
    <div class="top">
        <h3>Nós oferecemos uma maior organização e automação dos seus processos com nosso CRM atualizado</h3>
        <ul>
            <li>Dashboard dos seus clientes e vendas</li>
            <li>Automatização de seus processos de atendimento com o WhatSapp</li>
            <li>Envios automaticos de promoções e mensagens de datas especiais por E-mail e/ou WhatSapp</li>
            <li>Banco de dados dos seus clientes desde que eles que seus dados fiquem salvos</li>
        </ul>
    </div>
    <br>
    <div class="contato">
        <h2>Gostou da ideia de ter uma empresa mais organizada?</h2>
        <h3>Então entre em contato com a gente: </h3>
        <br>
        <button class="whatsapp"><a href="http://">WhatSapp</a></button>
    </div>
    <div class="midia">
        <h4>Acompanhe a gente também pelas nossas redes sociais</h4>

    </div>
</body><button class="intagrm"><a href="http://">Instagram</a></button>
</html>