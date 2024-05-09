<?php 
require_once('models/Form.php');



class LoginController{

    public $db;

    public function __construct(){
        $this->db = Database::connect();
    }
    
    public function index(){
        $error = 0;

        if($_SERVER['REQUEST_METHOD']==='POST'){
            if(!empty($_POST['email']) && !empty($_POST['password'])){

                $email = mysqli_real_escape_string($this->db, $_POST['email']);
                $password = mysqli_real_escape_string($this->db, $_POST['password']);

                $form = new Form();
                $form->setEmail($email);
                $form->setPassword($password);

                $login = $form->login();
                
                switch ($login) {
                    case 'email': 
                       $error = 'Email no registrado';
                        break;
                    case 'password': 
                       $error = 'Contraseña incorrecta';
                        break;
                    case 'success': 
                       $error = 0;

                       header("Location: index.php?class=UiPrivate&method=index");
                        break;
                }
                
                
            }else{
                $error = 'rellena todos los campos';
            }
        }
        
        require_once('views/login.php');
    }
}  
 
 
?>