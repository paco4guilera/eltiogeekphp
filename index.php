<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
/* require_once "controladores/vender.controlador.php";
*/
require_once "modelos/conexion.php";
require_once "modelos/productos.modelo.php";
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
