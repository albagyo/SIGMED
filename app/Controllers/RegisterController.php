<?php
//Conexión a la base de datos
require_once "BasedeDatos.php";
//Modelos 
require_once('Models/PacienteModel.php');
require_once('Models/UsuarioModel.php');
 
// Definir e inicializar variables
$tipo = "P";
$cedula = $nombre = $apellido = $correo = $password = "";
$cedula_err = $nombre_err = $apellido_err =  $correo_err = $password_err  = "";
 
// Procesar datos del form  
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar cedula
    if(empty(trim($_POST["cedula"]))){
        $cedula_err = "Por favor introduzca su cedula.";
    } elseif(!preg_match('/^[a-zA-Z\-0-9]+$/', trim($_POST["cedula"]))){  
        $cedula_err = "Caracteres invalidos para la cedula.";
    } else{
         $cedula = trim($_POST["cedula"]);
    }

    // Validar nombre 
    if(empty(trim($_POST["nombre"]))){
        $nombre_err = "Por favor introduzca su nombre.";
    } elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["nombre"]))){ 
        $nombre_err = "El nombre solo puede contener letras.";
    } else{
        $nombre = trim($_POST["nombre"]);
    }

    // Validar apellido
    if(empty(trim($_POST["apellido"]))){
        $apellido_err = "Por favor introduzca su apellido.";
    } elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["apellido"]))){ 
        $apellido_err = "El apellido solo puede contener letras.";
    } else{
         $apellido = trim($_POST["apellido"]);
    }
    

    // Validar correo
    if(empty(trim($_POST["email"]))){
        $correo_err = "Por favor introduzca su correo electronico.";
    }elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){ 
        $correo_err = "Correo invalido.";
    } else{
         $correo = trim($_POST["email"]);
    }


    // Validar contraseña
    if(empty(trim($_POST["passwd"]))){
        $password_err = "Por favor introduzca la contraseña.";     
    } elseif(strlen(trim($_POST["passwd"])) < 6){
        $password_err = "La contraseña debe contener al menos 6 caracteres.";
    } else{
        $password = trim($_POST["passwd"]);
    }
    
    // Si no hay error en los campos entonces registrar el usuario
    if(empty($cedula_err) && empty($nombre_err) && empty($apellido_err) && empty($correo_err) && empty($password_err)){
        $user = new UsuarioModel();
        $paciente = new PacienteModel();

        //verificar si existe 
        if($user->registrarUsuario($tipo, $correo, $password)){
            $codUser = $user->obtenerUltimoCodUser();
            if($paciente->registrarPaciente($cedula, $nombre, $apellido, $codUser)){
                require_once('Views/Paciente/calendario/agendar.php');
            }
        }
    }
    else {
        require_once('Views/Layouts/register.php');
    }    
}

?>