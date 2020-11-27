<main class="section">
    <?php
    echo '<div>';
    include "categorias.php";
    echo '</div>';
    ?>
    <h2 class="centrar-texto fw-300">
        Celulares
    </h2>
    <div class="contenedor-tarjeta">
        <?php
        $categoria = "celulares";
        $productos = ControladorProductos::ctrMostrarProductos($categoria);
        foreach ($productos as $key => $value) {
            /* En el a, poner página dinámica para la compra del producto */
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
        }
        ?>
    </div>
</main>