<?php

class Login extends En_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function doGet(){
        if($this->request->session->exist('user_logged')){
            redirect("adminDoc");
        }
        else{
            $user= array('user' => NULL, 'password' => NULL);
            $this->load_view("login", array('user' => $user ,'mensaje' => NULL));
        }
    }
    
    public function doPost(){
        if(! $this->request->session->exist('user_logged')){
            import_librarie("Validation");
            $user;
            $this->read_fields($user);
            if(! $this->validate($user)){
                $this->load_view("login", array('user' => $user, 'mensaje' => NULL));
            }            
            else{
                if($user['user'] != "administrator" || $user['password'] != "anaEdu1112"){
                    //Armo un mensaje de respuesta
                    $mensaje= 'El usuario o contraseña son invalidos';
                    //Lo mando al formulario con el mensaje
                    $this->load_view("login", array('user' => $user, 'mensaje' => $mensaje));
                }
                else{
                    //Seteo el tipo de usuario
                    $this->request->session->set('user_logged', 'administrator');
                    //Redirecciono al back
                    redirect("adminDoc");
                }
            }
        }
        else{
            //Redirecciono al back
            redirect("adminDoc");
        }
    }
    
    protected function configValidation(){
        return array(
            'user' => 'required|user_name',
            'password' => 'required|user_name');                
    }
}

?>
