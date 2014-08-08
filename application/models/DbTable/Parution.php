<?php

class Application_Model_DbTable_Parution extends Zend_Db_Table_Abstract {

    /** Table name */
    protected $_name = 'parution';
    protected $_primary = "id_parution";
    
    protected $_referenceMap = array(
        'FK_auteur' => array(
				'columns' => array(Application_Model_Mapper_Parution::COL_AUTEUR),
				'refTableClass' => 'Application_Model_DbTable_Auteur',
				'refColumns' => array(Application_Model_Mapper_Auteur::COL_ID),
				'onUpdate' => self::RESTRICT,
				'onDelete' => self::RESTRICT
			),
        'FK_theme' => array(
				'columns' => array(Application_Model_Mapper_Parution::COL_THEME),
				'refTableClass' => 'Application_Model_DbTable_Theme',
				'refColumns' => array(Application_Model_Mapper_Theme::COL_ID),
				'onUpdate' => self::RESTRICT,
				'onDelete' => self::RESTRICT
			),
        'FK_editeur' => array(
				'columns' => array(Application_Model_Mapper_Parution::COL_EDITEUR),
				'refTableClass' => 'Application_Model_DbTable_Editeur',
				'refColumns' => array(Application_Model_Mapper_Editeur::COL_ID),
				'onUpdate' => self::RESTRICT,
				'onDelete' => self::RESTRICT
			),
        'FK_collection' => array(
				'columns' => array(Application_Model_Mapper_Parution::COL_COLLECTION),
				'refTableClass' => 'Application_Model_DbTable_Collection',
				'refColumns' => array(Application_Model_Mapper_Collection::COL_ID),
				'onUpdate' => self::RESTRICT,
				'onDelete' => self::RESTRICT
			)
    );

}
