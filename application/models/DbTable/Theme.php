<?php

class Application_Model_DbTable_Theme extends Zend_Db_Table_Abstract {

    /** Table name */
    protected $_name = 'theme';
    protected $_primary = "id_theme";
    
    protected $_dependentTables = array(
		'Core_Model_DbTable_Parution'
	);

}
