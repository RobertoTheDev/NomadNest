<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Imóveis</title>
</head>
<body>
    <h1>Lista de Imóveis</h1>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Preço</th>
                <th>Localização</th>
                <th>Status</th>
                <th>Proprietário</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>R$ {{ number_format($property->price, 2, ',', '.') }}</td>
                    <td>{{ $property->location }}</td>
                    <td>{{ ucfirst($property->status) }}</td>
                    <td>{{ $property->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
