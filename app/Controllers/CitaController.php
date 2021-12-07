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
        //Obtener datos enviados a traves del formulario
        $data['codMedico']=$_POST['nombreMedico'];
		$data['fecha']=$_POST['fecha'];
		$data['codHora']=$_POST['hora'];

        //obtener id de sesion
        session_start();
		$codUser = $_SESSION['id'];
		
		$paciente = new PacienteModel();
        $data['cedPaciente'] = $paciente->obtenerCedPaciente($codUser);

        $cita = new CitaModel();
        
        if($cita->guardarCita($data))
        {
            $this->confirmarCitaAgendada();
        }
        else
        {
            $this->errorCitaAgendada();
        }
	}


    public function reprogramarCita()
    {
        // Verificar la existencia del parametro codCita 
        if(isset($_GET["codCita"]) && !empty(trim($_GET["codCita"])))
        $codCita = $cod_cita;

        //colocar aquí vista de agendar cita en el calendario
        require_once('Views/');

    }


    public function cancelarCita(){
        // Verificar la existencia del parametro codCita 
        if(isset($_GET["codCita"]) && !empty(trim($_GET["codCita"]))){
            $cod_cita = trim($_GET["codCita"]);

            $cita = new CitaModel();
            if($cita->eliminarCita($cod_cita)){
                $this->confirmarCitaCancelada();
            }
            else{
                $this->errorCitaCancelada();
            }
        }
    }



    //CONFIRMAR
    //Confirmar que la cita se ha agendado exitosamente
    public function confirmarCitaAgendada()
    {
        //colocar aquí vista de confirmación de cita
		require_once('Views/');
	}

    public function errorCitaAgendada()
    {

    }

    public function confirmarCitaCancelada()
    {

    }

    public function errorCitaCancelada()
    {

    }
	
}
?>
