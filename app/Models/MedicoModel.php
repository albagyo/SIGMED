<?php

class MedicoModel
{
    private $db;
    private $medicos;

    public function __construct()
    {
        $this->db = Connection::conectar();
        $this->medicos = array();
    }

    //listar solo nombre del medico
    public function listarMedicos()
    {
        $consulta = $this->db->query("select nombreMedico+apellidoMedico as medico from medico;");
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

    public function obtenerMedicos()
    {
        $consulta = $this->db->query("select * from medico;");
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

    public function filtrarMedico($cod_especialidad){
        $consulta = $this->db->query("select nombreMedico+apellidoMedico from medico where codEspecialidad='".$cod_especialidad."';");
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }
}