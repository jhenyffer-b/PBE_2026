
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8f6f1">

    <title>VIA Viagens | O mundo além do comum</title>

    <!-- Fontes elegantes para a identidade visual -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* =====================================================
           1. CONFIGURAÇÕES GERAIS E PALETA DE CORES
           O fundo é claro e o marsala aparece somente nos detalhes.
           ===================================================== */

        :root {
            --fundo: #f8f6f1;
            --branco: #ffffff;
            --areia: #eee8de;
            --marsala: #762b40;
            --marsala-escuro: #551b2c;
            --texto: #252421;
            --cinza: #77736f;
            --borda: #e7e0d7;
            --verde-suave: #e5ece6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            background: var(--fundo);
            color: var(--texto);
            font-family: "DM Sans", sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        img, video {
            max-width: 100%;
        }

        img {
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, select {
            font: inherit;
        }

        button, a {
            -webkit-tap-highlight-color: transparent;
        }

        .container {
            width: min(1240px, 90%);
            margin-inline: auto;
        }

        .serif {
            font-family: "Playfair Display", Georgia, serif;
        }

        .marsala {
            color: var(--marsala);
        }

        .eyebrow {
            color: var(--marsala);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 2.5px;
            text-transform: uppercase;
        }

        .section-heading {
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(30px, 4vw, 46px);
            font-weight: 500;
            letter-spacing: -1px;
            line-height: 1.15;
        }

        .section-description {
            margin-top: 10px;
            color: var(--cinza);
            font-size: 13px;
        }

        .section-space {
            padding-block: 85px;
        }

        /* Botão principal com acabamento marsala */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px 23px;
            border: 1px solid var(--marsala);
            border-radius: 4px;
            background: var(--marsala);
            color: white;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
            transition: background .25s, transform .25s;
        }

        .btn:hover {
            background: var(--marsala-escuro);
            transform: translateY(-2px);
        }

        .btn-light {
            background: transparent;
            color: var(--marsala);
        }

        .btn-light:hover {
            background: var(--marsala);
            color: white;
        }

        /* =====================================================
           2. MENU SUPERIOR
           Cabeçalho claro, limpo e elegante.
           ===================================================== */

        .header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(248, 246, 241, .96);
            border-bottom: 1px solid var(--borda);
            backdrop-filter: blur(16px);
        }

        .nav {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }

        .logo-symbol {
            color: var(--marsala);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 36px;
            letter-spacing: -3px;
            line-height: 1;
        }

        .logo-name {
            font-size: 10px;
            letter-spacing: 3px;
            font-weight: 700;
        }

        .logo-name small {
            display: block;
            color: var(--cinza);
            font-size: 9px;
            letter-spacing: 2px;
            font-weight: 400;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 27px;
            font-size: 11px;
            color: #55514d;
        }

        .nav-links a {
            transition: color .2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--marsala);
        }

        .nav-links a.active {
            border-bottom: 1px solid var(--marsala);
            padding-bottom: 5px;
        }

        .menu-toggle {
            display: none;
            background: transparent;
            border: 1px solid var(--borda);
            padding: 9px 12px;
            cursor: pointer;
        }

        /* =====================================================
           3. ABERTURA CINEMATOGRÁFICA COM VÍDEO
           Coloque viagem.mp4 na mesma pasta do index.php.
           O poster aparece caso o vídeo demore a carregar.
           ===================================================== */

        .hero {
            min-height: 650px;
            min-height: min(740px, 90svh);
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #282521;
            color: white;
            isolation: isolate;
        }

        .hero-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        /* Degradê para deixar o texto legível sobre o vídeo */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background:
                linear-gradient(90deg,
                    rgba(22, 18, 16, .78),
                    rgba(22, 18, 16, .30) 60%,
                    rgba(22, 18, 16, .04)),
                linear-gradient(0deg,
                    rgba(20, 15, 13, .36),
                    transparent 40%);
        }

        .hero-content {
            padding-block: 100px 145px;
        }

        .hero .eyebrow {
            color: #f0c6cc;
        }

        .hero h1 {
            max-width: 790px;
            margin-block: 24px;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(48px, 8vw, 100px);
            line-height: .99;
            font-weight: 500;
            letter-spacing: -3px;
        }

        .hero h1 em {
            color: #e8b6c2;
            font-weight: 400;
        }

        .hero-description {
            max-width: 460px;
            color: #f2eeea;
            font-size: 13px;
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .hero .btn {
            background: var(--marsala);
            border-color: var(--marsala);
        }

        .video-link {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        .play-circle {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border: 1px solid rgba(255,255,255,.8);
            border-radius: 50%;
            transition: background .2s;
        }

        .video-link:hover .play-circle {
            background: var(--marsala);
        }

        .hero-caption {
            position: absolute;
            right: 5%;
            bottom: 110px;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .hero-caption span {
            color: #efc3cd;
        }

        /* =====================================================
           4. BARRA DE PESQUISA DE VIAGENS
           A busca superior transfere as informações para o formulário.
           Ela não consulta voos reais.
           ===================================================== */

        .search-wrap {
            position: relative;
            z-index: 5;
            margin-top: -40px;
        }

        .flight-search {
            display: grid;
            grid-template-columns: 1.1fr 1.1fr 1fr .8fr auto;
            align-items: center;
            gap: 5px;
            padding: 13px;
            background: var(--branco);
            border: 1px solid var(--borda);
            border-radius: 6px;
            box-shadow: 0 15px 45px rgba(51, 37, 30, .09);
        }

        .search-field {
            min-width: 0;
            padding: 8px 14px;
            border-right: 1px solid var(--borda);
        }

        .search-field label {
            display: block;
            margin-bottom: 6px;
            color: var(--texto);
            font-size: 10px;
            font-weight: 700;
        }

        .search-field input,
        .search-field select {
            width: 100%;
            min-width: 0;
            padding: 3px 0;
            border: 0;
            outline: none;
            background: transparent;
            color: var(--texto);
            font-size: 11px;
        }

        .search-field input::placeholder {
            color: #aaa39c;
        }

        .search-field:focus-within {
            box-shadow: 0 2px 0 var(--marsala);
        }

        .flight-search .btn {
            margin: 4px;
            white-space: nowrap;
        }

        /* =====================================================
           5. BENEFÍCIOS
           Ícones delicados e fundo claro.
           ===================================================== */

        .benefits {
            padding-block: 55px;
            border-bottom: 1px solid var(--borda);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
        }

        .benefit {
            padding: 10px 17px;
            text-align: center;
            border-right: 1px solid var(--borda);
        }

        .benefit:last-child {
            border: 0;
        }

        .benefit-icon {
            margin-bottom: 13px;
            color: var(--marsala);
            font-size: 27px;
        }

        .benefit h3 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 15px;
            font-weight: 600;
        }

        .benefit p {
            margin-top: 6px;
            color: var(--cinza);
            font-size: 11px;
        }

        /* =====================================================
           6. DESTINOS COM FOTOGRAFIAS
           Os valores abaixo são exemplos, não preços reais.
           ===================================================== */

        .section-header {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 28px;
        }

        .text-link {
            color: var(--marsala);
            font-size: 11px;
            font-weight: 700;
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 14px;
        }

        .destination-card {
            position: relative;
            height: 300px;
            overflow: hidden;
            background: var(--areia);
            border-radius: 5px;
            isolation: isolate;
        }

        .destination-card img {
            position: absolute;
            inset: 0;
            z-index: -2;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s;
        }

        .destination-card:hover img {
            transform: scale(1.07);
        }

        .destination-card::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(
                0deg,
                rgba(16, 13, 12, .88),
                rgba(16, 13, 12, .12) 65%,
                transparent
            );
        }

        .destination-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 16px;
            color: white;
        }

        .destination-country {
            font-size: 9px;
            letter-spacing: 1px;
        }

        .destination-info h3 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 23px;
            font-weight: 500;
        }

        .destination-price {
            margin-top: 10px;
            color: #eee8e2;
            font-size: 10px;
        }

        .destination-price strong {
            display: block;
            color: white;
            font-size: 17px;
        }

        .destination-price strong span {
            color: #efb6c3;
        }

        /* =====================================================
           7. SEÇÃO EDITORIAL COM VÍDEO
           O vídeo funciona como narrativa visual da marca.
           ===================================================== */

        .story {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            margin-top: 20px;
            background: #eee9e0;
        }

        .story-media {
            position: relative;
            min-height: 450px;
            overflow: hidden;
            background: #d8cfc3;
        }

        .story-media video,
        .story-media img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-copy {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 10%;
        }

        .story-copy h2 {
            margin-top: 14px;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(32px, 4vw, 48px);
            font-weight: 500;
            line-height: 1.15;
        }

        .story-copy p {
            margin-top: 18px;
            color: #69635e;
            font-size: 12px;
            line-height: 2;
        }

        .story-points {
            display: grid;
            gap: 13px;
            margin-top: 25px;
        }

        .story-point {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 12px;
        }

        .story-point span {
            color: var(--marsala);
            font-size: 19px;
        }

        .story-copy .btn {
            align-self: flex-start;
            margin-top: 28px;
        }

        /* =====================================================
           8. OFERTAS E EXPERIÊNCIAS
           ===================================================== */

        .offers-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 30px;
        }

        .offer-card {
            overflow: hidden;
            border: 1px solid var(--borda);
            background: var(--branco);
            transition: box-shadow .25s, transform .25s;
        }

        .offer-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(51, 37, 30, .08);
        }

        .offer-image {
            height: 220px;
            overflow: hidden;
        }

        .offer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s;
        }

        .offer-card:hover .offer-image img {
            transform: scale(1.05);
        }

        .offer-content {
            padding: 22px;
        }

        .offer-label {
            color: var(--marsala);
            font-size: 9px;
            letter-spacing: 1.5px;
            font-weight: 800;
        }

        .offer-content h3 {
            margin-top: 9px;
            font-family: "Playfair Display", Georgia, serif;
            font-size: 23px;
            font-weight: 500;
        }

        .offer-content p {
            margin-top: 8px;
            color: var(--cinza);
            font-size: 11px;
        }

        .offer-price {
            margin-top: 15px;
            font-size: 10px;
            color: var(--cinza);
        }

        .offer-price strong {
            color: var(--marsala);
            font-size: 21px;
        }

        .offer-content .text-link {
            display: inline-block;
            margin-top: 17px;
        }

        /* =====================================================
           9. FAIXA DE CHAMADA PARA AÇÃO
           ===================================================== */

        .cta {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 340px;
            overflow: hidden;
            color: white;
            background: #29241e;
            isolation: isolate;
        }

        .cta img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .cta::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(
                90deg,
                rgba(24, 19, 17, .82),
                rgba(24, 19, 17, .18)
            );
        }

        .cta h2 {
            max-width: 600px;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(35px, 5vw, 58px);
            font-weight: 500;
            line-height: 1.1;
        }

        .cta p {
            margin-block: 15px 25px;
            font-size: 13px;
            color: #f0e9e1;
        }

        /* =====================================================
           10. FORMULÁRIO DE RESERVA
           Mantém os campos necessários para o seu PHP.
           ===================================================== */

        .reservation {
            background: var(--branco);
            border: 1px solid var(--borda);
            padding: clamp(22px, 4vw, 42px);
        }

        .reservation-heading {
            margin-bottom: 25px;
        }

        .reservation-heading h2 {
            margin-top: 10px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 11px;
            font-weight: 700;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            min-height: 46px;
            padding: 12px;
            background: var(--fundo);
            border: 1px solid var(--borda);
            border-radius: 3px;
            outline: none;
            color: var(--texto);
            font-size: 12px;
            transition: border-color .2s;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--marsala);
        }

        .form-group input::placeholder {
            color: #a29a93;
        }

        .tariff {
            margin-top: 25px;
            padding: 20px;
            border: 1px solid var(--borda);
        }

        .tariff legend {
            padding-inline: 8px;
            color: var(--marsala);
            font-size: 12px;
            font-weight: 700;
        }

        .radio-option {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 8px 22px 0 0;
            font-size: 12px;
        }

        .radio-option input {
            accent-color: var(--marsala);
        }

        .form-note {
            margin-top: 12px;
            color: var(--cinza);
            font-size: 10px;
        }

        .submit-button {
            width: 100%;
            margin-top: 25px;
        }

        /* =====================================================
           11. RODAPÉ
           ===================================================== */

        .footer {
            padding-top: 55px;
            background: #eee9e0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 35px;
            padding-bottom: 40px;
        }

        .footer h3 {
            margin-bottom: 14px;
            font-size: 12px;
        }

        .footer p,
        .footer a {
            color: #77716b;
            font-size: 11px;
        }

        .footer-links {
            display: grid;
            gap: 9px;
        }

        .footer a:hover {
            color: var(--marsala);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            padding-block: 18px;
            border-top: 1px solid #dcd4c9;
            color: #77716b;
            font-size: 10px;
        }

        /* =====================================================
           12. ANIMAÇÕES AO ROLAR A PÁGINA
           ===================================================== */

        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* =====================================================
           13. ADAPTAÇÃO PARA CELULARES E TABLETS
           ===================================================== */

        @media (max-width: 1050px) {
            .destination-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .flight-search {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .flight-search .btn {
                grid-column: 1 / -1;
            }

            .benefits-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .benefit {
                border: 0;
            }
        }

        @media (max-width: 720px) {
            .nav {
                min-height: 68px;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 68px;
                left: 5%;
                right: 5%;
                padding: 22px;
                flex-direction: column;
                align-items: stretch;
                gap: 20px;
                background: var(--fundo);
                border: 1px solid var(--borda);
                box-shadow: 0 15px 30px rgba(0,0,0,.08);
            }

            .nav-links.open {
                display: flex;
            }

            .hero {
                min-height: 660px;
                min-height: 80svh;
            }

            .hero-content {
                padding-block: 100px 100px;
            }

            .hero h1 {
                font-size: clamp(45px, 11vw, 70px);
                letter-spacing: -1.8px;
            }

            .hero-caption {
                display: none;
            }

            .search-wrap {
                margin-top: -25px;
            }

            .flight-search {
                grid-template-columns: 1fr;
            }

            .search-field {
                border-right: 0;
                border-bottom: 1px solid var(--borda);
            }

            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .destination-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .destination-card {
                height: 270px;
            }

            .story {
                grid-template-columns: 1fr;
            }

            .story-media {
                min-height: 300px;
            }

            .story-copy {
                padding: 40px 6%;
            }

            .offers-grid {
                grid-template-columns: 1fr;
            }

            .offer-image {
                height: 240px;
            }

            .section-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 420px) {
            .container {
                width: 92%;
            }

            .destination-grid {
                grid-template-columns: 1fr;
            }

            .destination-card {
                height: 320px;
            }

            .benefit {
                padding-inline: 8px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .hero-actions {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        /* Respeita quem prefere menos animações no dispositivo */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>

    <!-- =====================================================
         CABEÇALHO E NAVEGAÇÃO
         ===================================================== -->

    <header class="header">
        <nav class="nav container">

            <a href="#inicio" class="logo" aria-label="VIA Viagens - Início">
                <span class="logo-symbol">VIA</span>
                <span class="logo-name">
                    V I A G E N S
                    <small>DESCUBRA O EXTRAORDINÁRIO</small>
                </span>
            </a>

            <button class="menu-toggle" id="menuToggle"
                aria-label="Abrir menu" aria-expanded="false">
                ☰
            </button>

            <div class="nav-links" id="navLinks">
                <a href="#inicio" class="active">Início</a>
                <a href="#destinos">Destinos</a>
                <a href="#experiencia">Experiências</a>
                <a href="#ofertas">Ofertas</a>
                <a href="#reserva">Reservas</a>
                <a href="#contato">Contato</a>
            </div>

        </nav>
    </header>


    <main>

        <!-- =================================================
             ABERTURA COM VÍDEO DE FUNDO
             Adicione viagem.mp4 à pasta do projeto.
             ================================================= -->

        <section class="hero" id="inicio">

            <video class="hero-video"
                autoplay muted loop playsinline
                preload="metadata"
                poster="viaviagens.png"
                aria-hidden="true">

                <source src="viagem.mp4" type="video/mp4">
            </video>

            <div class="container hero-content">

                <div class="eyebrow">
                    O mundo é o seu destino
                </div>

                <h1>
                    Viaje além<br>
                    <em>do comum.</em>
                </h1>

                <p class="hero-description">
                    Descubra destinos incríveis, viva experiências únicas
                    e conte com todo o suporte da VIA Viagens para
                    transformar seus sonhos em novas histórias.
                </p>

                <div class="hero-actions">

                    <a href="#reserva" class="btn">
                        Planejar minha viagem <span>↗</span>
                    </a>

                    <a href="#experiencia" class="video-link">
                        <span class="play-circle">▶</span>
                        DESCUBRA NOSSAS EXPERIÊNCIAS
                    </a>

                </div>

            </div>

            <div class="hero-caption">
                NOVOS HORIZONTES <span>✦</span>
            </div>

        </section>


        <!-- =================================================
             PESQUISA RÁPIDA
             Transfere os dados para o formulário de reserva.
             Não pesquisa voos em companhias aéreas.
             ================================================= -->

        <div class="container search-wrap">

            <form class="flight-search" id="buscaVoos">

                <div class="search-field">
                    <label for="buscaOrigem">Origem</label>
                    <input type="text" id="buscaOrigem"
                        placeholder="Cidade de origem" required>
                </div>

                <div class="search-field">
                    <label for="buscaDestino">Destino</label>
                    <input type="text" id="buscaDestino"
                        placeholder="Cidade de destino" required>
                </div>

                <div class="search-field">
                    <label for="buscaData">Data de embarque</label>
                    <input type="date" id="buscaData" required>
                </div>

                <div class="search-field">
                    <label for="buscaPassageiros">Passageiros</label>
                    <select id="buscaPassageiros">
                        <option value="1">1 passageiro</option>
                        <option value="2">2 passageiros</option>
                        <option value="3">3 passageiros</option>
                        <option value="4">4 passageiros</option>
                        <option value="5">5 passageiros</option>
                    </select>
                </div>

                <button type="submit" class="btn">
                    Buscar viagens ↗
                </button>

            </form>

        </div>


        <!-- =================================================
             BENEFÍCIOS DA VIA VIAGENS
             ================================================= -->

        <section class="benefits">
            <div class="container benefits-grid">

                <article class="benefit">
                    <div class="benefit-icon">♧</div>
                    <h3>Experiências exclusivas</h3>
                    <p>Roteiros para momentos únicos.</p>
                </article>

                <article class="benefit">
                    <div class="benefit-icon">◇</div>
                    <h3>Compra segura</h3>
                    <p>Proteção dos dados nas etapas de compra.</p>
                </article>

                <article class="benefit">
                    <div class="benefit-icon">☏</div>
                    <h3>Suporte ao viajante</h3>
                    <p>Informações e orientação para sua viagem.</p>
                </article>

                <article class="benefit">
                    <div class="benefit-icon">◎</div>
                    <h3>Destinos incríveis</h3>
                    <p>Inspiração para conhecer novos lugares.</p>
                </article>

                <article class="benefit">
                    <div class="benefit-icon">☆</div>
                    <h3>Novas histórias</h3>
                    <p>Momentos para guardar na memória.</p>
                </article>

            </div>
        </section>


        <!-- =================================================
             DESTINOS COM FOTOS
             As imagens são carregadas pela internet.
             Os valores são apenas exemplos para o projeto.
             ================================================= -->

        <section class="container section-space reveal" id="destinos">

            <div class="section-header">
                <div>
                    <div class="eyebrow">Curadoria de destinos</div>

                    <h2 class="section-heading">
                        Lugares que você<br>
                        precisa <span class="marsala">conhecer.</span>
                    </h2>

                    <p class="section-description">
                        Inspiração para sua próxima grande viagem.
                    </p>
                </div>

                <a href="#reserva" class="text-link">
                    Ver destinos ↗
                </a>
            </div>

            <div class="destination-grid">

                <article class="destination-card">
                    <img loading="lazy"
                        src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=700&q=85"
                        alt="Torre Eiffel em Paris">

                    <div class="destination-info">
                        <div class="destination-country">FRANÇA</div>
                        <h3>Paris</h3>
                        <div class="destination-price">
                            A partir de
                            <strong><span>R$</span> 2.499</strong>
                        </div>
                    </div>
                </article>

                <article class="destination-card">
                    <img loading="lazy"
                        src="https://images.unsplash.com/photo-1518391846015-55a9cc003b25?auto=format&fit=crop&w=700&q=85"
                        alt="Arranha-céus de Nova York">

                    <div class="destination-info">
                        <div class="destination-country">ESTADOS UNIDOS</div>
                        <h3>Nova York</h3>
                        <div class="destination-price">
                            A partir de
                            <strong><span>R$</span> 3.099</strong>
                        </div>
                    </div>
                </article>

                <article class="destination-card">
                    <img loading="lazy"
                        src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=700&q=85"
                        alt="Casas brancas em uma ilha grega">

                    <div class="destination-info">
                        <div class="destination-country">GRÉCIA</div>
                        <h3>Santorini</h3>
                        <div class="destination-price">
                            A partir de
                            <strong><span>R$</span> 3.499</strong>
                        </div>
                    </div>
                </article>

                <article class="destination-card">
                    <img loading="lazy"
                        src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=700&q=85"
                        alt="Tóquio iluminada à noite">

                    <div class="destination-info">
                        <div class="destination-country">JAPÃO</div>
                        <h3>Tóquio</h3>
                        <div class="destination-price">
                            A partir de
                            <strong><span>R$</span> 4.299</strong>
                        </div>
                    </div>
                </article>

                <article class="destination-card">
                    <img loading="lazy"
                        src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=700&q=85"
                        alt="Mar azul-turquesa nas Maldivas">

                    <div class="destination-info">
                        <div class="destination-country">MALDIVAS</div>
                        <h3>Maldivas</h3>
                        <div class="destination-price">
                            A partir de
                            <strong><span>R$</span> 3.999</strong>
                        </div>
                    </div>
                </article>

            </div>

            <p class="section-description" style="margin-top:18px">
                Valores ilustrativos, sujeitos a confirmação de tarifas,
                datas e disponibilidade.
            </p>

        </section>


        <!-- =================================================
             SEÇÃO EDITORIAL COM VÍDEO E TEXTO
             Se não houver experiencia.mp4, a imagem aparece.
             ================================================= -->

        <section class="story reveal" id="experiencia">

            <div class="story-media">

                <img
                    src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=1200&q=85"
                    alt="Paisagem de montanhas e lago"
                    loading="lazy">

                <video autoplay muted loop playsinline
                    preload="none"
                    aria-label="Vídeo de paisagens de viagem">

                    <source src="experiencia.mp4" type="video/mp4">
                </video>

            </div>

            <div class="story-copy">

                <div class="eyebrow">
                    Experiências VIA Viagens
                </div>

                <h2>
                    Mais do que viagens,<br>
                    <span class="marsala">novas histórias.</span>
                </h2>

                <p>
                    Cada destino é uma oportunidade de descobrir algo
                    extraordinário. Explore novas culturas, paisagens
                    inesquecíveis e experiências que tornam cada jornada
                    especial.
                </p>

                <div class="story-points">

                    <div class="story-point">
                        <span>✧</span>
                        Roteiros personalizados
                    </div>

                    <div class="story-point">
                        <span>✧</span>
                        Opções de viagens para diferentes perfis
                    </div>

                    <div class="story-point">
                        <span>✧</span>
                        Inspiração para explorar o mundo
                    </div>

                    <div class="story-point">
                        <span>✧</span>
                        Planejamento organizado
                    </div>

                </div>

                <a href="#reserva" class="btn">
                    Planejar minha experiência ↗
                </a>

            </div>

        </section>


        <!-- =================================================
             OFERTAS E PACOTES ILUSTRATIVOS
             ================================================= -->

        <section class="container section-space reveal" id="ofertas">

            <div class="section-header">
                <div>
                    <div class="eyebrow">Inspire sua próxima jornada</div>

                    <h2 class="section-heading">
                        Encontre sua próxima<br>
                        <span class="marsala">experiência.</span>
                    </h2>

                    <p class="section-description">
                        Ideias para transformar seus planos em viagens.
                    </p>
                </div>
            </div>

            <div class="offers-grid">

                <article class="offer-card">
                    <div class="offer-image">
                        <img loading="lazy"
                            src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=85"
                            alt="Praia tropical de águas cristalinas">
                    </div>

                    <div class="offer-content">
                        <div class="offer-label">SOL E DESCANSO</div>
                        <h3>Paraísos tropicais</h3>

                        <p>
                            Dias de tranquilidade, paisagens naturais
                            e momentos para aproveitar sem pressa.
                        </p>

                        <a href="#reserva" class="text-link">
                            Explorar destinos ↗
                        </a>
                    </div>
                </article>

                <article class="offer-card">
                    <div class="offer-image">
                        <img loading="lazy"
                            src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=85"
                            alt="Paisagem urbana de Londres">
                    </div>

                    <div class="offer-content">
                        <div class="offer-label">CULTURA E HISTÓRIA</div>
                        <h3>Cidades fascinantes</h3>

                        <p>
                            Arquitetura, gastronomia e cultura
                            para descobrir novos horizontes.
                        </p>

                        <a href="#reserva" class="text-link">
                            Planejar viagem ↗
                        </a>
                    </div>
                </article>

                <article class="offer-card">
                    <div class="offer-image">
                        <img loading="lazy"
                            src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=900&q=85"
                            alt="Montanhas sob um céu estrelado">
                    </div>

                    <div class="offer-content">
                        <div class="offer-label">AVENTURA E NATUREZA</div>
                        <h3>Novos horizontes</h3>

                        <p>
                            Paisagens extraordinárias e experiências
                            para quem gosta de explorar.
                        </p>

                        <a href="#reserva" class="text-link">
                            Encontrar destino ↗
                        </a>
                    </div>
                </article>

            </div>

        </section>


        <!-- =================================================
             BANNER FINAL COM FOTO DE FUNDO
             ================================================= -->

        <section class="cta">

            <img loading="lazy"
                src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2000&q=85"
                alt="Montanhas imponentes em uma paisagem de viagem">

            <div class="container">

                <div class="eyebrow" style="color:#f0c6cc">
                    O próximo capítulo é seu
                </div>

                <h2>
                    O mundo é grande demais<br>
                    para ficar no mesmo lugar.
                </h2>

                <p>
                    Sua próxima experiência começa com uma escolha.
                </p>

                <a href="#reserva" class="btn">
                    Começar a planejar ↗
                </a>

            </div>

        </section>


        <!-- =================================================
             FORMULÁRIO DE RESERVA
             Os campos são enviados para logica.php via POST.
             ================================================= -->

        <section class="container section-space reveal" id="reserva">

            <form action="logica.php" method="POST"
                class="reservation" id="formReserva">

                <div class="reservation-heading">
                    <div class="eyebrow">Sua próxima jornada</div>

                    <h2 class="section-heading">
                        Planeje sua <span class="marsala">viagem.</span>
                    </h2>

                    <p class="section-description">
                        Preencha os dados abaixo para registrar
                        sua solicitação de viagem.
                    </p>
                </div>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="nome_cliente">Nome completo</label>
                        <input type="text" id="nome_cliente"
                            name="nome_cliente" maxlength="120"
                            autocomplete="name" required
                            placeholder="Digite seu nome">
                    </div>

                    <div class="form-group">
                        <label for="telefone_cliente">Telefone</label>
                        <input type="tel" id="telefone_cliente"
                            name="telefone_cliente" maxlength="20"
                            autocomplete="tel" required
                            placeholder="(00) 00000-0000">
                    </div>

                    <div class="form-group">
                        <label for="cpf_cliente">CPF</label>
                        <input type="text" id="cpf_cliente"
                            name="cpf_cliente" inputmode="numeric"
                            maxlength="14" required
                            placeholder="000.000.000-00">
                    </div>

                    <div class="form-group">
                        <label for="origem">Cidade de origem</label>
                        <input type="text" id="origem" name="origem"
                            maxlength="100" required
                            placeholder="De onde você vai sair?">
                    </div>

                    <div class="form-group">
                        <label for="destino">Destino</label>
                        <input type="text" id="destino" name="destino"
                            maxlength="100" required
                            placeholder="Para onde deseja viajar?">
                    </div>

                    <div class="form-group">
                        <label for="data_embarque">Data de embarque</label>
                        <input type="date" id="data_embarque"
                            name="data_embarque" required>
                    </div>

                    <div class="form-group">
                        <label for="horario_embarque">Horário de embarque</label>
                        <input type="time" id="horario_embarque"
                            name="horario_embarque" required>
                    </div>

                    <div class="form-group">
                        <label for="passagem">Classe da passagem</label>
                        <select id="passagem" name="passagem" required>
                            <option value="">Selecione uma classe</option>
                            <option value="economica">Classe Econômica</option>
                            <option value="premium">Econômica Premium</option>
                            <option value="executiva">Classe Executiva</option>
                            <option value="primeira_classe">Primeira Classe</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tipo_voo">Tipo de voo</label>
                        <select id="tipo_voo" name="tipo_voo" required>
                            <option value="">Selecione o tipo</option>
                            <option value="ida">Somente ida</option>
                            <option value="volta">Somente volta</option>
                            <option value="ida_volta">Ida e volta</option>
                        </select>
                    </div>

                </div>

                <fieldset class="tariff">

                    <legend>Modalidade de tarifa</legend>

                    <label class="radio-option">
                        <input type="radio" name="tipo"
                            value="meia" required>
                        Meia
                    </label>

                    <label class="radio-option">
                        <input type="radio" name="tipo"
                            value="inteira" required>
                        Inteira
                    </label>

                    <p class="form-note">
                        A disponibilidade e a aplicação de descontos
                        dependem das regras da tarifa e do serviço.
                    </p>

                </fieldset>

                <p class="form-note">
                    O envio registra uma solicitação. Não garante
                    reserva, disponibilidade ou preço.
                </p>

                <button type="submit" class="btn submit-button">
                    Enviar solicitação de viagem ↗
                </button>

            </form>

        </section>

    </main>


    <!-- =====================================================
         RODAPÉ COM LINKS E INFORMAÇÕES
         ===================================================== -->

    <footer class="footer" id="contato">

        <div class="container">

            <div class="footer-grid">

                <div>
                    <a href="#inicio" class="logo">
                        <span class="logo-symbol">VIA</span>
                        <span class="logo-name">
                            V I A G E N S
                            <small>DESCUBRA O EXTRAORDINÁRIO</small>
                        </span>
                    </a>

                    <p style="margin-top:16px;max-width:260px">
                        Descubra novos destinos, viva novas histórias
                        e transforme sua maneira de viajar.
                    </p>
                </div>

                <div>
                    <h3>Navegação</h3>

                    <div class="footer-links">
                        <a href="#inicio">Início</a>
                        <a href="#destinos">Destinos</a>
                        <a href="#experiencia">Experiências</a>
                        <a href="#ofertas">Ofertas</a>
                    </div>
                </div>

                <div>
                    <h3>Planejamento</h3>

                    <div class="footer-links">
                        <a href="#reserva">Solicitar viagem</a>
                        <a href="#destinos">Conhecer destinos</a>
                        <a href="#contato">Contato</a>
                    </div>
                </div>

                <div>
                    <h3>Sobre o projeto</h3>

                    <p>
                        Projeto acadêmico de desenvolvimento web
                        utilizando HTML, CSS, JavaScript e PHP.
                    </p>
                </div>

            </div>

            <div class="footer-bottom">
                <span>
                    © <span id="anoAtual"></span> VIA Viagens
                </span>

                <span>
                    Projeto demonstrativo · Todos os direitos reservados
                </span>
            </div>

        </div>

    </footer>


    <!-- =====================================================
         JAVASCRIPT
         Responsável pelas interações do site.
         ===================================================== -->

    <script>

        // 1. Atualiza automaticamente o ano do rodapé.
        document.getElementById("anoAtual").textContent =
            new Date().getFullYear();


        // 2. Abre e fecha o menu em telas pequenas.
        const menuToggle = document.getElementById("menuToggle");
        const navLinks = document.getElementById("navLinks");

        menuToggle.addEventListener("click", function () {

            const aberto = navLinks.classList.toggle("open");

            menuToggle.setAttribute("aria-expanded", String(aberto));
            menuToggle.setAttribute(
                "aria-label",
                aberto ? "Fechar menu" : "Abrir menu"
            );

            menuToggle.textContent = aberto ? "✕" : "☰";

        });


        // 3. Fecha o menu depois que o visitante escolhe uma seção.
        navLinks.querySelectorAll("a").forEach(function (link) {

            link.addEventListener("click", function () {

                navLinks.classList.remove("open");

                menuToggle.setAttribute("aria-expanded", "false");
                menuToggle.setAttribute("aria-label", "Abrir menu");

                menuToggle.textContent = "☰";

            });

        });


        // 4. Impede que a pessoa selecione uma data passada.
        // A data é calculada usando a data local do dispositivo.
        const hoje = new Date();

        const dataMinima = [
            hoje.getFullYear(),
            String(hoje.getMonth() + 1).padStart(2, "0"),
            String(hoje.getDate()).padStart(2, "0")
        ].join("-");

        document.getElementById("buscaData").min = dataMinima;
        document.getElementById("data_embarque").min = dataMinima;


        // 5. A pesquisa visual transfere origem, destino e data
        // para os campos correspondentes do formulário.
        // Ela não faz uma pesquisa real em companhias aéreas.
        document.getElementById("buscaVoos").addEventListener(
            "submit",
            function (event) {

                event.preventDefault();

                document.getElementById("origem").value =
                    document.getElementById("buscaOrigem").value;

                document.getElementById("destino").value =
                    document.getElementById("buscaDestino").value;

                document.getElementById("data_embarque").value =
                    document.getElementById("buscaData").value;

                // Leva o visitante até o formulário de reserva.
                document.getElementById("reserva").scrollIntoView({
                    behavior: "smooth"
                });

            }
        );


        // 6. Formata o CPF enquanto a pessoa digita.
        // Esta máscara visual não verifica se o CPF é válido.
        const cpf = document.getElementById("cpf_cliente");

        cpf.addEventListener("input", function () {

            let numeros = this.value
                .replace(/\D/g, "")
                .slice(0, 11);

            if (numeros.length > 9) {

                numeros = numeros.replace(
                    /^(\d{3})(\d{3})(\d{3})(\d{1,2})$/,
                    "$1.$2.$3-$4"
                );

            } else if (numeros.length > 6) {

                numeros = numeros.replace(
                    /^(\d{3})(\d{3})(\d{1,3})$/,
                    "$1.$2.$3"
                );

            } else if (numeros.length > 3) {

                numeros = numeros.replace(
                    /^(\d{3})(\d{1,3})$/,
                    "$1.$2"
                );

            }

            this.value = numeros;

        });


        // 7. Verifica se o CPF contém 11 números antes de enviar.
        // A validação definitiva deve ser realizada também no PHP.
        document.getElementById("formReserva").addEventListener(
            "submit",
            function (event) {

                const numerosCPF = cpf.value.replace(/\D/g, "");

                if (numerosCPF.length !== 11) {

                    event.preventDefault();

                    alert("Digite um CPF com 11 números.");

                    cpf.focus();

                }

            }
        );


        // 8. Anima as seções conforme elas entram na tela.
        // IntersectionObserver evita animações desnecessárias
        // em seções que ainda estão fora da área visível.
        const secoes = document.querySelectorAll(".reveal");

        if ("IntersectionObserver" in window) {

            const observador = new IntersectionObserver(
                function (entradas) {

                    entradas.forEach(function (entrada) {

                        if (entrada.isIntersecting) {

                            entrada.target.classList.add("visible");

                            observador.unobserve(entrada.target);

                        }

                    });

                },
                { threshold: 0.08 }
            );

            secoes.forEach(function (secao) {
                observador.observe(secao);
            });

        } else {

            // Alternativa para navegadores sem suporte.
            secoes.forEach(function (secao) {
                secao.classList.add("visible");
            });

        }

    </script>

</body>
</html>





