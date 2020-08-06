<?php
//les espaces de noms l'annotation qui est une classe dans Doctrine sera mapper à ORM
use Doctrine\Annotation as ORM;

/**
 * @Entity @Table(name="clientEntreprise")
 */

class ClientEntreprise
{
//Pour la clé primaire

    /** @Id @Column(type="integer") @GeneratedValue **/ 
    private $id;

    /** @Column(type="string") **/ 
    private $nomEntreprise;

    /** @Column(type="string") **/ 
    private $Ninea;

    /** @Column(type="string") **/ 
    private $adresse;

    /** @Column(type="string") **/ 
    private $raison_Sociale;

    /** @Column(type="string") **/ 
    private $telephone;

    /** @Column(type="string") **/ 
    private $Email;
    
    /** @Column(type="string") **/ 
    private $RegistreCom;

     
    /**
     * Many compte have one clientEntreprise. This is the owning side.
     * @ManyToOne(targetEntity="Compte", inversedBy="idEntreprise")
     * @JoinColumn(name="idcompte", referencedColumnName="id")
     */
     private $numeroCompte; 


  

    public function __construct()
{

} 
    
public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
   
    }

    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

     public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        
    }
 
    public function getNinea()
    {
        return $this->Ninea;
    }

    public function setNinea($Ninea)
    {
        $this->Ninea = $Ninea;
  
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

       public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        
    }

       public function getRaison_Sociale()
    {
        return $this->raison_Sociale;
    }

    public function setRaison_Sociale($raison_Sociale)
    {
        $this->raison_Sociale = $raison_Sociale;

        
    }


    public function getTelephone()
    {
        return $this->telephone;
    }

 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        
    }

 
    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;

    }

 
    public function getRegistreCom()
    {
        return $this->RegistreCom;
    }

 
    public function setRegistreCom($RegistreCom)
    {
        $this->RegistreCom = $RegistreCom;

        
    }
}