<?php
class ControladorProductos
{
    /* static public function ctrPlantilla()
    {
        include "vistas/plantilla.php";
    } */
    static public function ctrMostrarProductos($categoria)
    {
        $tabla = "productos";
        $respuesta = ModeloProductos::MdlMostrarProductos($tabla, $categoria);
        return $respuesta;
    }
    static public function ctrNuevoProducto()
    {
        if (isset($_POST["nuevoProducto"])) {
            $ruta = "";
            if (isset($_FILES["nuevaFoto"]["tmp_name"])) {
                list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
                $nuevoAncho = 184;
                $nuevoAlto = 220;
                $directorio = "vistas/img/productos/" . $_POST["nuevoProducto"];
                mkdir($directorio, 0755);
                /* De acuerdo al tipo de imagen, se hace algo diferente */

                if ($_FILES["nuevaFoto"]["type"] == "image/jpeg") {
                    $aleatorio = mt_rand(100, 999);
                    $ruta = "vistas/img/productos/" . $_POST["nuevoProducto"] . "/" . $aleatorio . ".jpg";
                    $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                } else if ($_FILES["nuevaFoto"]["type"] == "image/png") {
                    $aleatorio = mt_rand(100, 999);
                    $ruta = "vistas/img/productos/" . $_POST["nuevoProducto"] . "/" . $aleatorio . ".png";
                    $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagepng($destino, $ruta);
                }
            }
            $tabla = "productos";
            $datos = array(
                "producto" => $_POST["nuevoProducto"],
                "precio" => $_POST["nuevoPrecio"],
                "inventaro" => $_POST["nuevoInventario"],
                "descripcion" => $_POST["nuevaDescripcion"],
                "categoria" => $_POST["nuevaCategoria"],
                "foto" => $ruta
            );
            //var_dump($datos);
            $respuesta = ModeloProductos::mdlNuevoProducto($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
                    swal.fire({
                        icon:"success",
                        title: "Producto registrado con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="admin";
                        }
                    });
                    </script>';
            } else {
                echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "Producto no registrado con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="admin";
                        }
                    });
                    </script>';
            }
        }
    }
}
