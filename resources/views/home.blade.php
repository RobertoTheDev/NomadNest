<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NomadNest</title>
    <style>
        /* Fundo escuro e texto claro para o modo escuro */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Fundo escuro */
            color: #e0e0e0; /* Texto claro */
        }

        header {
            background-color: #1f1f1f; /* Escuro suave para o cabeçalho */
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        header a:hover {
            text-decoration: underline;
        }

        /* Banner escuro */
        .banner {
            background-color: #333; /* Escuro para o banner */
            color: #fff; /* Texto branco */
            text-align: center;
            padding: 80px 20px;
            border-bottom: 1px solid #444; /* Linha sutil de separação */
        }

        .banner h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .banner p {
            font-size: 20px;
            font-weight: 300;
            margin-bottom: 30px;
        }

        .content {
            padding: 40px 20px;
            text-align: center;
            background-color: #121212; /* Fundo escuro para o conteúdo */
        }

        .content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ddd; /* Título em cinza claro */
        }

        .content p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #bbb; /* Texto em cinza médio */
        }

        .links a {
            background-color: #6504a0; /* Verde suave para os links */
            color: #fff;
            padding: 12px 25px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .links a:hover {
            background-color: #5b04dd; /* Verde mais escuro ao passar o mouse */
        }

        footer {
            background-color: #1f1f1f; /* Escuro para o rodapé */
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 16px;
            font-weight: 300;
        }

        /* Responsividade para telas menores */
        @media (max-width: 768px) {
            .banner h1 {
                font-size: 36px;
            }
            .banner p {
                font-size: 18px;
            }
            .content h2 {
                font-size: 30px;
            }
            .content p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>NomadNest</h1>
    <nav>
        <a href="/">Início</a>
        <a href="/users">Usuários</a>
        <a href="/properties">Propriedades</a>
        <a href="/bookings">Reservas</a>
    </nav>
</header>

<section class="banner">
    <h1>Encontre seu próximo lar, onde quer que você esteja!</h1>
    <p>O NomadNest oferece acomodações temporárias ideais para nômades digitais, com tudo que você precisa para viver e trabalhar.</p>
</section>

<section class="content">
    <h2>Sobre o NomadNest</h2>
    <p>NomadNest conecta nômades digitais a acomodações temporárias adaptadas para trabalho remoto, proporcionando ambientes confortáveis, produtivos e uma comunidade incrível.</p>
    
    <div class="links">
        <a href="/users">Ver Usuários</a>
        <a href="/properties">Procurar Propriedades</a>
        <a href="/bookings">Ver Reservas</a>
    </div>
</section>

<footer>
    <p>&copy; 2024 NomadNest | Todos os direitos reservados</p>
</footer>

</body>
</html>
