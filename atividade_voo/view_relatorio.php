
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Relatório de Voos | VIA Viagens</title>

    <style>
        /* =========================================
           CONFIGURAÇÕES GERAIS
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --marsala: #762b40;
            --marsala-escuro: #54202f;
            --marsala-claro: #a66b7b;
            --bege: #f8f6f1;
            --bege-escuro: #eee8df;
            --branco: #ffffff;
            --texto: #30272a;
            --texto-suave: #82777a;
            --borda: rgba(118, 43, 64, 0.12);
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--bege);
            color: var(--texto);
            line-height: 1.6;
        }

        /* =========================================
           CABEÇALHO FIXO COM LINHA DELICADA
        ========================================= */

        .header {
            position: sticky;
            top: 0;
            z-index: 100;

            background: rgba(248, 246, 241, 0.96);

            border-bottom: 1px solid rgba(118, 43, 64, 0.10);

            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .nav {
            min-height: 70px;
            max-width: 1450px;
            margin: 0 auto;
            padding: 0 5%;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .logo {
            color: var(--marsala);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 27px;
            font-weight: bold;
            letter-spacing: 2px;
            text-decoration: none;
        }

        .logo span {
            color: var(--texto-suave);
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: 10px;
            letter-spacing: 4px;
            display: block;
            margin-top: -5px;
            font-weight: normal;
        }

        .nav-link {
            color: var(--marsala);
            font-size: 13px;
            text-decoration: none;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--marsala-claro);
        }

        /* =========================================
           BANNER PRINCIPAL
        ========================================= */

        .banner {
            width: 100%;
            height: 350px;
            display: block;
            object-fit: cover;
            object-position: center;
        }

        /* =========================================
           APRESENTAÇÃO DO RELATÓRIO
        ========================================= */

        .introducao {
            text-align: center;
            padding: 65px 20px 35px;
        }

        .sobretitulo {
            color: var(--marsala-claro);
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 15px;
        }

        .introducao h1 {
            color: var(--marsala);
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(32px, 4vw, 48px);
            font-weight: normal;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .introducao p {
            color: var(--texto-suave);
            font-size: 14px;
        }

        .detalhe {
            width: 55px;
            height: 1px;
            background: var(--marsala-claro);
            margin: 25px auto 0;
        }

        /* =========================================
           CARTÃO DO RELATÓRIO
        ========================================= */

        .conteudo {
            max-width: 1500px;
            margin: 0 auto;
            padding: 20px 5% 75px;
        }

        .cartao {
            background: var(--branco);
            border: 1px solid var(--borda);
            border-radius: 4px;
            padding: 35px;
            box-shadow: 0 15px 45px rgba(65, 35, 43, 0.05);
        }

        .cartao-topo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 28px;
        }

        .cartao-topo h2 {
            color: var(--marsala);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 25px;
            font-weight: normal;
        }

        .cartao-topo p {
            color: var(--texto-suave);
            font-size: 12px;
            margin-top: 5px;
        }

        .selo {
            border: 1px solid var(--borda);
            color: var(--marsala);
            padding: 8px 13px;
            font-size: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        /* =========================================
           TABELA E INFORMAÇÕES
        ========================================= */

        .tabela-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        thead {
            background: var(--marsala);
            color: var(--branco);
        }

        th {
            padding: 17px 14px;
            text-align: left;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            white-space: nowrap;
        }

        td {
            padding: 20px 14px;
            border-bottom: 1px solid #eee8e8;
            color: var(--texto);
            font-size: 13px;
            vertical-align: middle;
        }

        tbody tr {
            transition: background 0.25s;
        }

        tbody tr:hover {
            background: #fbf7f7;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .destaque {
            color: var(--marsala);
            font-weight: 600;
        }

        .etiqueta {
            display: inline-block;
            padding: 6px 11px;
            background: #f7edf0;
            color: var(--marsala);
            border: 1px solid rgba(118, 43, 64, 0.10);
            font-size: 11px;
            white-space: nowrap;
        }

        /* =========================================
           BOTÕES
        ========================================= */

        .acoes {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--borda);
        }

        .observacao {
            color: var(--texto-suave);
            font-size: 12px;
        }

        .botoes {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .botao {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border: 1px solid var(--marsala);
            font-family: inherit;
            font-size: 12px;
            letter-spacing: 0.5px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .botao-principal {
            background: var(--marsala);
            color: var(--branco);
        }

        .botao-principal:hover {
            background: var(--marsala-escuro);
        }

        .botao-secundario {
            background: transparent;
            color: var(--marsala);
        }

        .botao-secundario:hover {
            background: #f7edf0;
        }

        /* =========================================
           RODAPÉ
        ========================================= */

        .footer {
            background: #f0ebe5;
            border-top: 1px solid var(--borda);
            text-align: center;
            padding: 30px 20px;
        }

        .footer-logo {
            font-family: Georgia, "Times New Roman", serif;
            font-size: 20px;
            letter-spacing: 2px;
            color: var(--marsala);
            margin-bottom: 8px;
        }

        .footer p {
            color: var(--texto-suave);
            font-size: 11px;
        }

        /* =========================================
           RESPONSIVIDADE
        ========================================= */

        @media (max-width: 768px) {
            .nav {
                min-height: 65px;
                padding: 0 20px;
            }

            .logo {
                font-size: 23px;
            }

            .banner {
                height: 220px;
            }

            .introducao {
                padding: 45px 20px 25px;
            }

            .conteudo {
                padding: 15px 15px 45px;
            }

            .cartao {
                padding: 22px 16px;
            }

            .cartao-topo {
                align-items: flex-start;
                flex-direction: column;
            }

            .acoes {
                align-items: stretch;
                flex-direction: column;
            }

            .botoes {
                flex-direction: column;
            }

            .botao {
                width: 100%;
            }
        }

        /* =========================================
           ESTILO PARA IMPRESSÃO
        ========================================= */

        @media print {
            body {
                background: white;
            }

            .header {
                position: static;
                background: white;
            }

            .nav-link,
            .acoes,
            .footer {
                display: none;
            }

            .banner {
                height: 160px;
            }

            .introducao {
                padding: 25px 10px;
            }

            .conteudo {
                max-width: 100%;
                padding: 10px;
            }

            .cartao {
                padding: 10px;
                box-shadow: none;
                border: none;
            }

            .tabela-wrapper {
                overflow: visible;
            }

            table {
                min-width: 0;
            }

            th,
            td {
                padding: 8px 5px;
                font-size: 9px;
                overflow-wrap: anywhere;
            }

            th {
                print-color-adjust: exact;
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="header">
        <nav class="nav">

            <a href="index.php" class="logo">
                VIA
                <span>VIAGENS</span>
            </a>

            <a href="index.php" class="nav-link">
                ← VOLTAR AO SITE
            </a>

        </nav>
    </header>

    <!-- BANNER DA EMPRESA -->
    <img
        src="viaviagens.png"
        alt="VIA Viagens — experiências pelo mundo"
        class="banner"
    >

    <!-- TÍTULO -->
    <section class="introducao">

        <div class="sobretitulo">
            VIA Viagens · Registro de viagem
        </div>

        <h1>Dados do voo</h1>

        <p>
            Confira abaixo as informações registradas para sua viagem.
        </p>

        <div class="detalhe"></div>

    </section>

    <!-- RELATÓRIO -->
    <main class="conteudo">

        <section class="cartao">

            <div class="cartao-topo">

                <div>
                    <h2>Informações do passageiro</h2>

                    <p>
                        Resumo dos dados enviados pelo formulário.
                    </p>
                </div>

                <span class="selo">
                    Relatório de viagem
                </span>

            </div>

            <div class="tabela-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Destino</th>
                            <th>Horário de embarque</th>
                            <th>Passagem</th>
                            <th>Tipo de voo</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <td class="destaque">
                                <?= htmlspecialchars($nome_cliente ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($telefone_cliente ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($cpf_cliente ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </td>

                            <td class="destaque">
                                <?= htmlspecialchars($destino ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($horario_embarque ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </td>

                            <td>
                                <span class="etiqueta">
                                    <?= htmlspecialchars($passagem ?? '', ENT_QUOTES, 'UTF-8') ?>
                                </span>
                            </td>

                            <td>
                                <?= htmlspecialchars($tipo_voo ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </td>

                            <td>
                                <span class="etiqueta">
                                    <?= htmlspecialchars($tipo ?? '', ENT_QUOTES, 'UTF-8') ?>
                                </span>
                            </td>

                        </tr>
                    </tbody>

                </table>

            </div>

            <!-- AÇÕES DO RELATÓRIO -->
            <div class="acoes">

                <p class="observacao">
                    VIA Viagens — Sua próxima experiência começa aqui.
                </p>

                <div class="botoes">

                    <a href="index.php" class="botao botao-secundario">
                        Voltar ao início
                    </a>

                    <button
                        type="button"
                        class="botao botao-principal"
                        onclick="window.print()"
                    >
                        Imprimir relatório
                    </button>

                </div>

            </div>

        </section>

    </main>

    <!-- RODAPÉ -->
    <footer class="footer">

        <div class="footer-logo">
            VIA VIAGENS
        </div>

        <p>
            © 2026 VIA Viagens. Todos os direitos reservados.
        </p>

    </footer>

</body>
</html>

