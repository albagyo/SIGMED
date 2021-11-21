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
    
    //revisar join
    public function filtrarEspecialidad($cod_policlinica){
        $consulta = $this->db->query("select e.nombreEspecialidad from medico as m JOIN especialidad as e
                                    on m.codEspecialidad=e.codEspecialidad JOIN policlinica as p
                                    on p.codPoliclinica=m.codPoliclinica
                                    where m.codPoliclinica='".$cod_policlinica."';");
        while ($filas = $consulta->fetch_assoc()) {
            $especialidades[] = $filas;
        }
        return $especialidades;
    }

}