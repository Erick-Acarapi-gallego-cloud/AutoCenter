```blade
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Comprador - AutoCenter</title>

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

        .campo {
            margin-bottom: 18px;
        }

        .campo label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #2c3e50;
        }

        .campo input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .campo input:focus {
            outline: none;
            border-color: #3498db;
        }

        .errores {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .errores ul {
            margin: 0;
            padding-left: 20px;
        }

        .botones {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        .btn-guardar {
            background: #27ae60;
        }

        .btn-guardar:hover {
            background: #219150;
        }

        .btn-cancelar {
            background: #7f8c8d;
        }

        .btn-cancelar:hover {
            background: #636e72;
        }

        @media (max-width: 700px) {
            .contenedor {
                width: 95%;
                padding: 20px;
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

    <h1>Editar Comprador</h1>

    @if ($errors->any())
        <div class="errores">
            <strong>Hay algunos errores:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('compradores.update', ['comprador' => $comprador->id]) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="campo">
            <label>Nombre:</label>

            <input type="text"
                   name="nombre"
                   value="{{ old('nombre', $comprador->nombre) }}"
                   required>
        </div>

        <div class="campo">
            <label>Apellido:</label>

            <input type="text"
                   name="apellido"
                   value="{{ old('apellido', $comprador->apellido) }}"
                   required>
        </div>

        <div class="campo">
            <label>Teléfono:</label>

            <input type="text"
                   name="telefono"
                   value="{{ old('telefono', $comprador->telefono) }}"
                   required>
        </div>

        <div class="campo">
            <label>Correo:</label>

            <input type="email"
                   name="correo"
                   value="{{ old('correo', $comprador->correo) }}">
        </div>

        <div class="campo">
            <label>Auto comprado:</label>

            <input type="text"
                   name="auto_comprado"
                   value="{{ old('auto_comprado', $comprador->auto_comprado) }}"
                   required>
        </div>

        <div class="campo">
            <label>Marca:</label>

            <input type="text"
                   name="marca"
                   value="{{ old('marca', $comprador->marca) }}"
                   required>
        </div>

        <div class="campo">
            <label>Modelo:</label>

            <input type="text"
                   name="modelo"
                   value="{{ old('modelo', $comprador->modelo) }}"
                   required>
        </div>

        <div class="campo">
            <label>Año:</label>

            <input type="number"
                   name="anio"
                   value="{{ old('anio', $comprador->anio) }}"
                   min="1900"
                   max="2100"
                   required>
        </div>

        <div class="campo">
            <label>Precio:</label>

            <input type="number"
                   name="precio"
                   value="{{ old('precio', $comprador->precio) }}"
                   step="0.01"
                   min="0"
                   required>
        </div>

        <div class="campo">
            <label>Fecha de compra:</label>

            <input type="date"
                   name="fecha_compra"
                   value="{{ old('fecha_compra', $comprador->fecha_compra) }}"
                   required>
        </div>

        <div class="botones">

            <a href="{{ route('compradores.index') }}"
               class="btn btn-cancelar">
                Cancelar
            </a>

            <button type="submit"
                    class="btn btn-guardar">
                Guardar cambios
            </button>

        </div>

    </form>

</div>

</body>
</html>
```
