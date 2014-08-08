<?php

class Application_Model_User
{
	protected $_id_emprunt;
	protected $_date_emprunt;
	protected $_date_retour;
	protected $_user_id_user;
	protected $_parution_id_parution;
	

	public function setId($id_emprunt){
		$this->_id_emprunt = (int) $id_emprunt;
		return $this;
	}
	public function getId(){
		return $this->_id_emprunt;
	}
	public function setDateEmprunt($date_emprunt){
		$this->_date_emprunt = $date_emprunt;
		return $this;
	}
	public function getDateEmprunt(){
		return $this->_date_emprunt;
	}
	public function setDateRetour($date_retour){
		$this->_date_retour = $date_retour;
		return $this;
	}
	public function getDateRetour(){
		return $this->_date_retour;
	}
	public function setUserIdUser($user_id_user){
		$this->_user_id_user = $user_id_user;
		return $this;
	}
	public function getUserIdUser(){
		return $this->_user_id_user;
	}
	public function setParutionIdParution($parution_id_parution){
		$this->_parution_id_parution = $parution_id_parution;
		return $this;
	}
	public function getParutionIdParution(){
		return $this->_parution_id_parution;
	}	
	
}