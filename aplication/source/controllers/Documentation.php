<?php

import_aplication_file("source/daos/DocDao");
class Documentation extends En_Controller{
    private $dao;
    
    public function __construct() {
        parent::__construct();
        $this->dao= new DocDao();
    }
    
    public function doGet(){       
        $doc= $this->dao->doc('prueba');        
        $this->load_view('documentation', array('section' => 'documentation', 'doc' => $doc));
    }
}

?>
