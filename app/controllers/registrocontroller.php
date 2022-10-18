<?php 
include_once 'app/models/registromodel.php';

include_once 'app/views/registro.view.php';
class LoginControlador{
  

private $view;


function __construct(){
 
    $this->view = new LoginView();
  $this->model = new LoginModel();
  $this->db = $this->connect(); 
}
private function connect(){
   
    $db= new PDO ('mysql:host=localhost;'.'dbname=tpee;charset=utf8', 'root', '');
    return $db;
}  


  function showLogin() {
    session_start();
    $this->view->showLogin();
}
function login(){
   $email = $_POST['email'];
   $password = $_POST['password'];
   
   $user = $this->model->getUserByEmail($email); 
    if ($user && password_verify($password, $user->password)){
        
       session_start();
       $_SESSION['USER_ID'] = $user->id_usuario;
       $_SESSION['USER_EMAIL'] = $user->email;
       $_SESSION['IS_LOGGED'] = true;

       header("Location: " . BASE_URL. "inicio"); 
    }
       else{
        $this->view->showLogin("Usuario o Password incorrectos");
       }
    }
       function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL. "inicio");
    }
              
        
        

    }




?>