<?php
require_once "BasedeDatos.php";

class UsuarioModel
{

    public function __construct()
    {
       
    }

    //Almacenar en la bd los datos del usuario 
    public function registrarUsuario($tipo, $email, $password){
        $sql = "INSERT INTO usuario (emailUser, passwordUser)
                VALUES('" . $tipo . "','" . $email . "','" . $password . "');";
        $consulta = $db->query($sql);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }
}