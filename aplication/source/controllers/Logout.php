<?php

class Logout extends En_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function doGet(){
        //Si esta logueado borro la sesion
        if($this->request->session->exist('user_logged')){
            $this->request->session->delete_session();
        }
        //Redirecciono al front
        redirect("");
    }
}

?>
