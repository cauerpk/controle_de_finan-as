<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #050816;
    --primary: #6366f1;
    --cyan: #22d3ee;
    --text: #ffffff;
    --muted: #a7afc2;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    overflow-x: hidden;
    position: relative;
}


/* =========================
   FUNDO ANIMADO
========================= */

body::before {
    content: "";

    position: fixed;
    inset: 0;

    background:
        radial-gradient(
            circle at var(--mouse-x, 50%) var(--mouse-y, 30%),
            rgba(99, 102, 241, 0.18),
            transparent 25%
        );

    pointer-events: none;
    z-index: -1;

    transition: background 0.15s ease;
}


/* Luzes decorativas */

body::after {
    content: "";

    position: fixed;

    width: 500px;
    height: 500px;

    top: -200px;
    left: -150px;

    background: rgba(99, 102, 241, 0.15);

    filter: blur(120px);

    border-radius: 50%;

    animation: floatLight 8s ease-in-out infinite alternate;

    pointer-events: none;
    z-index: -2;
}

@keyframes floatLight {
    from {
        transform: translate(0, 0);
    }

    to {
        transform: translate(250px, 180px);
    }
}


/* Segunda luz */

.title::before {
    content: "";

    position: absolute;

    width: 350px;
    height: 350px;

    background: rgba(34, 211, 238, 0.10);

    filter: blur(100px);

    border-radius: 50%;

    z-index: -1;
}


/* =========================
   TÍTULO
========================= */

.title {
    position: relative;

    max-width: 1000px;

    margin: 100px auto 25px;

    padding: 0 25px;

    text-align: center;

    font-size: clamp(2.2rem, 5vw, 4.5rem);

    line-height: 1.05;

    font-weight: 800;

    background: linear-gradient(
        90deg,
        #ffffff,
        #a5b4fc,
        #67e8f9
    );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    animation: titleAppear 1s ease forwards;
}

@keyframes titleAppear {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* =========================
   SUBTÍTULO
========================= */

.subtitle {
    max-width: 800px;

    margin: 0 auto 70px;

    padding: 0 25px;

    text-align: center;

    color: var(--muted);

    font-size: 1.2rem;

    font-weight: 400;

    animation: fadeUp 1s ease 0.2s both;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* =========================
   CARD CRM
========================= */

.top {
    position: relative;

    max-width: 1000px;

    margin: auto;

    padding: 45px;

    background: rgba(17, 22, 37, 0.65);

    backdrop-filter: blur(20px);

    border: 1px solid rgba(255, 255, 255, 0.08);

    border-radius: 25px;

    box-shadow:
        0 30px 80px rgba(0, 0, 0, 0.4);

    transition:
        transform 0.3s ease,
        border-color 0.3s ease;

    animation: fadeUp 1s ease 0.4s both;
}

.top:hover {
    transform: translateY(-8px);

    border-color: rgba(99, 102, 241, 0.5);
}


/* Brilho do card */

.top::before {
    content: "";

    position: absolute;

    inset: -1px;

    border-radius: inherit;

    background: linear-gradient(
        120deg,
        transparent,
        rgba(99, 102, 241, 0.3),
        transparent
    );

    opacity: 0;

    transition: 0.4s;

    pointer-events: none;
}

.top:hover::before {
    opacity: 1;
}


/* =========================
   TÍTULO DO CARD
========================= */

.top h3 {
    font-size: 1.5rem;

    line-height: 1.4;

    margin-bottom: 30px;
}


/* =========================
   BENEFÍCIOS
========================= */

.top ul {
    list-style: none;

    display: grid;

    gap: 15px;
}

.top li {
    position: relative;

    padding: 18px 20px 18px 55px;

    background: rgba(255, 255, 255, 0.035);

    border: 1px solid rgba(255, 255, 255, 0.06);

    border-radius: 14px;

    color: var(--muted);

    transition: 0.3s;
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

    background: linear-gradient(
        135deg,
        var(--primary),
        var(--cyan)
    );

    color: white;

    font-weight: bold;
}

.top li:hover {
    transform: translateX(8px);

    background: rgba(99, 102, 241, 0.08);

    border-color: rgba(99, 102, 241, 0.3);

    color: white;
}


/* =========================
   CONTATO
========================= */

.contato {
    max-width: 1000px;

    margin: 70px auto 30px;

    padding: 60px 30px;

    text-align: center;

    position: relative;

    overflow: hidden;

    background:
        radial-gradient(
            circle at center,
            rgba(99, 102, 241, 0.18),
            transparent 60%
        ),
        rgba(17, 22, 37, 0.7);

    backdrop-filter: blur(20px);

    border: 1px solid rgba(255, 255, 255, 0.08);

    border-radius: 25px;
}

.contato h2 {
    font-size: 2rem;

    margin-bottom: 10px;
}

.contato h3 {
    color: var(--muted);

    font-weight: 400;

    margin-bottom: 30px;
}


/* =========================
   BOTÃO WHATSAPP
========================= */

.whatsapp {
    border: none;

    padding: 16px 35px;

    border-radius: 12px;

    background: #25d366;

    cursor: pointer;

    transition: 0.3s;

    position: relative;

    overflow: hidden;
}

.whatsapp:hover {
    transform: translateY(-4px) scale(1.03);

    box-shadow:
        0 15px 40px rgba(37, 211, 102, 0.3);
}

.whatsapp a {
    color: white;

    text-decoration: none;

    font-weight: bold;

    font-size: 1rem;
}


/* =========================
   REDES SOCIAIS
========================= */

.midia {
    max-width: 1000px;

    margin: 40px auto;

    padding: 30px;

    text-align: center;

    color: var(--muted);

    border-top: 1px solid rgba(255, 255, 255, 0.07);
}

.intagrm {
    display: block;

    margin: 0 auto 70px;

    padding: 13px 30px;

    border: none;

    border-radius: 12px;

    background: linear-gradient(
        45deg,
        #f58529,
        #dd2a7b,
        #8134af
    );

    cursor: pointer;

    transition: 0.3s;
}

.intagrm:hover {
    transform: translateY(-4px) scale(1.03);

    box-shadow:
        0 15px 35px rgba(221, 42, 123, 0.3);
}

.intagrm a {
    color: white;

    text-decoration: none;

    font-weight: bold;
}


/* =========================
   MOBILE
========================= */

@media (max-width: 700px) {

    .title {
        margin-top: 60px;

        font-size: 2.4rem;
    }

    .subtitle {
        font-size: 1rem;

        margin-bottom: 40px;
    }

    .top {
        margin: 0 15px;

        padding: 25px;
    }

    .top h3 {
        font-size: 1.25rem;
    }

    .contato {
        margin: 40px 15px;

        padding: 45px 20px;
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
    <h2 class="subtitle">Pensando nisso a NexaFlow é a escolha ideal para empresas que precisam de processos mais organizados</h2>
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

<script>

const body = document.body;

document.addEventListener("mousemove", (event) => {

    const x = (event.clientX / window.innerWidth) * 100;
    const y = (event.clientY / window.innerHeight) * 100;

    body.style.setProperty("--mouse-x", `${x}%`);
    body.style.setProperty("--mouse-y", `${y}%`);

});

</script>