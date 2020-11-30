    <!-- <img src="img/destacada3.jpg" alt="" /> -->
    <main class="contenedor section contenido-centrado">
        <h2 class="fw-300 centrar-texto">
            Llena el formulario de contacto
        </h2>
        <form class="form-contacto" action="">
            <fieldset>
                <legend>Contacto</legend>
                <br>
                <label for="nombre">Nombre: </label><br>
                <input type="text" id="nombre" placeholder="Tu nombre" class="nombre-contacto form-control input-lg" />

                <label for="email">E-mail: </label><br>
                <input type="email" id="email" placeholder="Tu correo" required class="correo-contacto form-control input-lg" />
                <label for="telefono">Teléfono: </label><br>
                <input type="tel" id="telefono" placeholder="Tel. celular" class="telefono-contacto form-control input-lg" /><br>
                <label for="mensaje">Mensaje:</label><br>
                <textarea id="mensaje" class="form-control"></textarea>
            </fieldset>
            <input type="submit" class="boton boton-verde" id="boton-contacto" />
        </form>
    </main>