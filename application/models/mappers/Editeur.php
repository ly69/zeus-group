<?php

class Application_Model_Mapper_Editeur extends Application_Model_Mapper_MapperAbstract {

    const COL_ID = 'id_editeur';
    const COL_NOM = 'name_editeur';
   

    public function objectToRow($editeur) {
        $data = array(
            self::COL_ID => $editeur->getIdEditeur(),
            self::COL_NOM => $editeur->getNameEditeur()
           
        );

        return $data;
    }

    public function rowToObject(Zend_Db_Table_Row $row) {
        $editeur = new Application_Model_Editeur();
        $editeur->setIdEditeur($row[self::COL_ID])
                ->setNameEditeur($row[self::COL_NOM]);
        return $editeur;
    }

    public function getNoEditeur() {
        $editeur = new Application_Model_Editeur();
        $editeur->setNameEditeur('Inconnu');

        return $editeur;
    }

}


