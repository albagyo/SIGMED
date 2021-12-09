<?php

    /*
    $db = new mysqli("127.0.0.1", "root", "", "sigmed");
     
    
    if($db === false){
        die("ERROR: Could not connect. " . $db->connect_error);
    }
    else{
        echo "Conexión a la base de datos exitosa.";
    }
    */

    $obj = new Conexion();
    $obj->conectar();
class Conexion{
    public static function conectar (){
        $connect = new mysqli("127.0.0.1", "root", "", "sigmed");
        return $connect;
    }

}


if($obj === false){
    die("ERROR: Could not connect. " . $connect->connect_error);
}
else{
    echo "Conexión a la base de datos exitosa.";
}