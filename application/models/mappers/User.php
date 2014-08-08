<?php
class Application_Model_UserMapper extends Application_Model_Mapper_MapperAbstract
{
    protected $_dbTable;

    public function setDbTable($dbTable)
    {
        if(is_string($dbTable))
        {
            $dbTable = new $dbTable();
        }

        if (!$dbTable instanceof Zend_Db_Table_Abstract)
        {
            throw new Exeption ('Invalid table data');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }

    public function getDbTable()
    {
        if(null === $this->_dbTable)
        {
            $this->setDbTable('Application_Model_DbTable_User');
        }
        return $this->_dbTable;
    }

    public function save(Application_Model_User $user)
    {
        $data = array (
            'mail_user'=> $user->getEmail_user(),
            'nom_user' =>$user->getNom_user(),
            'prenom_user' =>$user->getPrenom_user(),
            'adresse_1_user'=>$user->getAdresse_1_user(),
            'adresse_2_user'=>$user->getAdresse_2_user(),
            'zip_user'=>$user->getZip_user(),
            'password_user'=>$user->getPassword_user(),
            'nb_max_emprunt_user'=>$user->getNb_max_emprunt_user(),
            'delais_emprunt_user'=>$user->getDelais_emprunt_user(),
            'service_user'=>$user->getService_user(),
            'date_inscription'=>$user->getDate_inscription(),
            'bureau_user'=>$user->getBureau_user(),
            'parution_id_parution'=>$user->getParution_id_parution(),
            'actif_user'=>$user->getActif_user(),
            'valid_mail_user'=>$user->getValid_mail_user(),
            'activation_user'=>$user->getActivation_user()
        );
        $this->getDbTable()->insert($data);
    }

    public function find($id)
    {
        $result = $this->getDbTable()->find($id);
        if(0 === count($result))
        {
            return;
        }
        $row = $result -> current();
        $user = new Application_Model_User();
        $user->setId_user($row->id)
            ->setEmail_user($row->email_user)
            ->setNom_user($row->nom_user)
            ->setPrenom_user($row->prenom_user)
            ->setAdresse_1_user($row->adresse_1_user)
            ->setAdresse_2_user($row->adresse_2_user)
            ->setZip_user($row->zip_user)
            ->setPassword_user($row->password_user)
            ->setNb_max_emprunt_user($row->nb_max_emprunt_user)
            ->setDelais_emprunt_user($row->delais_max_emprunt_user)
            ->setService_user($row->service_user)
            ->setDate_inscription($row->date_inscription)
            ->setBureau_user($row->bureau_user)
            ->setParution_id_parution($row->parution_id_parution)
            ->setActif_user($row->actif_user)
            ->setValid_mail_user($row->valid_mail_user)
            ->setActivation_user($row->activation_user);
        return $user;
    }

    public function fetchAll()
    {
        $resultSet=$this->getDbTable()->fetchAll();
        $entries = array();

        foreach ($resultSet as $row) {
            $entries[]=$this->toModel($row);
        }
        return $entries;
    }

    public function toModel($row)
    {
        $user = new Application_Model_User();
        $user->setId_user($row->id)
            ->setMail_user($row->email_user)
            ->setNom_user($row->nom_user)
            ->setPrenom_user($row->prenom_user)
            ->setAdresse1_user($row->adresse_1_user)
            ->setAdresse2_user($row->adresse_2_user)
            ->setZip_user($row->zip_user)
            ->setPassword_user($row->password_user)
            ->setNbMaxEmprunt_user($row->nb_max_emprunt_user)
            ->setDelaisEmprunt_user($row->delais_max_emprunt_user)
            ->setService_user($row->service_user)
            ->setDateInscription_user($row->date_inscription)
            ->setBureau_user($row->bureau_user)
            ->setParutionIdParution_user($row->parution_id_parution)
            ->setActif_user($row->actif_user)
            ->setValidMail_user($row->valid_mail_user)
            ->setActivation_user($row->activation_user);
        return $user;
    }
}
