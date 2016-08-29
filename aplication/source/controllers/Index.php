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
                $correo= "edunola13@hotmail.com";
                $asunto = $email['asunto'];
                $cuerpo = "Nombre: ". $email['nombre']. "<br/>" . "Email:". $email['email']. "<br/><br/>" . $email['mensaje'];

                import_librarie('PHPMailer/class.phpmailer');            
            
                $mail = new PHPMailer();
                $mail->IsSMTP();  // telling the class to use SMTP  	
                //$mail->SMTPDebug = 2;

                $mail->Host     = "smtp.live.com";
                $mail->SMTPAuth      = true;
                $mail->SMTPSecure    = 'tls';
                $mail->Port          = 587;
                $mail->Username      = "edunola13@hotmail.com"; // SMTP account username
                $mail->Password      = "Anabella89$";

                $mail->SetFrom($correo, 'ENOLAPHP - '.$asunto);

                $mail->AddAddress($correo);
				
                $mail->Subject  = utf8_decode('ENOLAPHP - '.$asunto);
                $mail->AltBody = 'Use un visor compatible con HTML';
                $mail->MsgHTML(utf8_decode($cuerpo));		
                $mail->WordWrap = 50;
                set_time_limit(200);
                if($mail->Send()) {
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