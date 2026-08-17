<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Catálogo de Juguetes</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #18181b; 
            color: #e4e4e7;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background-color: #27272a;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            width: 320px;
            text-align: center;
            border: 1px solid #3f3f46;
        }

        h3 { margin-top: 0; color: #ffffff; }

        input, select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background-color: #18181b;
            border: 1px solid #3f3f46;
            color: white;
            border-radius: 6px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        
        input:hover, select:hover,
        input:focus, select:focus {
            border-color: #6366f1; 
            outline: none;
            box-shadow: 0 0 8px rgba(99, 102, 241, 0.4);
        }

        button {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4f46e5;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3>Necesitamos tus datos</h3>
        <form action="{{ route('toys.saveUser') }}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <select name="genero" required>
                <option value="" disabled selected>Género</option>
                <option value="nino">Niño</option>
                <option value="nina">Niña</option>
            </select>
            <button type="submit">Siguiente</button>
        </form>
    </div>
</body>
</html>