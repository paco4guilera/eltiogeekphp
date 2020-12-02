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
    static public function mdlNuevoProducto($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (producto_nombre,
                                producto_descripcion,
                                producto_categoria,
                                producto_foto,
                                inventario,
                                precio) 
        VALUES (:producto_nombre,
                :producto_descripcion,
                :producto_categoria,
                :producto_foto,
                :inventario,
                :precio)");

        $stmt->bindParam(":producto_nombre", $datos["producto"], PDO::PARAM_STR);
        $stmt->bindParam(":producto_descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":producto_categoria", $datos["categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":producto_foto", $datos["foto"], PDO::PARAM_STR);
        $stmt->bindParam(":inventario", $datos["inventario"], PDO::PARAM_INT);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            //var_dump($stmt->execute());
            return "error";
        }
        //$stmt->close();
        $stmt = null;
    }
}
