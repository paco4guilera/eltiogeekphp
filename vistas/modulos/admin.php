    <?php
    if ($_SESSION["rol"] != "admin") {
        echo '<script>
        window.location="salir";
        </script>';
    }
    ?>
    <div class="contenedor">
        <h1 class="centrar-texto">Administración de productos</h1>
        <br>
        <br>
        <div class="menu-categorias contenedor">
            <button class="menu-categorias-div" data-toggle="modal" data-target="#modalIngresarUsuario">
                <p class="menu-categorias-p">Productos</p>
            </button>
            <button class="menu-categorias-div" data-toggle="modal" data-target="#modalNuevoProducto">
                <p class="menu-categorias-p">Nuevo Producto</p>
            </button>
            <button class="menu-categorias-div" data-toggle="modal" data-target="#modalIngresarUsuario">
                <p class="menu-categorias-p">Editar producto</p>
            </button>
            <button class="menu-categorias-div" data-toggle="modal" data-target="#modalIngresarUsuario">
                <p class="menu-categorias-p">Eliminar Producto</p>
            </button>


        </div>
    </div>
    <br>
    <br>
    <!--
    /*=============================================
    Formulario Crear producto
    =============================================*/ -->
    <div id="modalNuevoProducto" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="modal-header" style="background:#007700; color:white">
                        <button type=" button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title centrar-texto">Nuevo Producto</h4>
                    </div>
                    <div class="modal-body back-grey">
                        <div class="box-body">
                            <br>
                            <!-- Input para Nombre del producto -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                    <input type="text" class="form-control input-lg quitar-color" name="nuevoProducto" id="nuevoProducto" placeholder="Nombre del producto" required>
                                </div>
                            </div><!-- Input para Nombre del producto-->
                            <!-- Input para Nombre del precio -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                    <input type="number" class="form-control input-lg quitar-color" name="nuevoPrecio" id="nuevoPrecio" placeholder="Precio" required>
                                </div>
                            </div><!-- Input para Nombre del Inventario-->

                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                    <input type="number" class="form-control input-lg quitar-color" name="nuevoInventario" id="nuevoInventario" placeholder="Inventario" required>
                                </div>
                            </div><!-- Input para Nombre del Inventario-->

                            <!-- Input para el descripción -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <span class="input-group-addon"><i class="fas fa-file-alt"></i></span>
                                    <textarea class="form-control input-lg" name="logPassword" placeholder="Descripción" required></textarea>
                                </div>
                            </div><!-- Input para el descripción -->
                            <!-- Input para el tipo -->
                            <div class="form-group">
                                <div class="input-group col-xs-12 col-md-8 margin-auto ">
                                    <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                    <select class="form-control input-lg no-line-height" name="nuevoTipo">
                                        <option value="">Categoria</option>
                                        <option value="Celulares">Celulares</option>
                                        <option value="Computacion">Computacion</option>
                                        <option value="Audio">Audio</option>
                                        <option value="Televisores">Televisores</option>
                                        <option value="Gadgets">Gadgets</option>
                                    </select>
                                </div>
                            </div><!-- Input para el rol -->
                            <div class="form-group">
                                <div class="panel panel-imagen centrar-texto">SUBIR IMAGEN</div>
                                <p class="help-block centrar-texto">Peso máximo de la imagen 2MB</p>
                                <div class="centrar-texto"><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px"></div>
                                <br>
                                <div class="margin-auto padding-5rem"><input type="file" class="nuevaImagen margin-0" name="nuevaImagen"></div>
                            </div>

                            <div class="form-group ">
                                <div class="input-group col-xs-12 col-md-8 margin-auto">
                                    <button type="submit" class="boton-verde boton-verde-login col-xs-12 ">Guardar</button>
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
    </div>