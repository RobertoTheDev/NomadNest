<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Usuário</title>
    <style>
        /* Estilos semelhantes ao anterior */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #e0e0e0;
        }

        header {
            background-color: #1f1f1f;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #1f1f1f;
            padding: 20px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        /* Estilo para a seleção (select) e os options */
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.3); /* Fundo transparente */
            color: #fff;
        }

        .form-group select option {
            background-color: rgba(0, 0, 0, 0.2); /* Opacidade para o fundo das opções */
            color: #fff;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        /* Estilo do botão */
        button {
            width: 100%;
            padding: 10px;
            background-color: #6504a0;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px; /* Margem inferior para separar os botões */
        }

        button:hover {
            background-color: #5b04dd;
        }

        /* Estilo para o botão de link */
        .link-button {
            width: 100%;
            padding: 10px;
            background-color: #444;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .link-button:hover {
            background-color: #666;
        }

        footer {
            background-color: #1f1f1f;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Cadastro de Usuário</h1>
</header>

<div class="container">
    <!-- Exibe mensagens de sucesso ou erro -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="role">Tipo</label>
            <select name="role" id="role" required>
                <option value="nomad" {{ old('role') == 'nomad' ? 'selected' : '' }}>Nomad</option>
                <option value="company" {{ old('role') == 'company' ? 'selected' : '' }}>Company</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <div class="form-group">
            <label for="profile_picture">Foto de Perfil</label>
            <input type="file" name="profile_picture" id="profile_picture">
        </div>

        <button type="submit">Cadastrar</button>
    </form>

    <!-- Botão "Retornar" que leva à lista de usuários -->
    <a href="{{ route('users.index') }}">
        <button class="link-button" type="button">Retornar à Lista de Usuários</button>
    </a>
</div>

<footer>
    <p>&copy; 2024 NomadNest. Todos os direitos reservados.</p>
</footer>

</body>
</html>
