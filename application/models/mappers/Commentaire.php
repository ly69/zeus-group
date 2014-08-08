<?php

class Application_Model_Mapper_Commentaire extends Application_Model_Mapper_MapperAbstract{

    

   

    public function toModel($row) {
        $commentaire = new Application_Model_Commentaire();
        $commentaire->setId($row->idcommentaire)
                ->setNoteCommentaire($row->note_commentaire)
                ->setComCommentaire($row->com_commentaire);
        return $commentaire;
    }

    public function objectToRow($object) {
        
    }

    public function rowToObject(Zend_Db_Table_Row $row) {
        
    }

}
