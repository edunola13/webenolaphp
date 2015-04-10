<?php

/**
 * Description of Index
 *
 * @author Enola
 */

class Index extends En_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function doGet(){
        $last_param= 'index';
        if(URIAPP != ''){
            $param= explode("/", URIAPP);
            $last_param= $param[count($param)-1];
        }
        if($last_param == 'contact'){
            $email= array('nombre' => NULL, 'email' => NULL, 'asunto' => NULL, 'mensaje' => NULL);
            $this->load_view($last_param, array('section' => $last_param, 'mensaje' => NULL, 'email' => $email));
        }else{     
            $this->load_view($last_param, array('section' => $last_param));
        }
    }
    
    public function doPost(){
        $last_param= 'index';
        if(URIAPP != ''){
            $param= explode("/", URIAPP);
            $last_param= $param[count($param)-1];
        }
        if($last_param == 'contact'){
            import_librarie('Validation');
            
            $email;
            $this->read_fields($email);
            $mensaje= "";
            if($this->validate($email)){
                
            }else{
                $mensaje= "Los campos se encuentran mal completados";
            }
            $this->load_view($last_param, array('section' => $last_param, 'mensaje' => NULL, 'email' => $email));
        }else{     
            $this->doGet();
        }
    }

    protected function config_validation() {
        return array('nombre' => 'required|max_length[50]',
            'email' => 'required|email',
            'mensaje' => 'required');
    }
}
?>