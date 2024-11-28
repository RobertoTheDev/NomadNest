<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }}</title>
    <style>
        .property-details { width: 80%; margin: 20px auto; }
        .property-details h2 { font-size: 2em; margin-bottom: 20px; }
        .property-details p { font-size: 1.2em; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="property-details">
        <h2>{{ $property->title }}</h2>
        <p><strong>Descrição:</strong> {{ $property->description }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($property->price, 2, ',', '.') }} por dia</p>
        <p><strong>Localização:</strong> {{ $property->location }}</p>
        <p><strong>Disponibilidade:</strong> De {{ $property->available_from }} até {{ $property->available_until }}</p>
        <p><strong>Acomodações:</strong> {{ implode(', ', json_decode($property->amenities)) }}</p>
        <p><strong>Proprietário:</strong> {{ $property->user->name }}</p>
    </div>
</body>
</html>
