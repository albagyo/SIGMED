<?php
require_once "BasedeDatos.php";

class PacienteModel
{
    private $pacientes;

    public function __construct()
    {
        $this->pacientes = array();
    }

    //Registrar datos del paciente en la base de datos
    public function registrarPaciente($cedula, $nombre, $apellido, $codUser)
    {
        $sql = "INSERT INTO paciente (cedPaciente, nombrePaciente, apellidoPaciente, codUser)
                VALUES('" . $cedula . "','" . $nombre . "','" . $apellido . "','" . $codUser . "');";
        $consulta = $db->query($sql);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }


    public function obtenerCedPaciente($codUser)
    {
        $sql = "SELECT cedPaciente FROM paciente where codUser = '". $codUser ."';";
        $consulta = $db->query($sql);
        return $consulta;
    }
    
    public function verificarPaciente($cedPaciente)
    {
        $sql = "SELECT count(*) as contador FROM paciente WHERE cedPaciente = '" . $cedPaciente . "';";
        $consulta = $db->query($sql);
        $cantidad_pacientes = $consulta->fetch_assoc();
        if ($cantidad_pacientes['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerPacientes()
    {
        $sql = "SELECT * FROM paciente;";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $pacientes[] = $filas;
        }
        return $pacientes;
    }

}