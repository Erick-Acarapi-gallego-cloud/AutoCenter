<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AUTO CENTER ERICK</title>

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

    <a href="{{ route('compradores.index') }}">
        Compradores
    </a>

</nav>


<h2 id="saludoDinamico" style="color: gold; margin-top: 20px;"></h2>


<h1>AUTO CENTER ERICK</h1>

<p>
    Bienvenido a nuestra empresa dedicada a la venta de automóviles nuevos y usados.
</p>


<img
    src="{{ asset('images/01.jpeg') }}"
    width="200"
>


<hr>


<h2>REGISTRO DE CLIENTES</h2>


<form
    action="{{ route('compradores.store') }}"
    method="POST"
>

    @csrf


    <label>Nombre:</label>

    <input
        type="text"
        name="nombre"
        id="nombre"
        value="{{ old('nombre') }}"
        required
    >

    <br><br>


    <label>Apellido:</label>

    <input
        type="text"
        name="apellido"
        id="apellido"
        value="{{ old('apellido') }}"
        required
    >

    <br><br>


    <label>Teléfono:</label>

    <input
        type="tel"
        name="telefono"
        id="telefono"
        value="{{ old('telefono') }}"
        required
    >

    <br><br>


    <label>Correo:</label>

    <input
        type="email"
        name="correo"
        id="correo"
        value="{{ old('correo') }}"
    >

    <br><br>


    <label>Auto comprado:</label>

    <input
        type="text"
        name="auto_comprado"
        id="auto_comprado"
        value="{{ old('auto_comprado') }}"
        placeholder="Ej: Toyota Corolla"
        required
    >

    <br><br>


    <label>Marca:</label>

    <select
        name="marca"
        id="marca"
        required
    >

        <option value="">
            Seleccione una marca
        </option>

        <option
            value="Toyota"
            {{ old('marca') == 'Toyota' ? 'selected' : '' }}
        >
            Toyota
        </option>

        <option
            value="Nissan"
            {{ old('marca') == 'Nissan' ? 'selected' : '' }}
        >
            Nissan
        </option>

        <option
            value="Suzuki"
            {{ old('marca') == 'Suzuki' ? 'selected' : '' }}
        >
            Suzuki
        </option>

        <option
            value="Hyundai"
            {{ old('marca') == 'Hyundai' ? 'selected' : '' }}
        >
            Hyundai
        </option>

    </select>

    <br><br>


    <label>Modelo:</label>

    <input
        type="text"
        name="modelo"
        id="modelo"
        value="{{ old('modelo') }}"
        placeholder="Ej: Corolla"
        required
    >

    <br><br>


    <label>Año:</label>

    <input
        type="number"
        name="anio"
        id="anio"
        value="{{ old('anio') }}"
        min="1900"
        max="2100"
        placeholder="Ej: 2026"
        required
    >

    <br><br>


    <label>Precio ($):</label>

    <input
        type="number"
        name="precio"
        id="precio"
        value="{{ old('precio') }}"
        min="0"
        step="0.01"
        placeholder="Ej: 25000"
        required
    >

    <br><br>


    <label>Fecha de compra:</label>

    <input
        type="date"
        name="fecha_compra"
        id="fecha_compra"
        value="{{ old('fecha_compra') }}"
        required
    >

    <br><br>


    <input
        type="submit"
        value="REGISTRAR"
        class="btn"
    >


    <input
        type="reset"
        value="BORRAR"
        class="btn"
    >

</form>


@if ($errors->any())

    <div
        style="
            color: red;
            margin: 20px;
            font-weight: bold;
        "
    >

        @foreach ($errors->all() as $error)

            <p>{{ $error }}</p>

        @endforeach

    </div>

@endif


@if (session('success'))

    <div
        style="
            color: lime;
            margin: 20px;
            font-weight: bold;
        "
    >

        {{ session('success') }}

    </div>

@endif


<hr>


<h2>CALCULA TU FINANCIAMIENTO</h2>

<p>
    Ingresa el precio del auto y la cantidad de cuotas:
</p>


<label>Precio ($):</label>

<input
    type="number"
    id="precioAuto"
    min="1000"
    placeholder="Ej: 25000"
>


<br><br>


<label>Cuotas (3 a 48):</label>

<input
    type="number"
    id="cantidadCuotas"
    min="3"
    max="48"
    value="12"
>


<br><br>


<button
    type="button"
    onclick="calcularCuotas()"
    class="btn"
>
    Calcular
</button>


<div
    id="resultadoCuotas"
    style="
        margin-top:15px;
        font-size:18px;
        color: gold;
    "
></div>


<hr>


<h2>MODELOS DISPONIBLES</h2>

<ul>

    <li>Toyota Corolla</li>

    <li>Nissan Sentra</li>

    <li>Hyundai Tucson</li>

    <li>Suzuki Vitara</li>

</ul>


<hr>


<h2>PRECIOS</h2>

<ol>

    <li>
        Toyota Corolla → 25.000 $
    </li>

    <li>
        Nissan Sentra → 23.000 $
    </li>

    <li>
        Hyundai Tucson → 30.000 $
    </li>

</ol>


<hr>


<h2>LISTA DE AUTOS</h2>


<table border="4">

    <tr>

        <th>Modelo</th>

        <th>Precio</th>

        <th>Imagen</th>

    </tr>


    <tr>

        <td>
            Toyota Corolla
        </td>

        <td>
            25.000 $
        </td>

        <td>

            <img
                src="{{ asset('images/02.jpg') }}"
                width="100"
            >

        </td>

    </tr>


    <tr>

        <td>
            Nissan Sentra
        </td>

        <td>
            23.000 $
        </td>

        <td>

            <img
                src="{{ asset('images/04.jpg') }}"
                width="100"
            >

        </td>

    </tr>

</table>


<hr>


<h2>Horario de Atención</h2>


<table border="3">

    <tr>

        <th>Día</th>

        <th>Horario</th>

    </tr>


    <tr>

        <td>
            Lunes a Viernes
        </td>

        <td>
            08:00 - 18:00
        </td>

    </tr>


    <tr>

        <td>
            Sábado
        </td>

        <td>
            08:00 - 14:00
        </td>

    </tr>

</table>


<hr>


<h2>
    Conoce nuestra sección de motocicletas
</h2>


<a href="{{ url('/motos') }}">

    <img
        src="{{ asset('images/08.jpg') }}"
        width="200"
    >

</a>


<p>
    Haz clic para ir a motos.
</p>


<hr>


<h2>Contacto</h2>

<p>
    Celular: 64358058
</p>

<p>
    Email: autocenter@gmail.com
</p>


<hr>


<h2>Redes Sociales</h2>


<a
    href="https://www.facebook.com"
    target="_blank"
>
    Facebook
</a>

|

<a
    href="https://www.instagram.com"
    target="_blank"
>
    Instagram
</a>

|

<a
    href="https://www.tiktok.com"
    target="_blank"
>
    TikTok
</a>

|

<a
    href="https://wa.me/59164358058"
    target="_blank"
>
    WhatsApp
</a>


<hr>


<p id="miBox">
    Más de 500 clientes satisfechos.
</p>


<div class="miCaja">
    Contamos con financiamiento y garantía.
</div>


<div id="miCaja2">
    Los mejores precios del mercado.
</div>


<div id="miCaja3">
    ¡Visítanos y compra el auto de tus sueños!
</div>


<script src="{{ asset('js/main.js') }}"></script>


</body>

</html>