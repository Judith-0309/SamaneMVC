<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}
	
	public function addCompte($Compte)
	{
		if($this->db != null)
		{
			$this->db->persist($Compte);
			$this->db->flush();

			return $Compte->getId();
		}
	}
	
	public function deleteCompte($id){
		if($this->db != null)
		{
			$Compte = $this->db->find('Compte', $id);
			if($Compte != null)
			{
				$this->db->remove($Compte);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateCompte($Compte){
		if($this->db != null)
		{
			$getCompte = $this->db->find('Compte', $Compte->getId());
			if($getCompte != null)
			{
				$getCompte->setValeur1($Compte->getValeur1());
				$getCompte->setValeur2($Compte->getValeur2());
				$this->db->flush();

			}else {
				die("Objet ".$Compte->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeCompte(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Compte t")->getResult();
		}
	}
	
	public function listeComptesById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfComptesById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Compte t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfComptes()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findAll();
		}
	}
	
}