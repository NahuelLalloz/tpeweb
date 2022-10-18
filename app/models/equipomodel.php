<?php
include_once './app/helpers/auth.helpers.php';
class EquipoModel{
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

   

    function getEquipos(){
    
    
    $query = $this->db->prepare('SELECT * FROM equipos');
    $query-> execute();
    $equipos= $query-> fetchAll(PDO::FETCH_OBJ);
    return $equipos;
}

function InsertarEquipo($equipo, $victorias, $derrotas){
    $query = $this->db->prepare ("INSERT INTO equipos(nombre_equipo, victorias_total, derrotas_total) VALUES (?, ?, ?)");
   
    $query->execute([$equipo, $victorias, $derrotas]);
    return $this->db->lastInsertId();

}


function BorrarEquipo($id_equipos){
    $this->authHelper->checkLoggedIn();
    $query = $this->db->prepare("DELETE FROM equipos WHERE id_equipos=?");
    $query->execute([$id_equipos]);
   
}



}
?>

