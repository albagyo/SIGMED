<?php

class Connection
{
    public static function conectar(){
        $connection = new mysqli("127.0.0.1", "root", "", "sigmed");
        return $connection;
    }
}

$db = Connection::conectar();

if($db === false){
    die("ERROR: Could not connect. " . $db->connect_error);
}
else{
    echo "Conexión a la base de datos exitosa.";
}
