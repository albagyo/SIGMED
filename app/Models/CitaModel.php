<?php

class CitaModel
{
    private $db;
    private $citas;

    public function __construct()
    {
        $this->db = Connection::conectar();
        $this->citas = array();
    }

    public function guardarCita()
    {
        
    }

    public function eliminarCita()
    {
        //$consulta = $this->db->query("delete from cita where ")
    }

    public function reprogramarCita()
    {

    }

    public function obtenerCitas()
    {
        $consulta = $this->db->query("select * from citas;");
        while ($filas = $consulta->fetch_assoc()) {
            $medicos[] = $filas;
        }
        return $medicos;
    }



   
}