<?php
// Conexion a la base de datos
require_once "BasedeDatos.php";
require_once "UsuarioModel.php";

// Iniciar sesion
session_start();
 
// Verificar si el usuario ya está logueado, si lo está entonces redirigirlo a home 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Definir e inicializar variables
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verificar si el email está vacío
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor introduzca su correo electronico.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Verificar si la contraseña esta vacia
    if(empty(trim($_POST["passwd"]))){
        $password_err = "Por favor introduzca su contraseña.";
    } else{
        $password = trim($_POST["passwd"]);
    }
    
    // Validar credenciales
    if(empty($username_err) && empty($password_err)){
        // Verificar si el usuario existe
        $user = new UsuarioModel();
        $existe_usuario = $user->verificarUsuario($email);

        if(!$existe_usuario){
            $login_err = "Este orreo electronico no es valido.";
        }
        else {
        // Si el usuario existe entonces 
            // Obtener contraseña correspondiente al usuario
            $hashed_password = $user->obtenerHashedPassword($email);

            // Verificar contraseña
            if(password_verify($password, $hashed_password)){
                // si la contraseña existe entonces iniciar una nueva sesion
                 session_start();
                            
                 // Guardar informacion de usuario en variables SESSION
                 $codUser = $user->obtenerCodUser($email);
                 $_SESSION["loggedin"] = true;
                 $_SESSION["id"] = $codUser;
                 $_SESSION["emailUser"] = $email;                            
                 
                 // Redireccionar a la pagina de agendar
                 header("location: agendar.php");
            } else{
                 // Password is not valid, display a generic error message
                 $login_err = "La contraseña es incorrecta.";
                }
        }             
    }
}
?>