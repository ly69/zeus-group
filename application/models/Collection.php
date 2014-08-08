<?php


class Application_Model_Collection {

    protected $id_collection;
    protected $name_collection;

    public function getIdCollection() {
        return $this->id_collection;
    }

    public function getNameCollection() {
        return $this->name_collection;
    }

    public function setIdCollection($id_collection) {
        $this->id_collection = $id_collection;
        return $this;
    }

    public function setNameCollection($name_collection) {
        $this->name_collection = $name_collection;
        return $this;
    }


   

}
