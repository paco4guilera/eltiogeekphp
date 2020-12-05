<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>El tío geek</title>
    <link rel="icon" href="vistas/img/plantilla/glasses-solid.svg" />


    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Plug ins CSS-------------------------------------------------------------------------- -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css" />
    <!-- Theme 
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <!-- Data Tables -->
    <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <!--Select 2-------------------------------------------------------------------------  -->
    <link rel="stylesheet" href="vistas/bower_components/select2/dist/css/select2.css">
    <!-- Personalizado -->
    <link rel="stylesheet" href="vistas/css/normalize.css" />
    <link rel="stylesheet" href="vistas/css/icono.css" />
    <link rel="stylesheet" href="vistas/css/styles.css" />


    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- 
    <!-- Data tables -->
    <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
    <!-- Sweetalert2 -->
    <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
    <!-- Font awesome nuevo -->
    <script src="https://kit.fontawesome.com/d2da642bf8.js" crossorigin="anonymous"></script>
    <!-- Select2 -->
    <script src="vistas/bower_components/select2/dist/js/select2.full.js"></script>
    <!-- css personalizado -->
    <!-- <link rel="stylesheet" href="vistas/css/personalizado.css"> -->


</head>
<!-- Cuerpo documento -------------------------------------------------------------------------------- -->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
    <!-- Site wrapper -->

    <?php
    //if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    echo '<div class="wrapper">';
    /* CABEZOTE */
    include "modulos/header.php";
    /* MENÚ */
    //include "modulos/menu.php";
    if (isset($_GET["ruta"])) {
        if (
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "blog" ||
            $_GET["ruta"] == "contacto" ||
            $_GET["ruta"] == "m51" ||
            $_GET["ruta"] == "nosotros" ||
            $_GET["ruta"] == "pocox3" ||
            $_GET["ruta"] == "rn9s" ||
            $_GET["ruta"] == "celulares" ||
            $_GET["ruta"] == "computacion" ||
            $_GET["ruta"] == "audio" ||
            $_GET["ruta"] == "televisores" ||
            $_GET["ruta"] == "gadgets" ||
            $_GET["ruta"] == "producto" ||
            $_GET["ruta"] == "admin" ||
            /* $_GET["ruta"] == "reporte-ventas" ||
                $_GET["ruta"] == "sucursales" || */
            $_GET["ruta"] == "salir"
        ) {
            include "modulos/" . $_GET["ruta"] . ".php";
        } else {
            include "modulos/404.php";
        }
    } else {
        include "modulos/inicio.php";
    }
    /* Footer */
    include "modulos/footer.php";
    echo '</div>';
    /* } else {
        include "modulos/login.php";
    } */

    ?>
    <!--
    /*=============================================
    Formulario login                             
    =============================================*/  -->
    <div id="modalIngresarUsuario" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="modal-header" style="background:#007700; color:white">
                        <button type=" button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title centrar-texto">Iniciar Sesión</h4>
                    </div>
                    <div class="modal-body back-grey">
                        <div class="box-body">
                            <div class="centrar-texto"><a href="inicio" class="imagen-logo"><img id="logo" src="vistas/img/plantilla/logo.png" alt="Logo" /></a>
                            </div>
                            <br>
                            <!-- Input para el correo -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                    <input type="email" class="form-control input-lg" name="logEmail" id="logEmail" placeholder="Correo electrónico" required>
                                </div>
                            </div><!-- Input para el correo-->

                            <!-- Input para el password -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control input-lg" name="logPassword" placeholder="Contraseña" required>
                                </div>
                            </div><!-- Input para el password -->

                            <div class="form-group ">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <button type="submit" class="boton-verde boton-verde-login col-xs-12 ">Ingresar</button>
                                </div>
                            </div>
                            <div class="from-group ">
                                <div class="input-group col-md-8 margin-left">
                                    <a class="a-login" href="#">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $ingresoUsuario = new ControladorUsuarios();
                    $ingresoUsuario->ctrIngresoUsuario();
                    ?>
                </form>
            </div>

        </div>
    </div>/
    <!--
    /*=============================================
    Formulario sing up                             
    =============================================*/  -->
    <div id="modalCrearUsuario" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="modal-header" style="background:#007700; color:white">
                        <button type=" button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title centrar-texto">Crear Cuenta</h4>
                    </div>
                    <div class="modal-body back-grey">
                        <div class="box-body">
                            <div class="centrar-texto"><a href="inicio" class="imagen-logo"><img id="logo" src="vistas/img/plantilla/logo.png" alt="Logo" /></a>
                            </div>
                            <br>
                            <!-- Input para el correo -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                    <input type="email" class="form-control input-lg" name="nuevoEmail" id="nuevoEmail" placeholder="Correo electrónico" required>
                                </div>
                            </div><!-- Input para el correo-->

                            <!-- Input para el nombre -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre" placeholder="Nombre Completo" required>
                                </div>
                            </div><!-- Input para el nombre-->

                            <!-- Input para el password -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Contraseña" required>
                                </div>
                            </div><!-- Input para el password -->

                            <div class="form-group ">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <button type="submit" class="boton-verde boton-verde-login col-xs-12 ">Crear Cuenta</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $crearUsuario = new ControladorUsuarios();
                    $crearUsuario->ctrCrearUsuario();
                    ?>
                </form>
            </div>
        </div>
    </div>


    <!-- <script src="vistas/js/plantilla.js"></script>
    <script src="vistas/js/usuarios.js"></script>
    <script src="vistas/js/clientes.js"></script>
    <script src="vistas/js/mascotas.js"></script>
    <script src="vistas/js/productos.js"></script> -->
    <script src="vistas/js/productos.js"></script>
</body>



</html>