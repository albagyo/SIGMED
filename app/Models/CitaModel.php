<?php
require_once "BasedeDatos.php";

class CitaModel
{
    private $citas;
    private $db;

    public function __construct()
    {
        $this->$db = connect::conectar();
        $this->citas = array();
    }

    public function guardar($data)
    {
        $sql = "INSERT INTO cita (fecha, codHora, codMedico, cedPaciente)
                VALUES ('" .$data['fecha']. "','" .$data['codHora']. "'," .$data['codMedico']. ",'" .$data['cedPaciente']. "');";
        $consulta = $this->db->query($sql);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }
   

    public function actualizar($cod_cita, $fecha, $codHora)
    {
        $sql = "UPDATE cita SET fecha ='".$fecha."', codHora = '".$codHora."' where codCita = ".$cod_cita.";";
        $consulta = $this->db->query($sql);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }

    public function eliminar($cod_cita)
    {
        $sql = "DELETE FROM cita where codCita= '".$cod_cita."';";
        $consulta = $this->db->query($sql);
        if($consulta){
            return true;
        } else {
            return false;
        }
    }

    // Obtener datos de una cita para reprogramar
    public function obtenerData($cod_cita)
    {
        $sql = "select * from cita where codCita = ".$cod_cita.";";
        $consulta = $this->db->query($sql);
        return $consulta;
    }


    //obtener citas para la vista Mis Citas del paciente
    public function obtenerCitasPaciente($ced_paciente)
    {
        $sql = "select * from cita where codPaciente = ".$ced_paciente.";";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->citas[] = $filas;
        }
        return $this->citas;
    }

    //obtener citas para la vista del calendario del medico, revisar el getdate()
    public function obtenerCitasMedico($cod_medico, $fecha)
    {
        $sql = "select * from cita where codMedico = ".$cod_medico." and fecha = '".$fecha."';";
        $consulta = $this->db->query($sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->citas[] = $filas;
        }
        return $this->citas;
    } 

    public function notificarViaEmail($email, $message)
    {
        $subject = "Notificacion sobre su cita medica.";
        mail($email, $subject, $message);
    }

}