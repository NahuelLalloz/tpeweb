<?php
require_once './app/controllers/jugadorcontrolador.php';
require_once './app/controllers/equipocontrolador.php';
require_once './app/models/equipomodel.php';
require_once './app/models/registromodel.php';
require_once './app/controllers/registrocontroller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$authController= new LoginControlador();

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'inicio':
      $controller= new EquipoControlador();
        $controller-> showEquipos();
       $controller = new InicioControlador();
       $controller-> showJugadores();
       
     
        break;
        case 'login':
            $authController->showLogin();
            break;
       case 'verify':
            $authController->login();
       
            break;
        
            case 'logout':
                $authController->logout();
                break; 

            
           
    case 'insert_jugador':
    $controller = new InicioControlador();
    $controller-> InsertarJugador();
    break;
    case 'insert_equipo':
        $controller = new EquipoControlador();
    $controller-> InsertarEquipo();
    break;
    
    case 'borrar': 
        $controller = new InicioControlador();
        $controller->BorrarJugadorId($params[1]); 
        
        $controller = new EquipoControlador();
        $controller->BorrarEquipoId($params[1]);
        break;
         


    } 


