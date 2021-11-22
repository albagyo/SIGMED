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
        $sql = "SELECT nombreMedico+apellidoMedico as medico FROM medico;";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

    public function obtenerMedicos()
    {
        $sql = "SELECT * FROM medico;";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

    public function filtrarMedico($cod_especialidad)
    {
        $sql = "SELECT nombreMedico+apellidoMedico FROM medico WHERE codEspecialidad=".$cod_especialidad.";";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }
}