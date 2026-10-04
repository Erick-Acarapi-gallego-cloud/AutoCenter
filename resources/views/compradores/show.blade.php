```blade
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos del Comprador - AutoCenter</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .contenedor {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .datos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .dato {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #3498db;
        }

        .dato strong {
            display: block;
            color: #2c3e50;
            margin-bottom: 7px;
        }

        .dato span {
            color: #555;
            font-size: 16px;
        }

        .botones {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn {
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 7px;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-volver {
            background: #7f8c8d;
        }

        .btn-volver:hover {
            background: #636e72;
        }

        .btn-editar {
            background: #3498db;
        }

        .btn-editar:hover {
            background: #2980b9;
        }

        @media (max-width: 700px) {
            .datos {
                grid-template-columns: 1fr;
            }

            .botones {
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Datos del Comprador</h1>

    <div class="datos">

        <div class="dato">
            <strong>ID:</strong>
            <span>{{ $comprador->id }}</span>
        </div>

        <div class="dato">
            <strong>Nombre:</strong>
            <span>{{ $comprador->nombre }}</span>
        </div>

        <div class="dato">
            <strong>Apellido:</strong>
            <span>{{ $comprador->apellido }}</span>
        </div>

        <div class="dato">
            <strong>Teléfono:</strong>
            <span>{{ $comprador->telefono }}</span>
        </div>

        <div class="dato">
            <strong>Correo:</strong>
            <span>{{ $comprador->correo ?? 'No registrado' }}</span>
        </div>

        <div class="dato">
            <strong>Auto comprado:</strong>
            <span>{{ $comprador->auto_comprado }}</span>
        </div>

        <div class="dato">
            <strong>Marca:</strong>
            <span>{{ $comprador->marca }}</span>
        </div>

        <div class="dato">
            <strong>Modelo:</strong>
            <span>{{ $comprador->modelo }}</span>
        </div>

        <div class="dato">
            <strong>Año:</strong>
            <span>{{ $comprador->anio }}</span>
        </div>

        <div class="dato">
            <strong>Precio:</strong>
            <span>Bs. {{ number_format($comprador->precio, 2) }}</span>
        </div>

        <div class="dato">
            <strong>Fecha de compra:</strong>
            <span>{{ $comprador->fecha_compra }}</span>
        </div>

        <div class="dato">
            <strong>Registrado:</strong>
            <span>{{ $comprador->created_at }}</span>
        </div>

    </div>

    <div class="botones">

        <a href="{{ route('compradores.index') }}" class="btn btn-volver">
            Volver
        </a>

        <a href="{{ route('compradores.edit', ['comprador' => $comprador->id]) }}"
           class="btn btn-editar">
            Editar
        </a>

    </div>

</div>

</body>
</html>
```
