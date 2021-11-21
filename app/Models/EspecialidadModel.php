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
        $sql = "SELECT nombreEspecialidad FROM especialidad;";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $especialidades[] = $filas;
        }
        return $especialidades;
    }
    
    //revisar join
    public function filtrarEspecialidad($cod_policlinica)
    {
        $sql = "SELECT e.nombreEspecialidad FROM medico as m JOIN especialidad as e
                on m.codEspecialidad=e.codEspecialidad JOIN policlinica as p
                on p.codPoliclinica=m.codPoliclinica
                WHERE m.codPoliclinica=".$cod_policlinica.";";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $especialidades[] = $filas;
        }
        return $especialidades;
    }

}