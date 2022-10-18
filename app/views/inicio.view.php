<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class InicioView{
    private $smarty;
    
    function __construct()
    {
      $this->smarty = new Smarty();
    }


    function showJugador($jugador){
      foreach ($jugador as $jugadores) {
                
        }
      
      $this->  smarty = new Smarty();
      $this-> smarty->assign('jugador', $jugador);
      $this-> smarty -> display('templates/jugadores.tpl');
    }
    
    




    function showEquipos($equipos){  
  foreach ($equipos as $equipo) {
        
        }
        $this->smarty = new Smarty();
        $this->smarty->assign('equipos', $equipos);
        $this->smarty -> display('templates/equipos.tpl');

      }
      function ShowHomeLocation(){
        header("Location: ".BASE_URL."inicio");
      }
      public function showError(){
        $smarty = new Smarty();
        $smarty->display('templates/error.tpl'); 
      }
    
    }
    
    
?>
