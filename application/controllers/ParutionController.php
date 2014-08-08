<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestionparutionController
 *
 * @author Alex
 */
class ParutionController extends Zend_Controller_Action {

    private $onglet;

    public function init() {
        $this->onglet = new Application_View_Helper_OngletParution();

        $this->onglet->setLienPage('/parution/');
        $this->onglet->setNameOnglet('Aperçu des parutions');
        $this->onglet->setOngletActif('actif');

        $this->onglet->setLienPage('/parution/liste/');
        $this->onglet->setNameOnglet('Liste des parutions');


        $this->onglet->setLienPage('/parution/gestion/');
        $this->onglet->setNameOnglet('Gérer les parutions');


        $this->onglet->setLienPage('/parution/image/');
        $this->onglet->setNameOnglet('Liste des parutions par image');


        $this->view->assign("ongletParution", $this->onglet);
    }

    public function indexAction() {
        $this->onglet->setOngletActif('/parution/');
        $pluginListParution = new Application_Service_Listparution();
        
        $this->view->assign("listParution", $pluginListParution->listParution());
    }

    public function pageAction() {
        if (!empty($_POST)) {
           
                $parutionMapper = new Application_Model_Mapper_Parution();
                
                $parution = $parutionMapper->postToModel();
                
               
                $parutionMapper->save($parution);
           
        }

        $id = $this->getRequest()->getParam('id');
        if (isset($id) && $id != '') {

            $parution = new Application_Model_Mapper_Parution();

            $result = $parution->find($this->getRequest()->getParam('id'), TRUE);

            $form = new Application_Form_pageParution();
            $form->clearDecorators();

            $form->addDecorator('ViewScript', array('viewScript' => '/_forms/pageParution.phtml'));
            $form->addDecorator('Form');

           
            $form->populate($result);

            $this->view->formPageParution = $form;
        } else {

            $form = new Application_Form_pageParution();
            $form->clearDecorators();
            
            $form->addDecorator('ViewScript', array('viewScript' => '/_forms/pageParution.phtml'));
            $form->addDecorator('Form');
            $this->view->formPageParution = $form;
        }
    }

    public function listeAction() {

        $this->onglet->setOngletActif('/parution/liste/');

        $pluginListParution = new Application_Service_Listparution();

        $this->view->assign("listParution", $pluginListParution->listParution());
    }

    public function gestionAction() {

        $this->onglet->setOngletActif('/parution/gestion/');
        $pluginListParution = new Application_Service_Listparution();

        $this->view->assign("listParution", $pluginListParution->listParution());
    }

    public function imageAction() {
        $this->onglet->setOngletActif('/parution/image/');

        $pluginListParution = new Application_Service_Listparution();

        $this->view->assign("listParution", $pluginListParution->listParution());
    }

}
