<?php

class Application_Form_pageParution extends Zend_Form {

    public function init() {
        $this->setName('enregistrer');
        $this->setMethod('post');
        $this->setAction(Zend_Controller_Front::getInstance()->getBaseUrl());
        $this->setAttrib('enctype', 'multipart/form-data');
        
        $id = $this->createElement('hidden', 'id_parution');

        $titre = $this->createElement('text', 'titre_parution');
        $titre->setAttrib('class', 'form-control');

        $auteur = $this->createElement('text', 'auteur_parution');
        $auteur->setAttrib('class', 'form-control');

        $theme = $this->createElement('text', 'theme_parution');
        $theme->setAttrib('class', 'form-control');

        $date = $this->createElement('text', 'date_parution');
        $date->setAttrib('class', 'form-control');

        $qte_dispo_parution = $this->createElement('text', 'qte_dispo_parution');
        $qte_dispo_parution->setAttrib('class', 'form-control');

        $qte_total_parution = $this->createElement('text', 'qte_total_parution');
        $qte_total_parution->setAttrib('class', 'form-control');

        $editeur_parution = $this->createElement('text', 'editeur_parution');
        $editeur_parution->setAttrib('class', 'form-control');

        $collection_parution = $this->createElement('text', 'collection_parution');
        $collection_parution->setAttrib('class', 'form-control');

        $description_parution = $this->createElement('text', 'description_parution');
        $description_parution->setAttrib('class', 'form-control');

        $publier_parution = $this->createElement('text', 'publier_parution');
        $publier_parution->setAttrib('class', 'form-control');

        $image_parution = new Zend_Form_Element_File('image_parution');
        
        $image_parution->setAttrib('class', 'form-control');
        

        $submit = $this->createElement('submit', 'enregistrer');
        $submit->setAttrib('class', 'btn btn-primary');



        $this->addElements(array(
            $id,
            $titre,
            $auteur,
            $theme,
            $date,
            $qte_dispo_parution,
            $qte_total_parution,
            $editeur_parution,
            $collection_parution,
            $description_parution,
            $publier_parution,
            $image_parution,
            $submit
        ));


        foreach ($this->getElements() as $element) {

            $element->removeDecorator('Label');
            $element->setDecorators(array('ViewHelper'));
            if($element instanceof Zend_Form_Element_File)
            {
               $element->setDecorators(array('File'));
            }
        }


        $this->render();
    }

}

?>
