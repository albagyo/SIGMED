<?php
require_once "BasedeDatos.php";

class CitaModel
{
    private $citas;

    public function __construct()
    {
        $this->citas = array();
    }

    public function guardarCita($data)
    {
        $sql = "INSERT INTO cita (fecha, codHora, codMedico, cedPaciente)
                VALUES ('" .$data['fecha']. "','" .$data['codHora']. "'," .$data['codMedico']. ",'" .$data['cedPaciente']. "');";
        $consulta = $db->query($sql);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }

    public function actualizarCita($cod_cita, $fecha, $codHora)
    {
        $sql = "UPDATE cita SET fecha ='".$fecha."', codHora = '".$codHora."' where codCita = ".$cod_cita.";";
        $consulta = $db->query($sql);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }

    public function eliminarCita($cod_cita)
    {
        $sql = "delete from cita where codCita= '".$cod_cita."';";
        $consulta = $db->query($sql);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }

    //obtener citas para la vista Mis Citas del paciente
    public function obtenerCitasPaciente($ced_paciente)
    {
        $sql = "select * from cita where codPaciente = ".$ced_paciente.";";
        $consulta = $db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $citas[] = $filas;
        }
        return $citas;
    }

    //obtener citas para la vista del calendario del medico, revisar el getdate()
    public function obtenerCitasMedico($cod_medico, $fecha)
    {
        $sql = "select * from cita where codMedico = ".$cod_medico." and fecha = '".$fecha."';";
        $consulta = $db->query($sql);
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
        $email = $db->query($sql);
        return $email;
    }
}