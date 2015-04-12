<?php

import_aplication_file("source/daos/DocDao");
class AdminDoc extends En_Controller{
    private $dao;
    private $cantPorPagina= 10;
    private $actualAction= "add";
    
    public function __construct() {
        parent::__construct();
        $this->dao= new DocDao();
    }
    
    public function index(){
        import_librarie('Paginator');
        
        $search= "";
        $cantidad= $this->dao->cantDocs($search);
        $paginador= new Paginator($this->cantPorPagina, $cantidad, 1);        
        $docs= $this->dao->docs($search, $this->cantPorPagina, 0);
        $this->load_view('admin/docs', array('section' => 'documentation', 'docs' => $docs, 'paginador' => $paginador, 'search' => $search));
    }
    
    public function page(){
        import_librarie('Paginator');
        
        $pagina= 1;
        if(isset($this->uri_params[0]))$pagina= $this->uri_params[0];        
        $search= "";
        if(isset($this->uri_params[1]))$search= $this->uri_params[1];
        
        $cantidad= $this->dao->cantDocs($search);
        $paginador= new Paginator($this->cantPorPagina, $cantidad, $pagina);
        if($paginador->number_of_pages() >= $pagina && $pagina > 0){
            $docs= $this->dao->docs($search, $this->cantPorPagina, $paginador->element_start_position());
            $this->load_view('admin/docs', array('section' => 'documentation', 'docs' => $docs, 'paginador' => $paginador, 'search' => $search));
        }
        else{
            redirect('adminDoc');
        }
    }
    
    public function actualizar(){
        import_librarie('Paginator');
        
        $pagina= 1;
        if(isset($this->uri_params[0]))$pagina= $this->uri_params[0];        
        $search= "";
        if(isset($this->uri_params[1]))$search= $this->uri_params[1];
        
        $cantidad= $this->dao->cantDocs($search);
        $paginador= new Paginator($this->cantPorPagina, $cantidad, $pagina);
        if($paginador->number_of_pages() >= $pagina && $pagina > 0){
            $docs= $this->dao->docs($search, $this->cantPorPagina, $paginador->element_start_position());
            $this->load_view('admin/tabla_docs', array('section' => 'documentation', 'docs' => $docs, 'paginador' => $paginador, 'search' => $search));
        }
        else{
            $docs= $this->dao->docs($search, $this->cantPorPagina, 1);
            $this->load_view('admin/tabla_docs', array('section' => 'documentation', 'docs' => $docs, 'paginador' => $paginador, 'search' => $search));
        }
    }
    
    public function add(){
        $mensaje= NULL;
        $tipoMensaje= "danger";
        if($this->request->request_method == "GET"){
            $doc= new Doc();
            $this->load_view('admin/formDoc', array('doc' => $doc, 'mensaje' => $mensaje, 'tipoMensaje' => $tipoMensaje));
        }else{   
            import_librarie("Validation");
            $doc;
            $this->read_fields($doc, 'Doc');
            $doc->id= NULL;
            if($this->validate($doc)){
                if($this->dao->addDoc($doc)){
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
        $this->actualAction= "update";
        $mensaje= NULL;
        $tipoMensaje= "danger";
        if($this->request->request_method == "GET"){
            $id= $this->uri_params[0];
            $doc= $this->dao->docId($id);
            $this->load_view('admin/formDoc', array('doc' => $doc, 'mensaje' => $mensaje, 'tipoMensaje' => $tipoMensaje));
        }else{
            import_librarie("Validation");
            $doc;
            $this->read_fields($doc, 'Doc');
            if($this->validate($doc)){
                if($this->dao->updateDoc($doc)){
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
            'nombreUrl' => 'required|letters_numbers',
            'orden' => 'required|is_integer');
        if($this->actualAction == "update"){
            $config['id']= 'required';
        }
        return $config;
    }
}
    
?>
