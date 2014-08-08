
<?php

class Application_Model_Parution {

    protected $_id_parution;
    protected $_titre_parution;
    protected $_auteur_parution;
    protected $_theme_parution;
    protected $_date_parution;
    protected $_qte_dispo_parution;
    protected $_qte_total_parution;
    protected $_editeur_parution;
    protected $_collection_parution;
    protected $_description_parution;
    protected $_publier_parution;
    protected $_image_parution;

    public function getImageParution() {
        return $this->_image_parution;
    }

    public function setImageParution($image_parution) {
        $this->_image_parution = $image_parution;
        return $this;
    }

    public function getIdParution() {
        return $this->_id_parution;
    }

    public function setIdParution($_id_parution) {
        $this->_id_parution = $_id_parution;
        return $this;
    }

    /**
     * @param mixed $auteur_parution
     */
    public function setAuteurParution($auteur_parution) {
        $this->_auteur_parution = $auteur_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuteurParution() {
        return $this->_auteur_parution;
    }

    /**
     * @param mixed $collection_parution
     */
    public function setCollectionParution($collection_parution) {
        $this->_collection_parution = $collection_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollectionParution() {
        return $this->_collection_parution;
    }

    /**
     * @param mixed $date_parution
     */
    public function setDateParution($date_parution) {
        $this->_date_parution = $date_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateParution() {
        return $this->_date_parution;
    }

    /**
     * @param mixed $description_parution
     */
    public function setDescriptionParution($description_parution) {
        $this->_description_parution = $description_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionParution() {
        return $this->_description_parution;
    }

    /**
     * @param mixed $editeur_parution
     */
    public function setEditeurParution($editeur_parution) {
        $this->_editeur_parution = $editeur_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditeurParution() {
        return $this->_editeur_parution;
    }

    /**
     * @param mixed $publier_parution
     */
    public function setPublierParution($publier_parution) {
        $this->_publier_parution = $publier_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublierParution() {
        return $this->_publier_parution;
    }

    /**
     * @param mixed $qte_dispo_parution
     */
    public function setQteDispoParution($qte_dispo_parution) {
        $this->_qte_dispo_parution = $qte_dispo_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQteDispoParution() {
        return $this->_qte_dispo_parution;
    }

    /**
     * @param mixed $qte_total_parution
     */
    public function setQteTotalParution($qte_total_parution) {
        $this->_qte_total_parution = $qte_total_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQteTotalParution() {
        return $this->_qte_total_parution;
    }

    /**
     * @param mixed $theme_parution
     */
    public function setThemeParution($theme_parution) {
        $this->_theme_parution = $theme_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThemeParution() {
        return $this->_theme_parution;
    }

    /**
     * @param mixed $titre_parution
     */
    public function setTitreParution($titre_parution) {
        $this->_titre_parution = $titre_parution;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitreParution() {
        return $this->_titre_parution;
    }

}
