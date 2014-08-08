<?php

class Application_Model_Emprunt extends Application_Model_Mapper_MapperAbstract{

    protected $_dbTable;

    public function setDbTable($dbTable) {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception("Invalide table data");
        }
        $this->_dbTable = $dbTable;
        return $this;
    }

    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Emprunt');
        }
        return $this->_dbTable;
    }

    public function save(Application_Model_Emprunt $emprunt) {
        $data = array(
            'id_emprunt' => $emprunt->getIdEmprunt(),
            'date_emprunt' => $emprunt->getDateEmprunt(),
            'date_retour' => $emprunt->getDateRetour(),
            'user_id_user' => $emprunt->getUserIdUser(),
            'parution_id_parution' => $emprunt->getParutionIdParution()
        );

        if (empty($data['id_emprunt'])) {
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data);
        }
    }

    public function find($id) {
        $result = $this->getDbTable()->find($id);
        if (0 === count($result)) {
            return;
        }

        $row = $result->current();
        $emprunt = $this->toModel($row);

        return $emprunt;
    }

    public function fetchAll() {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->toModel($row);
        }
        return $entries;
    }

    public function toModel($row) {
        $emprunt = new Application_Model_Emprunt();
        $emprunt->setId($row->id_emprunt)
                ->setDateEmprunt($row->date_emprunt)
                ->setDateRetour($row->date_retour)
                ->setUserIdUser($row->user_id_user)
                ->setParutionIdParution($row->parution_id_parution);
        return $emprunt;
    }

}
