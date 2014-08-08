<?php

class Application_Model_Mapper_Auteur extends Application_Model_Mapper_MapperAbstract {

    const COL_ID = 'id_auteur';
    const COL_NOM = 'name_auteur';
    const COL_ID_USER = 'id_user';
    const COL_AFFICHER = 'afficher_auteur';

    public function objectToRow($auteur) {
        $data = array(
            self::COL_ID => $auteur->getIdAuteur(),
            self::COL_NOM => $auteur->getNameAuteur(),
            self::COL_AFFICHER => $auteur->getAfficherAuteur()
        );

        if ($auteur->getIdUser() !== NULL) {
            $data[self::COL_ID_USER] = $auteur->getIdUser()->getIdUser();
        } else {
            $data[self::COL_ID_USER] = Zend_Db::NULL_TO_STRING;
        }



        return $data;
    }

    public function rowToObject(Zend_Db_Table_Row $row) {
        $auteur = new Application_Model_Auteur();
        $auteur->setIdAuteur($row[self::COL_ID])
                ->setNameAuteur($row[self::COL_NOM])
                ->setIdUser($row[self::COL_ID_USER])
                ->setAfficherUser($row[self::COL_AFFICHER]);
        return $auteur;
    }

    public function getNoAuteur() {
        $auteur = new Application_Model_Auteur();
        $auteur->setNameAuteur('Anonyme');

        return $auteur;
    }

}
