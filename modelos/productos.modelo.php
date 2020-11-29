<?php

require_once "conexion.php";

class ModeloProductos
{
    static public function mdlMostrarProductos($tabla, $categoria)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE producto_categoria = :producto_categoria");
        $stmt->bindParam(":producto_categoria", $categoria, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    static public function mdlMostrarProducto($tabla, $nombre)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE producto_nombre = :producto_nombre");
        $stmt->bindParam(":producto_nombre", $nombre, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt = null;
    }
}
