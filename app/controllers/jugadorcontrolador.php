<?php 
include_once 'app/models/jugadormodel.php';
include_once 'app/views/inicio.view.php';
class InicioControlador {
  
private $model;
private $view;


function __construct(){
  $this->view = new inicioView();
  $this->model = new JugadorModel();
  
}
function showJugadores(){
 
  $jugador = $this->model-> getJugador();
  
    $this->view->showJugador($jugador);
}

function InsertarJugador(){

  $this->model->InsertarJugador($_POST['input_jugador']);
  $this->view->ShowHomeLocation();
  
}
function BorrarJugadorId($id_jugadores){
  if(empty($_POST)){
  $this->model->BorrarJugador($id_jugadores);
  $this->view->ShowHomeLocation();
}
else{
  $this->InicioView->showError();
}

}

}


 
 



?>