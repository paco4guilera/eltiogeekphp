<header class="site-header">
    <div class="barra-redes">
        <div class="contenedor contenido-header">
            <div class="barra">
                <nav>
                    <a href="https://www.facebook.com/" target="blank"><i class="icon-facebook"></i></a>
                    <a href="https://www.youtube.com/" target="blank"><i class="icon-youtube"></i></a>
                    <a href="https://www.twitter.com/" target="blank"><i class="icon-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="blank"><i class="icon-instagram"></i></a>
                </nav>
                <nav class="flex space-around navegacion" id="navegacion-verde">
                    <?php
                    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok" && $_SESSION["rol"] == "cliente") {
                        echo '
                    <a href="salir" class="btn-header">
                        Carrito
                    </a>
                    <a href="salir" class="btn-header">
                        Salir
                    </a>
                    ';
                    } elseif (isset($_SESSION["rol"]) && $_SESSION["rol"] == "admin") {
                        echo '
                    <a href="admin" class="btn-header">
                        Administrar
                    </a>
                    <a href="salir" class="btn-header">
                        Salir
                    </a>
                    ';
                    } else {
                        echo '
                    <button class="btn-header" data-toggle="modal" data-target="#modalIngresarUsuario">
                        Ingresar
                    </button>
                    <button class="btn-header" data-toggle="modal" data-target="#modalCrearUsuario">
                        Crear Cuenta
                    </button>';
                    }
                    ?>

                </nav>
            </div>
        </div>
    </div>
    <div class="barra-logo">
        <div class="barra contenedor-header">
            <a href="inicio" class="imagen-logo"><img id="logo" src="vistas/img/plantilla/logo.png" alt="Logo" /></a>
            <nav class="navegacion">
                <a href="nosotros">Nosotros</a>
                <a href="blog">Blog</a>
                <a href="contacto">Contacto</a>
            </nav>
        </div>
    </div>
</header>