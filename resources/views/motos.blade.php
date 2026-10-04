<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MOTO CENTER ERICK</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

<nav>

    <a href="{{ url('/') }}">
        Autos
    </a>

    <a href="{{ url('/motos') }}">
        Motos
    </a>

</nav>

<h1>MOTO CENTER ERICK</h1>

<p>
    Las mejores motocicletas deportivas y urbanas.
</p>

<img
    src="{{ asset('images/05.jpg') }}"
    width="150"
>

<hr>

<h2>RESERVA TU MOTO</h2>

<form onsubmit="return validarReservaMoto()">

    <label>Nombre:</label>

    <input
        type="text"
        id="nombreMoto"
    >

    <br><br>

    <label>Correo:</label>

    <input
        type="email"
        id="correoMoto"
    >

    <br><br>

    <label>Modelo:</label>

    <select id="modeloMoto">

        <option value="">
            Seleccione un modelo
        </option>

        <option>
            Honda CB190R
        </option>

        <option>
            Yamaha FZ
        </option>

        <option>
            Kawasaki Ninja
        </option>

    </select>

    <br><br>

    <input
        type="submit"
        value="RESERVAR"
        class="btn"
    >

</form>

<hr>

<h2>MODELOS DISPONIBLES</h2>

<ul>

    <li>Honda CB190R</li>

    <li>Yamaha FZ</li>

    <li>Kawasaki Ninja</li>

</ul>

<hr>

<h2>LISTA DE MOTOS</h2>

<table border="4">

    <tr>

        <th>Modelo</th>

        <th>Precio</th>

        <th>Imagen</th>

    </tr>

    <tr>

        <td>
            Honda CB190R
        </td>

        <td>
            5.500 $
        </td>

        <td>

            <img
                src="{{ asset('images/06.jpg') }}"
                width="80"
            >

        </td>

    </tr>

    <tr>

        <td>
            Yamaha FZ
        </td>

        <td>
            4.800 $
        </td>

        <td>

            <img
                src="{{ asset('images/07.jpg') }}"
                width="80"
            >

        </td>

    </tr>

</table>

<hr>

<h2>Volver a Autos</h2>

<a href="{{ url('/') }}">

    <img
        src="{{ asset('images/03.jpg') }}"
        width="200"
    >

</a>

<p>
    Haz clic para regresar a la sección de autos.
</p>

<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>