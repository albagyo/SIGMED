<?php 
require_once('Models/CitaModel.php');
require_once('Models/PacienteModel.php');
require_once('Models/PoliclinicaModel.php');

class CitaController
{
	
	function __construct()
	{
		
	}

    public function index()
    {
        $medico = new MedicoModel();
        $medicos = $medico->listar();
        require_once('Views/Paciente/agendar.php');
    }


    //Agendar cita desde la vista del paciente
	public function agendarCitaPaciente(){
        // Verificar la existencia del parametro codCita 
        if(isset($_POST["codCita"]) && !empty(trim($_POST["codCita"]))){
            //Obtener datos enviados a traves del formulario
            $data['codMedico']=$_POST['nombreMedico'];
            $data['fecha']=$_POST['fecha'];
            $data['codHora']=$_POST['hora'];

            //obtener id de sesion e email de usuario
            session_start();
            $codUser = $_SESSION['id'];
            $emailUser= $_SESSION['emailUser'];

            $paciente = new PacienteModel();
            $data['cedPaciente'] = $paciente->obtenerCedPaciente($codUser);

            $cita = new CitaModel();
            
            if($cita->guardarCita($data))
            {
                $this->confirmarCitaAgendada();
                $message = "Su cita ha sido agendada exitosamente.";
                $cita->notificarViaEmail($emailUser, $message);
            }
            else
            {
                $this->errorCitaAgendada();
            }
        }
	}


    public function reprogramar()
    {
        // Verificar la existencia del parametro codCita 
        if(isset($_GET["codCita"]) && !empty(trim($_GET["codCita"])))
        $cod_cita = trim($_GET["codCita"]);

        // Data a mostrar de la cita que se quiere reprogramar
        $cita = new CitaModel();
        $data = $cita->obtenerData($codCita);

        // Obtener email del usuario logueado 
        session_start();
		$emailUser = $_SESSION['emailUser'];

        if($cita->actualizar($cod_cita)){
            $this->confirmarCitaAgendada();
            $message = "Su cita ha sido reprogramada exitosamente.";
            $cita->notificarViaEmail($emailUser, $message);
        }
        else{
            $this->errorCitaAgendada();
        }
        //colocar aquí vista de agendar cita en el calendario
        require_once('Views/');

    }


    public function cancelar(){
        // Verificar la existencia del parametro codCita 
        if(isset($_GET["codCita"]) && !empty(trim($_GET["codCita"]))){
            $cod_cita = trim($_GET["codCita"]);

            $cita = new CitaModel();
            if($cita->eliminar($cod_cita)){
                $this->confirmarCitaCancelada();
                $message = "Su cita ha sido cancelada exitosamente.";
                $cita->notificarViaEmail($emailUser, $message);
            }
            else{
                $this->errorCitaCancelada();
            }
        }
    }


    public function mostrarMisCitas(){
        $cita = new CitaModel();
        $paciente = new PacienteModel();

        session_start(); 
        $codUser = $_SESSION['id'];
        $ced_paciente = $paciente->obtenerCedPaciente($codUser);

        $citas = $cita->obtenerCitasPaciente($ced_paciente);
        require_once ("colocar aquí vista de Mis citas");
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
