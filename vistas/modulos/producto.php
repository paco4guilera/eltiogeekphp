<main class="contenedor">
    <br />
    <?php
    if (isset($_GET["nombreProducto"])) {
        $nombre = $_GET["nombreProducto"];
        $tabla = "productos";
        $respuesta = ModeloProductos::mdlMostrarProducto($tabla, $nombre);
        //var_dump($respuesta["producto_categoria"]);
        echo '
            <div class="contenido-post">
                <div class="imagen-post">
                    <img src="' . $respuesta["producto_foto"] . '" alt="poco x3" />
                </div>
                <div class="texto-nosotros">
                    <blockquote>' . $respuesta["producto_nombre"] . '</blockquote>
                    <p class="precio">$' . $respuesta["precio"] . '</p>
                    <p>
                        ' . $respuesta["producto_descripcion"] . '
                    </p>
                    <a href="#" class="boton boton-verde">Comprar Ahora</a>
                </div>
            </div>';
    }
    ?>

</main>

<section class="section">
    <br />
    <?php
    include "mas-vendidos.php";
    ?>
</section>