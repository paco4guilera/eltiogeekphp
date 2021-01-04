<?php
class Conexion
{
    static public function conectar()
    {
        $link = new PDO(
            "mysql:host=localhost;port=33065;dbname=u760520066_eltiogeek",
            "u760520066_eltiogeek",
            "Elt¡0Geek"
        );
        $link->exec("set names utf8");
        return $link;
    }
}
