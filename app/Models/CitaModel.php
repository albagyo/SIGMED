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

    public function eliminarCita($cod_cita)
    {
        $consulta = $this->db->query("delete from cita where cod_cita= '". $cod_cita."';");
    }

    public function reprogramarCita($cod_cita)
    {

    }

    public function obtenerCitasPaciente($cod_paciente)
    {
        $consulta = $this->db->query("select * from citas where codPaciente = '".$cod_paciente."';");
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    }

    public function obtenerCitasMedico($cod_medico)
    {
        $consulta = $this->db->query("select * from citas where codMedico = '".$cod_Medico."';");
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    }


   
}