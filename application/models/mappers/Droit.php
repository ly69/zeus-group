<?php

class Application_Model_Mapper_Droit {

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
            $this->setDbTable('application_models_DbTable_Droit');
        }
        return $this->_dbTable;
    }

    public function save(Application_Model_Droit $droit) {
        $data = array(
            'id_droit' => $droit->getIdDroit(),
            'all_droit' => $droit->getAllDroit(),
            'ajout_user_droit' => $droit->getAjoutUserDroit(),
            'sup_user_droit' => $droit->getSupUserDroit(),
            'ajout_paru_droit' => $droit->getAjoutParuDroit(),
            'modif_paru_droit' => $droit->getModifParuDroit(),
            'sup_paru_droit' => $droit->getSupParuDroit(),
            'ajout_emprunt_droit' => $droit->getAjoutEmpruntDroit(),
            'modifier_emprunt_droit' => $droit->getModifierEmpruntDroit(),
            'sup_emprunt_droit' => $droit->getSupEmpruntDroit(),
            'user_id_user' => $droit->getUserIdUser(),
            'created' => date('Y-m-d H:i:s')
        );

        if (empty($data['id_droit'])) {
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
        $droit = $this->toModel($row);

        return $droit;
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
        $droit = new Application_Model_Droit();
        $droit->setId($row->id_droit)
                ->setDateDroit($row->all_droit)
                ->setDateRetour($row->ajout_user_droit)
                ->setUserIdUser($row->modif_user_droit)
                ->setParutionIdParution($row->sup_user_droit)
                ->setParutionIdParution($row->ajout_paru_droit)
                ->setParutionIdParution($row->modif_paru_droit)
                ->setParutionIdParution($row->sup_paru_droit)
                ->setParutionIdParution($row->ajout_emprunt_droit)
                ->setParutionIdParution($row->modifier_emprunt_droit)
                ->setParutionIdParution($row->sup_emprunt_droit)
                ->setParutionIdParution($row->sup_user_id_user);

        return $droit;
    }

}
