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

    public function actualizarCita($cod_cita, $fecha, $hora)
    {
        $sql = "UPDATE cita SET fecha ='".$fecha."', hora = '".$hora."' where codCita = ".$cod_cita.";";
        $consulta = $this->db->query($sql);
    }

    public function eliminarCita($cod_cita)
    {
        $sql = "delete from cita where codCita= '".$cod_cita."';";
        $consulta = $this->db->query($sql);
    }

    //obtener citas para la vista Mis Citas del paciente
    public function obtenerCitasPaciente($cod_paciente)
    {
        $sql = "select * from cita where codPaciente = ".$cod_paciente.";";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    }

    //obtener citas para la vista del calendario del medico, revisar el getdate()
    public function obtenerCitasMedico($cod_medico, $fecha)
    {
        $sql = "select * from cita where codMedico = ".$cod_medico." and fecha = '".$fecha."';";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    } 

    public function notificarViaEmail($email, $message)
    {
        $subject = "Notificacion sobre su cita medica.";
        mail($email, $subject, $message);
    }

    public function obtenerDatosEmail($cod_cita)
    {
        $sql = "SELECT p.emailPaciente FROM paciente as p JOIN cita as c
                on p.cedPaciente=c.cedPaciente WHERE c.codCita= '".$cod_cita."';";
        $email = $this->db->query($sql);
        return $email;
    }
}