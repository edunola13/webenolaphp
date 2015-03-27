<?php

class Documentation extends En_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function doGet(){
        $this->load_view('documentation', array('section' => 'documentation'));
    }
}

?>
