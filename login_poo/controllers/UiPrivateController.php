<?php 
require_once('models/User.php');
 
class UiPrivateController{
    public function index(){
        session_start();
        
        $user = new User();
        $user->setId($_SESSION['user_id']);
        $user->setEmail($_SESSION['user_email']);
        $user->setPhone($_SESSION['user_phone']);
        $user->setName($_SESSION['user_name']);
        $user->setRol($_SESSION['user_rol']);
        
        require_once('views/uiPrivate.php');
    }
}  
 
 
?>