<main class="section">
    <?php
    echo '<div>';
    include "categorias.php";
    echo '</div>';
    ?>
    <h2 class="centrar-texto fw-300">
        Gadgets
    </h2>
    <div class="contenedor-tarjeta">
        <?php
        $categoria = "gadgets";
        $productos = ControladorProductos::ctrMostrarProductos($categoria);
        foreach ($productos as $key => $value) {
            /* En el a, poner página dinámica para la compra del producto */
            echo '
                <a class="mostrar-producto" role="button" idProducto="' . $value["producto_id"] . '">
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
        }
        ?>
    </div>
</main>