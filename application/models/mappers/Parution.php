<?php

class Application_Model_Mapper_Parution extends Application_Model_Mapper_MapperAbstract {

    const COL_ID = 'id_parution';
    const COL_TITRE = 'titre_parution';
    const COL_AUTEUR = 'auteur_parution';
    const COL_THEME = 'theme_parution';
    const COL_DATE = 'date_parution';
    const COL_QTE_DISPO = 'qte_dispo_parution';
    const COL_QTE_TOTAL = 'qte_total_parution';
    const COL_EDITEUR = 'editeur_parution';
    const COL_COLLECTION = 'collection_parution';
    const COL_DESCRIPTION = 'description_parution';
    const COL_PUBLIER = 'publier_parution';
    const COL_IMAGE = 'image_parution';

    public function objectToRow($parution) {
        $data = array(
            self::COL_ID => $parution->getIdParution(),
            self::COL_TITRE => $parution->getTitreParution(),
            self::COL_DATE => $parution->getDateParution(),
            self::COL_QTE_DISPO => $parution->getQteDispoParution(),
            self::COL_QTE_TOTAL => $parution->getQteTotalParution(),
            self::COL_DESCRIPTION => $parution->getDescriptionParution(),
            self::COL_PUBLIER => $parution->getPublierParution(),
            self::COL_IMAGE => $parution->getImageParution()
        );

        if ($parution->getAuteurParution() !== NULL) {
            $data[self::COL_AUTEUR] = $parution->getAuteurParution()->getIdAuteur();
        } else {
            $data[self::COL_AUTEUR] = Zend_Db::NULL_TO_STRING;
        }

        if ($parution->getThemeParution() !== NULL) {
            $data[self::COL_THEME] = $parution->getThemeParution()->getIdTheme();
        } else {
            $data[self::COL_THEME] = Zend_Db::NULL_TO_STRING;
        }

        if ($parution->getEditeurParution() !== NULL) {
            $data[self::COL_EDITEUR] = $parution->getEditeurParution();
        } else {
            $data[self::COL_EDITEUR] = Zend_Db::NULL_TO_STRING;
        }

        if ($parution->getCollectionParution() !== NULL) {
            $data[self::COL_COLLECTION] = $parution->getCollectionParution();
        } else {
            $data[self::COL_COLLECTION] = Zend_Db::NULL_TO_STRING;
        }

        return $data;
    }

    public function rowToObject(Zend_Db_Table_Row $row) {
        $parution = new Application_Model_Parution();
        $parution->setIdParution($row[self::COL_ID])
                ->setTitreParution($row[self::COL_TITRE])
                ->setDateParution($row[self::COL_DATE])
                ->setQteDispoParution($row[self::COL_QTE_DISPO])
                ->setQteTotalParution($row[self::COL_QTE_TOTAL])
                ->setDescriptionParution($row[self::COL_DESCRIPTION])
                ->setPublierParution($row[self::COL_PUBLIER])
                ->setImageParution($row[self::COL_IMAGE]);

        $rowAuteur = $row->findParentRow('Application_Model_DbTable_Auteur');
        $mapperAuteur = new Application_Model_Mapper_Auteur();
        if ($rowAuteur !== null) {
            $auteur = $mapperAuteur->rowToObject($rowAuteur);
        } else {
            $auteur = $mapperAuteur->getNoAuteur();
        }

        $rowTheme = $row->findParentRow('Application_Model_DbTable_Theme');
        $mapperTheme = new Application_Model_Mapper_Theme();

        if ($rowTheme !== NULL) {
            $theme = $mapperTheme->rowToObject($rowTheme);
        } else {
            $theme = $mapperTheme->getNoTheme();
        }
        
        $rowEditeur = $row->findParentRow('Application_Model_DbTable_Editeur');
        $mapperEditeur = new Application_Model_Mapper_Editeur();

        if ($rowEditeur !== NULL) {
            $editeur = $mapperEditeur->rowToObject($rowEditeur);
        } else {
            $editeur = $mapperEditeur->getNoEditeur();
        }
        
        $rowCollection = $row->findParentRow('Application_Model_DbTable_Collection');
        $mapperCollection = new Application_Model_Mapper_Collection();

        if ($rowCollection !== NULL) {
            $collection = $mapperCollection->rowToObject($rowCollection);
        } else {
            $collection = $mapperCollection->getNoCollection();
        }
        $parution->setAuteurParution($auteur);
        $parution->setThemeParution($theme);
        $parution->setEditeurParution($editeur);
        $parution->setCollectionParution($collection);
        return $parution;
    }

    
}
