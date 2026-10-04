window.onload = function() {

    const fecha = new Date();

    const hora = fecha.getHours();

    let saludo;

    if (hora < 12) {

        saludo = "¡Buenos días! Bienvenido a Auto Center Erick";

    } else if (hora < 18) {

        saludo = "¡Buenas tardes! Estamos para atenderte";

    } else {

        saludo = "¡Buenas noches! Gracias por visitarnos";

    }

    const elementoSaludo =
        document.getElementById("saludoDinamico");

    if (elementoSaludo) {

        elementoSaludo.textContent = saludo;

    }

};


function validarRegistro() {

    let nombre =
        document.getElementById("nombre").value.trim();

    let apellido =
        document.getElementById("apellido").value.trim();

    let correo =
        document.getElementById("correo").value.trim();

    let telefono =
        document.getElementById("telefono").value.trim();

    let contrasena =
        document.getElementById("contrasena").value;

    let genero =
        document.querySelector(
            'input[name="genero"]:checked'
        );

    let marcas =
        document.querySelectorAll(
            'input[name="marca"]:checked'
        );


    if (nombre === "") {

        alert("Por favor ingrese su nombre");

        return false;

    }


    if (apellido === "") {

        alert("Por favor ingrese su apellido");

        return false;

    }


    if (!correo.includes("@")) {

        alert("Ingrese un correo electrónico válido");

        return false;

    }


    if (telefono.length < 6 || isNaN(telefono)) {

        alert(
            "Ingrese un teléfono válido (solo números)"
        );

        return false;

    }


    if (contrasena.length < 4) {

        alert(
            "La contraseña debe tener al menos 4 caracteres"
        );

        return false;

    }


    if (!genero) {

        alert("Seleccione su género");

        return false;

    }


    if (marcas.length === 0) {

        alert(
            "Seleccione al menos una marca favorita"
        );

        return false;

    }


    alert(
        "✅ Registro completado correctamente. ¡Gracias por confiar en nosotros!"
    );

    return true;

}


function calcularCuotas() {

    let precio =
        parseFloat(
            document.getElementById("precioAuto").value
        );

    let cuotas =
        parseInt(
            document.getElementById("cantidadCuotas").value
        );


    if (isNaN(precio) || precio <= 0) {

        alert(
            "Ingrese un precio válido mayor a 0"
        );

        return;

    }


    if (
        isNaN(cuotas) ||
        cuotas < 3 ||
        cuotas > 48
    ) {

        alert(
            "Ingrese una cantidad de cuotas entre 3 y 48"
        );

        return;

    }


    const tasaInteres = 0.05;


    let totalPagar =
        precio +
        (
            precio *
            tasaInteres *
            cuotas /
            12
        );


    let valorCuota =
        totalPagar / cuotas;


    document.getElementById(
        "resultadoCuotas"
    ).innerHTML =

        `Total a pagar: $${totalPagar.toFixed(2)}<br>
        Cuota mensual aproximada: $${valorCuota.toFixed(2)}`;

}


function validarReservaMoto() {

    let nombre =
        document.getElementById("nombreMoto").value.trim();

    let correo =
        document.getElementById("correoMoto").value.trim();

    let modelo =
        document.getElementById("modeloMoto").value;


    if (nombre === "") {

        alert(
            "Ingrese su nombre completo"
        );

        return false;

    }


    if (!correo.includes("@")) {

        alert(
            "Ingrese un correo válido"
        );

        return false;

    }


    if (modelo === "") {

        alert(
            "Seleccione el modelo de moto que desea reservar"
        );

        return false;

    }


    alert(
        "✅ Reserva enviada correctamente. Nos pondremos en contacto contigo."
    );

    return false;

}