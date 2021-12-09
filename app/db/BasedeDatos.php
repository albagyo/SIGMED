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


class Conexion{

    public static function conectar (){
        $connect = new mysqli("127.0.0.1", "root", "", "sigmed");
        return $connect;
    }

}