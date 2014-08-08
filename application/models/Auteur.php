<?php

class Application_Model_Auteur {

    protected $id_auteur;
    protected $name_auteur;
    protected $id_user;
    protected $afficher_user;

    public function getIdAuteur() {
        return $this->id_auteur;
    }

    public function getNameAuteur() {
        return $this->name_auteur;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function getAfficherUser() {
        return $this->afficher_user;
    }

    public function setIdAuteur($id_auteur) {
        $this->id_auteur = $id_auteur;
        return $this;
    }

    public function setNameAuteur($name_auteur) {
        $this->name_auteur = $name_auteur;
        return $this;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
        return $this;
    }

    public function setAfficherUser($afficher_user) {
        $this->afficher_user = $afficher_user;
        return $this;
    }

}
