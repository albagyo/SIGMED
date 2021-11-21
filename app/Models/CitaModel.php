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

    public function guardarCita($data)
    {
        $sql = "INSERT INTO cita (fecha, hora, codMedico, cedPaciente)
                VALUES ('" .$data['fecha']. "','" .$data['hora']. "'," .$data['codMedico']. ",'" .$data['cedPaciente']. "');";
        $consulta = $this->db->query($sql);
    }

    public function reprogramarCita($cod_cita, $fecha, $hora)
    {
        $sql = "UPDATE cita SET fecha ='".$fecha."', hora = '".$hora."' where codCita = ".$cod_cita.";";
        $consulta = $this->db->query($sql);
    }

    public function eliminarCita($cod_cita)
    {
        $sql = "delete from cita where codCita= '".$cod_cita."';";
        $consulta = $this->db->query($sql);
    }

    public function obtenerCitasPaciente($cod_paciente)
    {
        $sql = "select * from cita where codPaciente = ".$cod_paciente.";";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    }

    public function obtenerCitasMedico($cod_medico)
    {
        $sql = "select * from cita where codMedico = '".$cod_medico."';";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    } 
}