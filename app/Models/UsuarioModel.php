<?php
class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = Conexion::conectar();
    }

    //Almacenar en la bd los datos del usuario 
    public function registrarUsuario($tipo, $email, $password){
        $sql = "INSERT INTO usuario (emailUser, passwordUser)
                VALUES('" . $tipo . "','" . $email . "','" . $password . "');";
        $consulta = $this->db->query($sql);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    public function verificarUsuario($emailUser)
    {
        $sql = "SELECT count(*) as contador FROM usuario WHERE emailUser = '" . $emailUser . "';";
        $consulta = $this->db->query($sql);
        $cantidad_usuario = $consulta->fetch_assoc();
        if ($cantidad_usuario['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerUltimoCodUser(){
        $sql = "SELECT max(codUser) FROM usuario;";
        $consulta = $this->db->query($sql);
        return $consulta;
    }

    public function obtenerHashedPassword($emailUser){
        $sql = "SELECT passwordUser FROM usuario WHERE emailUser = '" . $emailUser . "';";
        $consulta = $this->db->query($sql);
        $result = $consulta->fetch_row()[0];
        return $result;
    }

    public function obtenerCodUser($emailUser){
        $sql = "SELECT codUser FROM usuario WHERE emailUser = '" . $emailUser . "';";
        $consulta = $this->db->query($sql);
        $result = $consulta->fetch_row()[0];
        return $result;
    }
}