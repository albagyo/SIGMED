<?php
require_once "BasedeDatos.php";

class MedicoModel
{
    private $medicos;

    public function __construct()
    {
        $this->medicos = array();
    }

    //listar solo nombre del medico
    public function listarMedicos()
    {
        $sql = "SELECT nombreMedico+apellidoMedico as medico FROM medico;";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

    public function obtenerMedicos()
    {
        $sql = "SELECT * FROM medico;";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }

    public function filtrarMedico($cod_especialidad)
    {
        $sql = "SELECT nombreMedico+apellidoMedico FROM medico WHERE codEspecialidad=".$cod_especialidad.";";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }
}