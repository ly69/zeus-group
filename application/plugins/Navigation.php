<?php

class Application_Plugin_Navigation extends Zend_Controller_Plugin_Abstract {

    public function routeShutdown(Zend_Controller_Request_Abstract $request) {
        $nav = Zend_Registry::get('Zend_Navigation');

        $sousMenuParution = $nav->findById('parutionIndex');

        $apercuPage = Zend_Navigation_Page::factory(
                        array(
                            'type' => 'mvc',
                            'module' => 'default',
                            'controller' => 'parution',
                            'action' => 'index',
                            'route' => 'parutionIndex',
                            'visible' => TRUE,
                            'label' => 'Aperçu'
        ));

        $listePage = Zend_Navigation_Page::factory(
                        array(
                            'type' => 'mvc',
                            'module' => 'default',
                            'controller' => 'parution',
                            'action' => 'liste',
                            'route' => 'parutionListe',
                            'visible' => TRUE,
                            'label' => 'Liste'
        ));
        $sousMenuParution->addPage($apercuPage);
        $sousMenuParution->addPage($listePage);
    }

}
