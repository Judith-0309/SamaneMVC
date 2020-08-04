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
	
class ClientEntrepriseRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientEntreprise($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientEntreprise')->find(array('id' => $id));
		}
	}
	
	public function addClientEntreprise($ClientEntreprise)
	{
		if($this->db != null)
		{
			$this->db->persist($ClientEntreprise);
			$this->db->flush();

			return $ClientEntreprise->getId();
		}
	}
	
	public function deleteClientEntreprise($id){
		if($this->db != null)
		{
			$ClientEntreprise = $this->db->find('ClientEntreprise', $id);
			if($ClientEntreprise != null)
			{
				$this->db->remove($ClientEntreprise);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateClientEntreprise($ClientEntreprise){
		if($this->db != null)
		{
			$getClientEntreprise = $this->db->find('ClientEntreprise', $ClientEntreprise->getId());
			if($getClientEntreprise != null)
			{
				$getClientEntreprise->setValeur1($ClientEntreprise->getValeur1());
				$getClientEntreprise->setValeur2($ClientEntreprise->getValeur2());
				$this->db->flush();

			}else {
				die("Objet ".$ClientEntreprise->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeClientEntreprise(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientEntreprise t")->getResult();
		}
	}
	
	public function listeClientEntreprisesById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientEntreprise')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfClientEntreprisesById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM ClientEntreprise t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfClientEntreprises()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('ClientEntreprise')->findAll();
		}
	}
	
}