<?php


$controllers = array(
    'Home' => ['index'],
    'Login'=>['index', 'acceder'],
    'Register'=>['index', 'registrar'],
    'Cita'=>['index', 'agendarCitaPaciente', 'reprogramar', 'cancelar']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Login', 'index');
    }
} else {
    call('Login', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Login':
            $controller = new LoginController();
            break;
        case 'Register':
            $controller = new RegisterController();
            break;
        case 'Cita':
                $controller = new CitaController();
                break;
        default:
            break;
    }

    $controller->{$action}();
}

?>
*/