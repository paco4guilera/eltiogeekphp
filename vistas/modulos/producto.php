<main class="contenedor">
    <br />
    <?php
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
    <div class="contenido-post">
        <div class="imagen-post">
            <img src="vistas/img/plantilla/pocox3.jpg" alt="poco x3" />
        </div>
        <div class="texto-nosotros">
            <blockquote>Poco X3 NFC</blockquote>
            <p class="precio">$5,999</p>
            <p>
                Proin convallis condimentum massa vel placerat. Etiam
                eget finibus enim. Nam elementum risus sodales sem
                finibus, eget fermentum nunc dapibus. Aliquam rutrum
                mauris id diam feugiat, vel euismod felis pretium. Etiam
                at nisi quis ante fringilla porttitor sed in dolor.
                Donec mollis, sem vel luctus porta, ante nunc tincidunt
                velit, non tempus ipsum enim quis augue. Phasellus
                convallis semper turpis, vitae tempor arcu sagittis in.
                Cras vel metus auctor est ornare varius. Quisque vel
                augue ante. Morbi lacinia purus a velit pharetra
                scelerisque. Quisque suscipit gravida hendrerit. Morbi
                rhoncus ornare condimentum. Donec enim nunc, elementum
                sit amet mollis tempus, condimentum non lacus. Aenean
                laoreet velit ante, viverra maximus diam consequat nec.
            </p>
            <a href="#" class="boton boton-verde">Comprar Ahora</a>
        </div>
    </div>
</main>

<section class="section">
    <br />
    <?php
    include "mas-vendidos.php";
    ?>
</section>