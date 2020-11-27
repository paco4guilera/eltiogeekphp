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
}
