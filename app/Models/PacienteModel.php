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
        $consulta = $this->db->query("insert into paciente (cedPaciente, nombrePaciente, apellidoPaciente, fechaNac, emailPaciente, contrasena)
        values('" . $data['cedPaciente'] . "','" . $data['nombrePaciente'] . "','" . $data['apellidoPaciente'] . "','" . $data['fechaNac'] . "','" . $data['emailPaciente'] ."','" . $data['contrasena'] .  "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    
    public function verificarPaciente($cedPaciente)
    {
        $consulta = $this->db->query("select count(*) as contador from paciente where cedPaciente = '" . $cedPaciente . "';");
        $cantidad_pacientes = $consulta->fetch_assoc();
        if ($cantidad_pacientes['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerPacientes()
    {
        $consulta = $this->db->query("select * from paciente;");
        while ($filas = $consulta->fetch_assoc()) {
            $pacientes[] = $filas;
        }
        return $pacientes;
    }

}