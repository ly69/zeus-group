<?php

abstract class Application_Model_Mapper_MapperAbstract {

    protected $dbTable;
    protected $dbTableClassName;

    const COL_ID = null;

    public function __construct() {

        if (null === $this->dbTableClassName) {
            $this->dbTableClassName = str_replace('Mapper', 'DbTable', get_called_class());
        }
        $this->dbTable = new $this->dbTableClassName();

        $this->init();
    }

    public function init() {
        
    }

    public function find($id, $hasArray = FALSE) {
        $row = $this->dbTable->find($id)->current();
        if ($hasArray) {
            
            return $this->objectToRow($this->rowToObject($row));
        } else {

            return $this->rowToObject($row);
            
        }
    }

    public function delete($id) {
        $row = $this->dbTable->find($id)->current();
        if (!$row instanceof Zend_Db_Table_Row_Abstract) {
            throw new Zend_Db_Table_Row_Exception('Impossible de supprimer l\'élément #' . $id);
        }
        return (bool) $row->delete();
    }

    public function save(Core_Model_Interface $object) {
        if (null == static::COL_ID) {
            throw new BadMethodCallException('La méthode save() générique
					ne peut fonctionner qu\'avec les mappers pourvu d\'une 
					constante COL_ID. Vous devez implémenter votre propre méthode 
					save() pour le mapper actuel');
        }
        $origin = $this->dbTable->find($object->getId())->current();
        $row = $this->objectToRow($object);
        if ($origin instanceof Zend_Db_Table_Row_Abstract) {
            // Update
            $where = array(static::COL_ID . ' = ?' => $object->getId());
            $this->dbTable->update($row, $where);
        } else {
            // Insert
            unset($row[static::COL_ID]);
            $this->dbTable->insert($row);
        }
    }

    public function fetchAll($where = null, $order = null, $count = null, $offset = null) {

        $rowset = $this->dbTable->fetchAll($where, $order, $count, $offset);
        $objects = array();
        foreach ($rowset as $row) {
            $objects[] = $this->rowToObject($row);
        }
        return $objects;
    }

    abstract public function rowToObject(Zend_Db_Table_Row $row);

    abstract public function objectToRow($object);
}
