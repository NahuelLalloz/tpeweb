<?php 

class JugadorModel{
private $db;

function __construct()

{
    $this->db = $this->connect();   
    $this-> authHelper = new AuthHelper();
}
    
   private function connect(){
        $db= new PDO ('mysql:host=localhost;'.'dbname=tpee;charset=utf8', 'root', '');
        return $db;
    }  
function getJugador() {

    $query = $this-> db->prepare("SELECT * FROM jugador");
    $query-> execute();
    $jugador= $query-> fetchAll(PDO::FETCH_OBJ);

    return $jugador;
}

function InsertarJugador($jugador){
    $query = $this->db->prepare("INSERT INTO jugador(jugadores) VALUES (?)");
    $query->execute(array($jugador));
    return $this->db->lastInsertId();
    

    
    }
    function BorrarJugador($jugadores){
        $this->authHelper->checkLoggedIn();
        $query = $this->db->prepare("DELETE FROM jugador WHERE id_jugador=?");
        $query->execute([$jugadores]);
        
    }
    

}

    




?>