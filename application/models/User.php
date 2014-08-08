<?php

class Application_Model_User {

    protected $_id_user;
    protected $_mail_user;
    protected $_nom_user;
    protected $_prenom_user;
    protected $_password_user;
    protected $_adresse_1_user;
    protected $_adresse_2_user;
    protected $_zip_user;
    protected $_nb_max_emprunt_user;
    protected $_delais_emprunt_user;
    protected $_service_user;
    protected $_date_inscription;
    protected $_bureau_user;
    protected $_parution_id_parution;
    protected $_actif_user;
    protected $_valid_mail_user;
    protected $_activation_user;

    public function getId_user() {
        return $this->_id_user;
    }

    public function setId_user($id_user) {
        $this->_id_user = $id_user;
        return $this;
    }

    /**
     * @param mixed $actif_user
     */
    public function setActif_user($actif_user) {
        $this->_actif_user = $actif_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActif_user() {
        return $this->_actif_user;
    }

    /**
     * @param mixed $activation_user
     */
    public function setActivation_user($activation_user) {
        $this->_activation_user = $activation_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivation_user() {
        return $this->_activation_user;
    }

    /**
     * @param mixed $adresse_1_user
     */
    public function setAdresse1_user($adresse_1_user) {
        $this->_adresse_1_user = $adresse_1_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresse1_user() {
        return $this->_adresse_1_user;
    }

    /**
     * @param mixed $adresse_2_user
     */
    public function setAdresse2_user($adresse_2_user) {
        $this->_adresse_2_user = $adresse_2_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresse2_user() {
        return $this->_adresse_2_user;
    }

    /**
     * @param mixed $bureau_user
     */
    public function setBureau_user($bureau_user) {
        $this->_bureau_user = $bureau_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBureau_user() {
        return $this->_bureau_user;
    }

    /**
     * @param mixed $date_inscription
     */
    public function setDateInscription_user($date_inscription) {
        $this->_date_inscription = $date_inscription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateInscription_user() {
        return $this->_date_inscription;
    }

    /**
     * @param mixed $delais_emprunt_user
     */
    public function setDelaisEmprunt_user($delais_emprunt_user) {
        $this->_delais_emprunt_user = $delais_emprunt_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelaisEmprunt_user() {
        return $this->_delais_emprunt_user;
    }

    /**
     * @param mixed $mail_user
     */
    public function setMail_user($mail_user) {
        $this->_mail_user = $mail_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMail_user() {
        return $this->_mail_user;
    }

    /**
     * @param mixed $nb_max_emprunt_user
     */
    public function setNbMaxEmprunt_user($nb_max_emprunt_user) {
        $this->_nb_max_emprunt_user = $nb_max_emprunt_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbMaxEmprunt_user() {
        return $this->_nb_max_emprunt_user;
    }

    /**
     * @param mixed $nom_user
     */
    public function setNom_user($nom_user) {
        $this->_nom_user = $nom_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom_user() {
        return $this->_nom_user;
    }

    /**
     * @param mixed $parution_id_parution
     */
    public function setParutionIdParution_user($parution_id_parution) {
        $this->_parution_id_parution = $parution_id_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParutionIdParution_user() {
        return $this->_parution_id_parution;
    }

    /**
     * @param mixed $password_user
     */
    public function setPassword_user($password_user) {
        $this->_password_user = $password_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword_user() {
        return $this->_password_user;
    }

    /**
     * @param mixed $prenom_user
     */
    public function setPrenom_user($prenom_user) {
        $this->_prenom_user = $prenom_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom_user() {
        return $this->_prenom_user;
    }

    /**
     * @param mixed $service_user
     */
    public function setService_user($service_user) {
        $this->_service_user = $service_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getService_user() {
        return $this->_service_user;
    }

    /**
     * @param mixed $valid_mail_user
     */
    public function setValidMail_user($valid_mail_user) {
        $this->_valid_mail_user = $valid_mail_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidMail_user() {
        return $this->_valid_mail_user;
    }

    /**
     * @param mixed $zip_user
     */
    public function setZip_user($zip_user) {
        $this->_zip_user = $zip_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip_user() {
        return $this->_zip_user;
    }

}
