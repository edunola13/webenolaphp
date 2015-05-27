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
            $this->load_view($last_param, array('section' => $last_param, 'tipoError' => 'success', 'mensaje' => NULL, 'email' => $email));
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
            $tipoError= 'danger';
            if($this->validate($email)){
                //Los campos son correctos, armo el mail
                $correo= "info@enolaphp.com";
                $asunto = $email['asunto'];
                $cuerpo = "Nombre: ". $email['nombre']. "\n" . "Email:". $email['email']. "\n \n" . $email['mensaje'];

                //Modifico el header para poner como from y reply to al mail del consultante
                $headers = 'From: '.  $email['email']."\r\n".
                'Reply-To: '.  $email['email']."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                $resultado = mail($correo, $asunto, $cuerpo, $headers);

                //Ve si se pudo o no enviar el mail y en base a eso arma una respuesta
                if ($resultado) {
                    $tipoError= 'success';
                    $mensaje= "El correo fue enviado correctamente.";
                    $email= NULL;
                }
                else{                    
                    $mensaje= "El correo no pudo ser enviado. Por favor, vuelva a intentarlo.";
                }
            }else{
                $mensaje= "Los campos se encuentran mal completados";
            }
            
            $this->load_view($last_param, array('section' => $last_param, 'tipoError' => $tipoError,'mensaje' => $mensaje, 'email' => $email));
        }else{     
            $this->doGet();
        }
    }

    protected function config_validation() {
        return array('nombre' => 'required|max_length[75]',
            'email' => 'required|email',
            'asunto' => 'required|max_length[100]',
            'mensaje' => 'required');
    }
}
?>