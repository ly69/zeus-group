<?php

class Application_Model_Droit
{
	protected $_id_droit;
	protected $_all_droit;
	protected $_ajout_user_droit;
	protected $_modif_user_droit;
	protected $_sup_user_droit;
	protected $_ajout_paru_droit;
	protected $_modif_paru_droit;
	protected $_sup_paru_droit;
	protected $_ajout_emprunt_droit;
	protected $_modifier_emprunt_droit;
	protected $_sup_emprunt_droit;
	protected $_user_id_user;
	

	public function setId($id_droit){
		$this->_id_droit = (int) $id_droit;
		return $this;
	}
	public function getId(){
		return $this->_id_droit;
	}
	public function setAllDroit($all_droit){
		$this->_all_droit = $all_droit;
		return $this;
	}
	public function getAllDroit(){
		return $this->_all_droit;
	}
	public function setAjoutUserDroit($ajout_user_droit){
		$this->_ajout_user_droit = $ajout_user_droit;
		return $this;
	}
	public function getAjoutUserDroit(){
		return $this->_ajout_user_droit;
	}
	public function setModifUserDroit($modif_user_droit){
		$this->_modif_user_droit = $modif_user_droit;
		return $this;
	}
	public function getModifUserDroit(){
		return $this->_modif_user_droit;
	}
	public function setSupUserDroit($sup_user_droit){
		$this->_sup_user_droit = $sup_user_droit;
		return $this;
	}
	public function getSupUserDroit(){
		return $this->_sup_user_droit;
	}	
	public function setAjoutParuDroit($ajout_paru_droit){
		$this->_ajout_paru_droit = $ajout_paru_droit;
		return $this;
	}
	public function getAjoutParuDroit(){
		return $this->_ajout_paru_droit;
	}
	public function setModifParuDroit($modif_paru_droit){
		$this->_modif_paru_droit = $modif_paru_droit;
		return $this;
	}
	public function getModifParuDroit(){
		return $this->_modif_paru_droit;
	}
	public function setSupParuDroit($sup_paru_droit){
		$this->_sup_paru_droit = $sup_paru_droit;
		return $this;
	}
	public function getSupParuDroit(){
		return $this->_sup_paru_droit;
	}
	public function setAjoutEmpruntDroit($ajout_emprunt_droit){
		$this->_ajout_emprunt_droit = $ajout_emprunt_droit;
		return $this;
	}
	public function getAjoutEmpruntDroit(){
		return $this->_ajout_emprunt_droit;
	}
	public function setModifierEmpruntDroit($modifier_emprunt_droit){
		$this->_modifier_emprunt_droit = $modifier_emprunt_droit;
		return $this;
	}
	public function getModifierEmpruntDroit(){
		return $this->_modifier_emprunt_droit;
	}
	public function setSupEmpruntDroit($sup_emprunt_droit){
		$this->_sup_emprunt_droit = $sup_emprunt_droit;
		return $this;
	}
	public function getSupEmpruntDroit(){
		return $this->_sup_emprunt_droit;
	}
	public function setUserIdUser($user_id_user){
		$this->_user_id_user = $user_id_user;
		return $this;
	}
	public function getUserIdUser(){
		return $this->_user_id_user;
	}

}