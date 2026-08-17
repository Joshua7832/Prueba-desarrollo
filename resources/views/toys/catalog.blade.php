<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendaciones de Juguetes</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #18181b;
            color: #e4e4e7;
            text-align: center;
            padding: 2rem;
            margin: 0;
            animation: fadeIn 0.6s ease-in-out; 
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .grid {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 2rem;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .toy-card {
            background-color: #27272a;
            border: 1px solid #3f3f46;
            padding: 20px;
            border-radius: 12px;
            width: 250px;
            text-align: left;
            transition: transform 0.3s ease, border-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        
        .toy-card:hover {
            transform: scale(1.03);
            border-color: #6366f1;
        }

        .image-placeholder {
            background-color: #3f3f46;
            width: 100%;
            height: 150px;
            border-radius: 8px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a1a1aa;
            font-size: 0.9em;
        }

        .toy-title {
            color: #ffffff;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .toy-details {
            font-size: 0.85em;
            color: #a1a1aa;
            margin: 5px 0;
        }

        .toy-description {
            font-size: 0.85em;
            color: #d4d4d8;
            margin-top: 10px;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .price-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            border-top: 1px solid #3f3f46;
            padding-top: 15px;
        }

        .price {
            font-weight: bold;
            color: #10b981; 
            font-size: 1.1em;
        }

        .btn-enviar {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .btn-enviar:hover {
            background-color: #4f46e5;
        }

        .alert {
            background-color: rgba(16, 185, 129, 0.2);
            color: #10b981;
            border: 1px solid #10b981;
            padding: 12px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <h2>Hola <span style="color: #6366f1;">{{ $nombre }}</span>, estos son los juguetes que te recomendamos:</h2>

    <div class="grid">
        @foreach($toys as $toy)
            <div class="toy-card">
                <div class="image-placeholder">Imagen de Juguete</div>
                
                <div class="toy-title"><strong>{{ $toy->nombre }}</strong></div>
                
                
                <div class="toy-details"><strong>Marca:</strong> {{ $toy->marca }}</div>
                <div class="toy-details"><strong>Edad recomendada:</strong> {{ $toy->edad }}</div>
                
                <div class="toy-description">
                    {{ $toy->descripcion }}
                </div>

                <div class="price-container">
                    <span class="price">${{ number_format($toy->precio, 2) }}</span>
                    <form action="{{ route('toys.sendEmail', $toy->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-enviar">Enviar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>