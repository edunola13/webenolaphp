<?php

import_aplication_file('source/models/Doc');
class DocDao {
    private $connection;

    public function __construct() {
        $this->connection= new En_DataBase();
    }
    
    public function docs($search = "", $limit = 0, $offset = 0){
        $this->connection->from('documentacion');
        $this->connection->where_like("titulo", $search);
        $this->connection->or_where_like("version", $search);
        $this->connection->order('titulo asc');
        $this->connection->limit($limit, $offset);
        return $this->connection->getInObjects('Doc');
    }
    
    public function cantDocs($search = ""){
        $this->connection->select("count(*)");
        $this->connection->from("documentacion");
        $this->connection->where_like("titulo", $search);
        $this->connection->or_where_like("version", $search);
        $res= $this->connection->get();
        $cant= $res->fetch();
        return $cant[0];
    }
    
    public function docId($id){
        $res= $this->connection->getFromWhere('documentacion', 'id=:id', array('id' => $id));
        return $this->connection->firstResultInObject($res, 'Doc');
    }
    
    public function doc($nombreUrl){
        $res= $this->connection->getFromWhere('documentacion', 'nombreUrl=:nombreUrl', array('nombreUrl' => $nombreUrl));
        return $this->connection->firstResultInObject($res, 'Doc');
    }
    
    public function addDoc($doc){
        $doc->fechaActualizacion= date('Y-m-d');
        return $this->connection->insertObject('documentacion', $doc);
    }
    
    public function updateDoc($doc){
        $doc->fechaActualizacion= date('Y-m-d');
        return $this->connection->updateObject('documentacion', $doc, 'id=:id', array('id' => $doc->id));
    }
    
    public function deleteDoc($id){
        $this->connection->where('id=:id', array('id' => $id));
        return $this->connection->delete('documentacion');
    }
}

?>
