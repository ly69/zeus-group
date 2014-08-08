<?php

class Application_Model_Mapper_Theme extends Application_Model_Mapper_MapperAbstract {

    const COL_ID = 'id_theme';
    const COL_NOM = 'name_theme';

    public function objectToRow($theme) {
        $data = array(
            self::COL_ID => $theme->getIdTheme(),
            self::COL_NOM => $theme->getNameTheme()
        );
        return $data;
    }

    public function rowToObject(Zend_Db_Table_Row $row) {
        $theme = new Application_Model_Theme();
        $theme->setIdTheme($row[self::COL_ID])
                ->setNameTheme($row[self::COL_NOM]);
        return $theme;
    }
    
    public function getNoTheme()
    {
        $theme = new Application_Model_Theme();
        $theme->setNameTheme('Aucun');
        return $theme;
    }

}
