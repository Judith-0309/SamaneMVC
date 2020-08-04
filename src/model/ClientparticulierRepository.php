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
	
class ClientparticulierRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getClientparticulier($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Clientparticulier')->find(array('id' => $id));
		}
	}
	
	public function addClientparticulier($Clientparticulier)
	{
		if($this->db != null)
		{
			$this->db->persist($Clientparticulier);
			$this->db->flush();

			return $Clientparticulier->getId();
		}
	}
	
	public function deleteClientparticulier($id){
		if($this->db != null)
		{
			$Clientparticulier = $this->db->find('Clientparticulier', $id);
			if($Clientparticulier != null)
			{
				$this->db->remove($Clientparticulier);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateClientparticulier($Clientparticulier){
		if($this->db != null)
		{
			$getClientparticulier = $this->db->find('Clientparticulier', $Clientparticulier->getId());
			if($getClientparticulier != null)
			{
				$getClientparticulier->setValeur1($Clientparticulier->getValeur1());
				$getClientparticuliert->setValeur2($Clientparticulier->getValeur2());
				$this->db->flush();

			}else {
				die("Objet ".$Clientparticulier->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeClientparticulier(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Clientparticulier t")->getResult();
		}
	}
	
	public function listeClientparticuliersById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Clientparticulier')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfClientparticuliersById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Clientparticulier t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfClientparticuliers()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Clientparticulier')->findAll();
		}
	}
	
}