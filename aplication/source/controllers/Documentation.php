<?php

import_aplication_file("source/daos/DocDao");
class Documentation extends En_Controller{
    private $dao;
    
    public function __construct() {
        parent::__construct();
        $this->dao= new DocDao();
    }
    
    public function doGet(){  
        if(!isset($this->uri_params[0]) && !isset($this->uri_params[1])){
            $docs= array();
            $docs['introduction']= $this->dao->docsByCategoria('introduction',LOCALE);
            $docs['tutorial']= $this->dao->docsByCategoria('tutorial',LOCALE);
            $docs['database']= $this->dao->docsByCategoria('database',LOCALE);
            $docs['libraries']= $this->dao->docsByCategoria('libraries',LOCALE);
            $docs['documentation']= $this->dao->docsByCategoria('documentation',LOCALE);
            $this->load_view('documentation_home', array('section' => 'documentation', 'docs' => $docs));
        }else{
            $categoria= $this->uri_params[0];
            $navs= $this->dao->docsByCategoria($categoria,LOCALE);
            
            $doc= null;
            $actualDoc= 0;
            $previousDoc= NULL;
            $nextDoc= NULL;
            if(isset($this->uri_params[1])){
                $doc= $this->dao->doc($this->uri_params[1],$categoria,LOCALE);
                if($doc == NULL)$this->error();
                $actualDoc= $doc->id;
                $previousDoc= $this->dao->previousDoc($doc);
                $nextDoc= $this->dao->nextDoc($doc);
            }
            
            $this->load_view('documentation', array('section' => 'documentation', 'docSection' => $categoria, 'navs' => $navs, 'doc' => $doc, 'actualDoc' => $actualDoc, 'previousDoc' => $previousDoc, 'nextDoc' => $nextDoc));
        }   
    }
    
    protected function error() {
        error_404();
        exit;
    }
}

?>
