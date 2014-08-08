<?php

class Application_Model_DbTable_Collection extends Zend_Db_Table_Abstract {

    /** Table name */
    protected $_name = 'collection';
    protected $_primary = "id_collection";
    
    protected $_dependentTables = array(
		'Core_Model_DbTable_Parution'
	);

}
