<?php

class Application_Model_DbTable_Editeur extends Zend_Db_Table_Abstract {

    /** Table name */
    protected $_name = 'editeur';
    protected $_primary = "id_editeur";
    
    protected $_dependentTables = array(
		'Core_Model_DbTable_Parution'
	);

}
