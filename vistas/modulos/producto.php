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
    /* $categoria = "celulares";
    $productos = ControladorProductos::ctrMostrarProductos($categoria);
    foreach ($productos as $key => $value) {
        /* En el a, poner página dinámica para la compra del producto 
        echo '
                <a href="producto">
                    <div class="card">
                        <img src="' . $value["producto_foto"] . '" alt="no hay imagen disponible" />
                        <h4>' . $value["producto_nombre"] . '</h4>
                        <p class="tarjeta-desc">
                            ' . $value["producto_descripcion"] . '
                        </p>
                        <p class="tarjeta-ver-producto">VER AHORA</p>
                    </div>
                </a>
            '; 
    }*/
    ?>

</main>

<section class="section">
    <br />
    <?php
    include "mas-vendidos.php";
    ?>
</section>