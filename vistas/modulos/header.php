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
                    /* if ($_SESSION["iniciarSesion"] == "ok") {
                        echo '
                    <a href="#">Ingresar</a>
                    <!-- <a > | </a> -->
                    <a href="#"> Crear cuenta</a>';
                    } else {
                        echo '
                    <a href="#">Ingresar</a>
                    <!-- <a > | </a> -->
                    <a href="#"> Crear cuenta</a>';
                    } */
                    ?>
                    <button class="btn-header" data-toggle="modal" data-target="#modalIngresarUsuario">
                        Ingresar
                    </button>
                    <p class="p-header">|</p>
                    <button class="btn-header" data-toggle="modal" data-target="#modalCrearUsuario">
                        Crear Cuenta
                    </button>
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