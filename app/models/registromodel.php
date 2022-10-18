<?php
class LoginModel{
    private $db;
    
    function __construct()
    
    {
        $this->db = $this->connect();   
    }
   
    private function connect(){
        $db= new PDO ('mysql:host=localhost;'.'dbname=tpee;charset=utf8', 'root', '');
        return $db;
    }  
function getUserByEmail($email){
    $db = $this->connect();
    $query=$db->prepare ("SELECT * FROM usuarios WHERE email =?");
    $query->execute ([$email]);
    return $query->fetch(PDO::FETCH_OBJ);
}
   
}
    ?>