<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
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

        /* Estilo da tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 18px;
            border: 1px solid #333;
            text-align: left;
        }

        th {
            background-color: #333; /* Cor de fundo escura para os cabeçalhos */
            color: #e0e0e0; /* Cor do texto dos cabeçalhos */
        }

        td {
            background-color: #222; /* Fundo mais escuro para as células */
        }

        tr:nth-child(even) td {
            background-color: #2a2a2a; /* Cor para as linhas alternadas */
        }

        /* Botão de cadastro de novo usuário */
        .btn {
            padding: 12px 25px;
            background-color: #6504a0;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            margin: 20px auto;
            display: block;
            width: 200px; /* Define a largura do botão */
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #5b04dd; /* Cor de fundo ao passar o mouse */
        }

        footer {
            background-color: #1f1f1f;
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
            header h1 {
                font-size: 28px;
            }

            .btn {
                font-size: 16px;
                padding: 10px 20px;
                width: 180px;
            }

            th, td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Usuários</h1>
    </header>

    <!-- Botão de cadastro de novo usuário agora está centralizado logo abaixo do título -->
    <div style="text-align: center;">
        <a href="{{ route('users.create') }}" class="btn">Cadastrar Novo Usuário</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Foto de Perfil</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        @if($user->profile_picture)
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Foto" width="50">
                        @else
                            <img src="default-profile.jpg" alt="Foto" width="50">
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <footer>
        <p>&copy; 2024 NomadNest - Todos os direitos reservados</p>
    </footer>
</body>
</html>
