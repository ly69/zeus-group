<?php

class Application_Model_DbTable_Auteur extends Zend_Db_Table_Abstract {

    /** Table name */
    protected $_name = 'auteur';
    protected $_primary = "id_auteur";
    
    protected $_dependentTables = array(
		'Core_Model_DbTable_Parution'
	);

}
