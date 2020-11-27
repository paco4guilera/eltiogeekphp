<?php
class Conexion
{
    static public function conectar()
    {
        $link = new PDO(
            "mysql:host=localhost;port=33065;dbname=eltiogeek",
            "root",
            ""
        );
        $link->exec("set names utf8");
        return $link;
    }
}
