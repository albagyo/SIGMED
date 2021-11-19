<?php

/*
$controllers = array(
    'Home' => ['index'],
    'Cliente'=>['index', 'agregar','guardar', 'confirmar','error']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'index');
    }
} else {
    call('Home', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Cliente':
            $controller = new ClienteController();
            break;
        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>
*/