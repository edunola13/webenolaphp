<?php

import_aplication_file("source/daos/DocDao");
class AdminDoc extends En_Controller{
    private $dao;
    
    public function __construct() {
        parent::__construct();
        $this->dao= new DocDao();
    }
    
    public function index(){
        import_librarie('Paginator');
        $docs= $this->dao->docs();
        $this->load_view('admin/docs', array('section' => 'documentation', 'docs' => $docs, 'paginador' => new Paginator(10, 50, 1)));
    }
    
    public function add(){
        if($this->request->request_method == "GET"){
            $doc= new Doc();
            $this->load_view('admin/formDoc', array('doc' => $doc));
        }else{
            $mensaje= "";
            $tipoMensaje= "danger";
            $doc;
            $this->read_fields($doc, 'Doc');
            if($this->validate($this->doc)){
                if($this->dao->addDoc($this->doc)){
                    $mensaje= "Agregado Correctamente";
                    $tipoMensaje= "success";
                }else{
                    $mensaje= "Hubo un error, vuelva a intentarlo";
                }
            }else{
                $mensaje= "Los campos se encuentran mal completados";
            }
            $this->load_view('admin/formDoc', array('doc' => $doc, 'mensaje' => $mensaje, 'tipoMensaje' => $tipoMensaje));
        }
    }
    
    public function update(){
        if($this->request->method == "GET"){
            $id= $this->uri_params[0];
            $doc= $this->dao->docId($id);
            $this->load_view('admin/formDoc', array('doc' => $doc));
        }else{
            $mensaje= "";
            $tipoMensaje= "danger";
            $doc;
            $this->read_fields($doc, 'Doc');
            if($this->validate($this->doc)){
                if($this->dao->updateDoc($this->doc)){
                    $mensaje= "Modificado Correctamente";
                    $tipoMensaje= "success";
                }else{
                    $mensaje= "Hubo un error, vuelva a intentarlo";
                }
            }else{
                $mensaje= "Los campos se encuentran mal completados";
            }
            $this->load_view('admin/formDoc', array('doc' => $doc, 'mensaje' => $mensaje, 'tipoMensaje' => $tipoMensaje));
        }
    }
    
    public function delete(){
        $id= $this->uri_params[0];
        if($this->dao->deleteDoc($id)){
            Tags::alert_message("success", 'Eliminado Correctamente');
        }else{
            Tags::alert_message('danger', 'Hubo un error, vuelva a intentarlo');
        }
    }
    
    protected function config_validation() {
        $config= array('titulo' => 'required|max_length[100]',
            'contenido' => 'required',
            'version' => 'required',
            'locale' => 'required',
            'nombreUrl' => 'required');
        return $config;
    }
}
    
?>
