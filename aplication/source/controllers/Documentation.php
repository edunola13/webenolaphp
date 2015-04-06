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
            $docs['introduction']= $this->dao->docsByCategoria('introduccion');
            $docs['tutorial']= $this->dao->docsByCategoria('tutorial');
            $docs['documentacion']= $this->dao->docsByCategoria('documentacion');
            $this->load_view('documentation_home', array('section' => 'documentation', 'docs' => $docs));
        }else{
            $seccion= array();
            switch ($this->uri_params[0]){
                case "introduction":
                    $seccion['sec']= 'introduction';
                    $seccion['title']= 'Introducción';
                    break;
                case "tutorial":
                    $seccion['sec']= 'tutorial';
                    $seccion['title']= 'Tutorial';
                    break;
                case "documentation":
                    $seccion['sec']= 'documentation';
                    $seccion['title']= 'Documentación';
                    break;
                default:
                    $this->error();
                    break;
            }
            $navs= $this->dao->docsByCategoria($seccion['sec']);
            
            $doc= null;
            $actualDoc= 0;
            if(isset($this->uri_params[1])){
                $doc= $this->dao->doc($this->uri_params[1],$seccion['sec']);
                if($doc == NULL)$this->error ();
                $actualDoc= $doc->id;
            }
            
            $this->load_view('documentation', array('section' => 'documentation', 'docSection' => $seccion, 'navs' => $navs, 'doc' => $doc, 'actualDoc' => $actualDoc));
        }   
    }
    
    protected function error() {
        echo "La pagina que solicitaste no existe";
        exit;
    }
}

?>
