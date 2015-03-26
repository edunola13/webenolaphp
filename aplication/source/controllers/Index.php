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
        $this->load_view($last_param);
    }

}
?>