<?php

class Application_Model_Theme {

    protected $id_theme;
    protected $name_theme;

    public function getIdTheme() {
        return $this->id_theme;
    }

    public function getNameTheme() {
        return $this->name_theme;
    }

    public function setIdTheme($id_theme) {
        $this->id_theme = $id_theme;
        return $this;
    }

    public function setNameTheme($name_theme) {
        $this->name_theme = $name_theme;
        return $this;
    }



}
