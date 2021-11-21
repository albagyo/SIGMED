<?php

class PacienteModel
{
    private $db;
    private $pacientes;

    public function __construct()
    {
        $this->db = Connection::conectar();
        $this->pacientes = array();
    }

    //la variable $data es obtenida del formulario de registrar usuario
    public function registrarPaciente($data)
    {
        $sql = "INSERT INTO paciente (cedPaciente, nombrePaciente, apellidoPaciente, fechaNac, emailPaciente, contrasena)
                VALUES('" . $data['cedPaciente'] . "','" . $data['nombrePaciente'] . "','" . $data['apellidoPaciente'] . "','" . $data['fechaNac'] . "','" . $data['emailPaciente'] ."','" . $data['contrasena'] .  "');";
        $consulta = $this->db->query($sql);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    
    public function verificarPaciente($cedPaciente)
    {
        $sql = "SELECT count(*) as contador FROM paciente WHERE cedPaciente = '" . $cedPaciente . "';";
        $consulta = $this->db->query($sql);
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
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $pacientes[] = $filas;
        }
        return $pacientes;
    }

}