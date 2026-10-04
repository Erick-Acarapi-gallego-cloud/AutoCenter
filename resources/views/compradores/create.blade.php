<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Comprador - AutoCenter</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        .contenedor {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        .tarjeta {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 25px;
            color: #1f2937;
        }

        .formulario {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .campo {
            display: flex;
            flex-direction: column;
        }

        .campo-completo {
            grid-column: 1 / 3;
        }

        label {
            margin-bottom: 7px;
            font-weight: bold;
            color: #374151;
        }

        input {
            padding: 11px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #2563eb;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }

        .botones {
            grid-column: 1 / 3;
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn {
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }

        .btn-guardar {
            background: #2563eb;
        }

        .btn-guardar:hover {
            background: #1d4ed8;
        }

        .btn-cancelar {
            background: #6b7280;
        }

        .btn-cancelar:hover {
            background: #4b5563;
        }

        @media (max-width: 700px) {
            .formulario {
                grid-template-columns: 1fr;
            }

            .campo-completo,
            .botones {
                grid-column: 1;
            }
        }
    </style>
</head>

<body>

<div class="contenedor">

    <div class="tarjeta">

        <h1>Registrar Nuevo Comprador</h1>

        <form action="{{ route('compradores.store') }}" method="POST">

            @csrf

            <div class="formulario">

                <div class="campo">
                    <label for="nombre">Nombre</label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        required
                    >

                    @error('nombre')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="apellido">Apellido</label>

                    <input
                        type="text"
                        id="apellido"
                        name="apellido"
                        value="{{ old('apellido') }}"
                        required
                    >

                    @error('apellido')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="telefono">Teléfono</label>

                    <input
                        type="text"
                        id="telefono"
                        name="telefono"
                        value="{{ old('telefono') }}"
                        required
                    >

                    @error('telefono')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="correo">Correo</label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        value="{{ old('correo') }}"
                    >

                    @error('correo')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="auto_comprado">Auto comprado</label>

                    <input
                        type="text"
                        id="auto_comprado"
                        name="auto_comprado"
                        value="{{ old('auto_comprado') }}"
                        placeholder="Ej: Corolla"
                        required
                    >

                    @error('auto_comprado')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="marca">Marca</label>

                    <input
                        type="text"
                        id="marca"
                        name="marca"
                        value="{{ old('marca') }}"
                        placeholder="Ej: Toyota"
                        required
                    >

                    @error('marca')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="modelo">Modelo</label>

                    <input
                        type="text"
                        id="modelo"
                        name="modelo"
                        value="{{ old('modelo') }}"
                        placeholder="Ej: Corolla XLI"
                        required
                    >

                    @error('modelo')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="anio">Año</label>

                    <input
                        type="number"
                        id="anio"
                        name="anio"
                        value="{{ old('anio') }}"
                        min="1900"
                        max="2100"
                        required
                    >

                    @error('anio')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="precio">Precio</label>

                    <input
                        type="number"
                        id="precio"
                        name="precio"
                        value="{{ old('precio') }}"
                        min="0"
                        step="0.01"
                        placeholder="Ej: 25000.00"
                        required
                    >

                    @error('precio')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="campo">
                    <label for="fecha_compra">Fecha de compra</label>

                    <input
                        type="date"
                        id="fecha_compra"
                        name="fecha_compra"
                        value="{{ old('fecha_compra') }}"
                        required
                    >

                    @error('fecha_compra')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="botones">

                    <button type="submit" class="btn btn-guardar">
                        Guardar Comprador
                    </button>

                    <a href="{{ route('compradores.index') }}"
                       class="btn btn-cancelar">
                        Cancelar
                    </a>

                </div>

            </div>

        </form>

    </div>

</div>

</body>
</html>