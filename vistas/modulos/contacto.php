    <!-- <img src="img/destacada3.jpg" alt="" /> -->
    <main class="contenedor section contenido-centrado">
        <h2 class="fw-300 centrar-texto">
            Llena el formulario de contacto
        </h2>
        <form action="">
            <fieldset>
                <legend>Contacto</legend>
                <br>
                <label for="nombre">Nombre: </label><br>
                <input type="text" id="nombre" placeholder="Tu nombre" class="nombre-contacto" />

                <label for="email">E-mail: </label><br>
                <input type="email" id="email" placeholder="Tu correo" required class="correo-contacto" />
                <label for="telefono">Teléfono: </label><br>
                <input type="tel" id="telefono" placeholder="Tel. celular" class="telefono-contacto" /><br>
                <label for="mensaje">Mensaje:</label><br>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <input type="submit" class="boton boton-verde" />
        </form>
    </main>