<?php 

class EspecialidadModel
{
    private $db;
    private $especialidades;

    public function __construct()
    {
        $this->db = Connection::conectar();
        $this->especialidades = array();
    }

    public function listarEspecialidades()
    {
        $consulta = $this->db->query("select nombreEspecialidad from especialidad;");
        while ($filas = $consulta->fetch_assoc()) {
            $especialidades[] = $filas;
        }
        return $especialidades;
    }
    
}