<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of list
 *
 * @author Alex
 */
class Application_Service_Listparution {

    protected $allParution;

    public function listParution() {
        
        $this->allParution = $this->fetchAll();
        foreach ($this->allParution as $parution) {
            if (strlen($parution->getDescriptionParution()) > 350) {
                $parution->setDescriptionParution(substr($parution->getDescriptionParution(), 0, 347) . '...');
            }
        }
        return $this->allParution;
    }

    public function fetchAll() {
        $mapper = new Application_Model_Mapper_Parution();
       
        return $mapper->fetchAll();
    }

}
