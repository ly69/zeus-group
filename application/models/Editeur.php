<?php


class Application_Model_Editeur {

    protected $id_editeur;
    protected $name_editeur;

    public function getIdEditeur() {
        return $this->id_editeur;
    }

    public function getNameEditeur() {
        return $this->name_editeur;
    }

    public function setIdEditeur($id_editeur) {
        $this->id_editeur = $id_editeur;
        return $this;
    }

    public function setNameEditeur($name_editeur) {
        $this->name_editeur = $name_editeur;
        return $this;
    }


   

}
