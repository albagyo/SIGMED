<?php

class Connection
{
    public static function conectar(){
        $connection = new mysqli("127.0.0.1", "root", "", "sigmed");
        return $connection;
    }
}


/*if ($connection) {
    echo "Conexión a la Base de Datos exitosa";
    }
    else {
    die ("Conexion a la Base de Datos ha fallado");
    }*/


  