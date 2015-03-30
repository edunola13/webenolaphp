<?php

import_aplication_file('source/models/Doc');
class DocDao {
    private $connection;

    public function __construct() {
        $this->connection= new En_DataBase();
    }
    
    public function docs($limit = 0, $offset = 10){        
        return $this->connection->getFromWhereInObjects('Doc','documentacion', NULL, array(), 'titulo asc', $limit, $offset);
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
        $this->connection->insertObject('documentacion', $doc);
    }
    
    public function updateDoc($doc){
        $this->connection->updateObject('documentacion', $doc, 'id=:id', array('id' => $doc->id));
    }
    
    public function deleteDoc($id){
        $this->connection->where('id=:id', array('id' => $id));
        $this->connection->delete('documentacion');
    }
}

?>
