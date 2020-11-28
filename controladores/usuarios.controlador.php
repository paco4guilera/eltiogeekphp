<?php
class ControladorUsuarios
{
    /* static public function ctrPlantilla()
    {
        include "vistas/plantilla.php";
    } */
    static public function ctrMostrarUsuarios($item, $valor)
    {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
        return $respuesta;
    }
    static public function ctrCrearUsuario()
    {
        if (
            isset($_POST["nuevoEmail"]) &&
            isset($_POST["nuevoNombre"]) &&
            isset($_POST["nuevoPassword"])
        ) {
            $tabla = "usuarios";
            //$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $datos = array(
                "correo" => $_POST["nuevoEmail"],
                "nombre" => $_POST["nuevoNombre"],
                //"password" => $encriptar
                "password" => $_POST["nuevoPassword"]
            );
            $respuesta = ModeloUsuarios::mdlCrearUsuario($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
                    swal.fire({
                        icon:"success",
                        title: "Usuario registrado con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="' . $_GET["ruta"] . '";
                        }
                    });
                    </script>';
            } else {
                echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "Mascota no registrada con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="' . $_GET["ruta"] . '";
                        }
                    });
                    </script>';
            }
        }
    }
    static public function ctrIngresoUsuario()
    {
        if (
            isset($_POST["logEmil"]) &&
            isset($_POST["logPassword"])
        ) {
            //$encriptar = crypt($_POST["logPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $tabla = "usuarios";
            $item = "usuario_correo";
            $valor = $_POST["logEmail"];
            $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
            if (
                $respuesta["usuario_correo"] == $_POST["logEmail"] &&
                //$respuesta["usuario_password"] == $encriptar
                $respuesta["usuario_password"] == $_POST["logPassword"]
            ) {
                $_SESSION["iniciarSesion"] = "ok";
                $_SESSION["email"] = $respuesta["usuario_correo"];
                $_SESSION["rol"] = $respuesta["usuario_rol"];
                echo '<script>
                    swal.fire({
                        icon:"success",
                        title: "Usuario ha ingresado con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="' . $_GET["ruta"] . '";
                        }
                    });
                    </script>';
                //var_dump($_SESSION);
            } else {
                echo '<script>
                    swal.fire({
                        icon:"error",
                        title: "Usuario no ha ingresado con éxito",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false 
                    }).then((result)=>{
                        if(result.value){
                            window.location="' . $_GET["ruta"] . '";
                        }
                    });
                    </script>';
                //echo '<br><div class="alert alert-danger">Error en los datos, vuelve a intentar</div>';
            }
        }
    }
}
