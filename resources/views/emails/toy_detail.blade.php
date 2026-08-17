<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="font-family: Arial, sans-serif; color: #333;">
    <h2>¡Hola, {{ $userName }}!</h2>
    <p>Aquí tienes la información del juguete que seleccionaste:</p>
    <div style="border: 1px solid #ccc; padding: 16px; border-radius: 8px; max-width: 300px;">
        <h3>{{ $toy->nombre }}</h3>
        <p><strong>Precio:</strong> ${{ number_format($toy->precio, 2) }}</p>
    </div>
</body>
</html>