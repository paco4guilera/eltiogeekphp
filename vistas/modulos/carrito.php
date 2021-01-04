<?php
if ($_SESSION["iniciarSesion"] != "ok") {
    echo '<script>
        window.location="inicio";
        </script>';
}
?>
<div class="contenedor">
    <h1 class="centrar-texto">Carrito de compras</h1>
    <br>
    <br>
    <br>
    <div class="box-body">
        <!-- <table class="table table-bordered table-striped tablas"> -->
        <table class="table table-bordered table-condensed  table-hover dt-responsive tabla-plugin">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $email = $_SESSION["email"];
                $productos = ControladorProductos::ctrMostrarCarrito($email);
                $total = 0;
                $nombresProductos;
                $preciosProductos;
                foreach ($productos as $key => $value) {

                    echo '
                        <tr>
                            <td>' . $value["producto_nombre"] . '</td>
                            <td>' . $value["producto_precio"] . '</td>
                        </tr>';
                    $total += $value["producto_precio"];
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->

</div>
<section>
    <div class="contenedor">
        <?php
        echo '
        <div class="total">
            <h2 class="">TOTAL:</h2>
            <h2 class="">$ ' . $total . '</h2>
        </div>';
        ?>
        <div class="pull-right">
            <?php
            /*  echo '
                <a href="index.php?ruta=carrito&total=' . $total . '" class="boton-verde boton-carrito">PAGAR AHORA</a>
                '; */
            echo '<button class="btn boton-verde btn-vender" total="' . $total . '">Venta Boton</button> ';
            ?>
        </div>
        <?php
        function vender()
        {
            $tabla = "ventas";
            $correoUsuario = $_SESSION["email"];
            $total = $_GET["total"];
            date_default_timezone_set('America/Mexico_City');
            $fecha = date('Y-m-d');
            $hora = date('H:i:s');
            $fechaActual = $fecha . ' ' . $hora;
            $venta = ModeloProductos::mdlNuevaVenta($tabla, $correoUsuario, $fechaActual, $total);
            if ($venta == "ok") {
                $tablas = "carrito";
                $carrito = ModeloProductos::mdlVaciarCarrito($tablas, $correoUsuario);
                if ($carrito == "ok") {
                    echo '<script>
                    swal.fire({
                        icon:"success",
                        title: "Venta realizada con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="carrito";
                        }
                    });
                    </script>';
                } else {
                    echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "Carrito no fue vaciado",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="carrito";
                        }
                    });
                    </script>';
                }
            } else {
                echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "Error al hacer la venta",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="carrito";
                        }
                    });
                    </script>';
            }
        }

        if (
            isset($_GET["total"]) &&
            $_GET["total"] != 0
        ) {
            vender();
        }
        ?>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>