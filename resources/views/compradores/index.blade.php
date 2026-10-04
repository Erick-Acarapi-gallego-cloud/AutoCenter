<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Compradores - Auto Center Erick</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            color: #222;
        }

        .contenedor {
            width: 95%;
            max-width: 1400px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        .acciones {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn-nuevo {
            background: #27ae60;
            color: white;
        }

        .btn-ver {
            background: #3498db;
            color: white;
        }

        .btn-editar {
            background: #f1c40f;
            color: black;
        }

        .btn-eliminar {
            background: #e74c3c;
            color: white;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .mensaje {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
        }

        .tabla-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1100px;
        }

        th {
            background: #2c3e50;
            color: white;
            padding: 12px;
            text-align: center;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:hover {
            background: #f8f8f8;
        }

        .acciones-tabla {
            display: flex;
            justify-content: center;
            gap: 5px;
            flex-wrap: wrap;
        }

        .form-eliminar {
            display: inline;
        }

    </style>

</head>


<body>


<div class="contenedor">


    <h1>Lista de Compradores</h1>


    @if(session('success'))

        <div class="mensaje">

            {{ session('success') }}

        </div>

    @endif


    <div class="acciones">


        <a
            href="{{ route('compradores.create') }}"
            class="btn btn-nuevo"
        >
            + Nuevo Comprador
        </a>


        <a
            href="{{ url('/') }}"
            class="btn btn-ver"
        >
            Volver a Auto Center
        </a>


    </div>


    <div class="tabla-container">


        <table>


            <thead>

                <tr>

                    <th>ID</th>

                    <th>Nombre</th>

                    <th>Apellido</th>

                    <th>Teléfono</th>

                    <th>Correo</th>

                    <th>Auto</th>

                    <th>Marca</th>

                    <th>Modelo</th>

                    <th>Año</th>

                    <th>Precio</th>

                    <th>Fecha</th>

                    <th>Acciones</th>

                </tr>

            </thead>


            <tbody>


                @forelse($compradores as $comprador)


                    <tr>


                        <td>
                            {{ $comprador->id }}
                        </td>


                        <td>
                            {{ $comprador->nombre }}
                        </td>


                        <td>
                            {{ $comprador->apellido }}
                        </td>


                        <td>
                            {{ $comprador->telefono }}
                        </td>


                        <td>
                            {{ $comprador->correo }}
                        </td>


                        <td>
                            {{ $comprador->auto_comprado }}
                        </td>


                        <td>
                            {{ $comprador->marca }}
                        </td>


                        <td>
                            {{ $comprador->modelo }}
                        </td>


                        <td>
                            {{ $comprador->anio }}
                        </td>


                        <td>
                            $ {{ number_format($comprador->precio, 2) }}
                        </td>


                        <td>
                            {{ $comprador->fecha_compra }}
                        </td>


                        <td>


                            <div class="acciones-tabla">


                                <a
                                    href="{{ route('compradores.show', ['comprador' => $comprador->id]) }}"
                                    class="btn btn-ver"
                                >
                                    Ver
                                </a>


                                <a
                                    href="{{ route('compradores.edit', ['comprador' => $comprador->id]) }}"
                                    class="btn btn-editar"
                                >
                                    Editar
                                </a>


                                <form
                                    action="{{ route('compradores.destroy', ['comprador' => $comprador->id]) }}"
                                    method="POST"
                                    class="form-eliminar"
                                    onsubmit="return confirm('¿Está seguro de eliminar este comprador?');"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn btn-eliminar"
                                    >
                                        Eliminar
                                    </button>


                                </form>


                            </div>


                        </td>


                    </tr>


                @empty


                    <tr>

                        <td colspan="12">

                            No hay compradores registrados.

                        </td>

                    </tr>


                @endforelse


            </tbody>


        </table>


    </div>


</div>


</body>

</html>