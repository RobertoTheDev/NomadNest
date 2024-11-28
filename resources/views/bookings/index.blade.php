<!-- resources/views/bookings/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Bookings</title>
</head>
<body>
    <h1>List of Bookings</h1>
    <ul>
        @foreach ($bookings as $booking)
            <li>{{ $booking->start_date }} - {{ $booking->end_date }} ({{ $booking->user->name }})</li>
        @endforeach
    </ul>
</body>
</html>
