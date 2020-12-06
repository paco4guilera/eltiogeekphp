<main class="contenedor">
    <br />
    <?php
    if (isset($_GET["idProducto"])) {
        $id = $_GET["idProducto"];
        $tabla = "productos";
        $respuesta = ModeloProductos::mdlMostrarProducto($tabla, $id);

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
                    <a href="index.php?ruta=producto&idProducto=' . $respuesta["producto_id"] . '&nombreProducto=' . $respuesta["producto_nombre"] . '&precioProducto=' . $respuesta["precio"] . '"
                    class="boton boton-verde">
                    Agregar a Carrito
                    </a>
                </div>
            </div>';
    }
    ?>
    <?php
    function agregarCarrito()
    {
        $correoUsuario = $_SESSION["email"];
        $producto = $_GET["nombreProducto"];
        $precio = $_GET["precioProducto"];
        $id = $_GET["idProducto"];
        if ($_SESSION["iniciarSesion"] == "ok") {
            $tabla = "carrito";

            $carrito = ModeloProductos::mdlAgregarCarrito($tabla, $correoUsuario, $producto, $precio);
            if ($carrito == "ok") {
                echo '<script>
                    swal.fire({
                        icon:"success",
                        title: "Producto agregado al carrito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="index.php?ruta=producto&idProducto=' . $id . '";
                        }
                    });
                    </script>';
            } else {
                echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "Producto no agregado al carrito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="index.php?ruta=producto&idProducto=' . $id . '";
                        }
                    });
                    </script>';
            }
        } else {
            echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "No has iniciado sesión",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="index.php?ruta=producto&idProducto=' . $id . '";
                        }
                    });
                    </script>';
        }
    }

    if (
        isset($_GET["idProducto"]) &&
        isset($_GET["nombreProducto"])
    ) {
        agregarCarrito();
    }
    ?>

</main>


<section class="section">
    <br />
    <?php
    include "mas-vendidos.php";
    ?>
</section>
<?php
/* $productoCarro = new ControladorProductos();
$productoCarro->ctrAgregarACarro(); */
?>