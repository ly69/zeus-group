<?php

class Application_Model_Mapper_Collection extends Application_Model_Mapper_MapperAbstract {

    const COL_ID = 'id_collection';
    const COL_NOM = 'name_collection';

    public function objectToRow($collection) {
        $data = array(
            self::COL_ID => $collection->getIdCollection(),
            self::COL_NOM => $collection->getNameCollection()
        );
        return $data;
    }

    public function rowToObject(Zend_Db_Table_Row $row) {
        $collection = new Application_Model_Collection();
        $collection->setIdCollection($row[self::COL_ID])
                ->setNameCollection($row[self::COL_NOM]);
        return $collection;
    }

    public function getNoCollection() {
        $theme = new Application_Model_Collection();
        $theme->setNameCollection('Aucun');
        return $theme;
    }

}
