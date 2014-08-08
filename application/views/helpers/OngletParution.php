
<?php

class Application_View_Helper_OngletParution {

    protected $ongletActif;
    protected $nameOnglet;
    protected $lienPage;

    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        unset($this->ongletActif);
        unset($this->nameOnglet);
        unset($this->lienPage);
        
    }
    public function getOngletActif() {
        return $this->ongletActif;
    }

    public function getNameOnglet() {
        return $this->nameOnglet;
    }

    public function getLienPage() {
        return $this->lienPage;
    }

    public function setOngletActif($ongletActif) {
        $this->ongletActif = $ongletActif;
        return $this;
    }

    public function setNameOnglet($nameOnglet) {
        $this->nameOnglet[] = $nameOnglet;
        return $this;
    }

    public function setLienPage($lienPage) {
        $this->lienPage[] = $lienPage;
        return $this;
    }

    public function __toString() {
       
        $content = '<ul class="nav nav-tabs nav-justified" role="tablist">';

        foreach ($this->nameOnglet as $index => $nom) {
            if($this->ongletActif == $this->lienPage[$index])
            {
                $actif = ' class="active" ';
            }
            else{
                $actif = '';
            }
            $content .= '<li '.$actif.'><a href="' . $this->lienPage[$index] . '">'.$nom.'</a></li>';
        }
        $content.='</ul>';

        return $content;
    }

}
