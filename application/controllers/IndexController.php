<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        $listParution = new Application_Service_Listparution();
        $listParution->fetchAll();
    }

}
