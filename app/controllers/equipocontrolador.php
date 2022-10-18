<?php 

include_once 'app/models/equipomodel.php';
include_once 'app/views/inicio.view.php';
class EquipoControlador {
  
private $model;
private $view;


function __construct(){
  $this->view = new inicioView();
  
  $this->model = new EquipoModel();
}
function showEquipos(){
  $equipos = $this->model-> getEquipos();

  $this->view->showEquipos($equipos);
}


function InsertarEquipo(){
 
  $this->model->InsertarEquipo($_POST['input_equipo'],$_POST ['input_victorias'], $_POST ['input_derrotas']);
  $this->view->ShowHomeLocation();
}


function BorrarEquipoId($id_equipos){
 
  $this->model->BorrarEquipo($id_equipos);
  $this->view->ShowHomeLocation();
}
  
}


?>