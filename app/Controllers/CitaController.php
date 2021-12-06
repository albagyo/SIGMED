<?php 
require_once('Models/CitaModel.php');
require_once('Models/PacienteModel.php');

class CitaController
{
	
	function __construct()
	{
		
	}

    //Agendar cita desde la vista del paciente
	public function agendarCitaPaciente(){
        $data['codMedico']=$_POST['nombreMedico'];
		$data['fecha']=$_POST['fecha'];
		$data['codHora']=$_POST['hora'];

        session_start();
		$codUser = $_SESSION['codUser'];
		
		$paciente = new PacienteModel();
        $data['cedPaciente'] = $paciente->obtenerCedPaciente($codUser);

        $cita = new CitaModel();
        
        if($cita->guardarCita($data))
        {
            $this->confirmar();
        }
        else
        {
            $this->error();
        }
	}

    public function reprogramarCita($cod_cita)
    {
        $codCita = $cod_cita;

        //colocar aquí vista de agendar cita en el calendario
        require_once('Views/');

        

    }



    //Confirmar que la cita se ha agendado exitosamente
    public function confirmar()
    {
        //colocar aquí vista de confirmación de cita
		require_once('Views/');
	}

    public function error()
    {

    }

	
}
?>
