<?php

/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\CompteRepository;

class CompteController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/
     */

    public function index(){

        return $this->view->load("compte/index");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Compte/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("compte/get_id", $data);
    }
    
    public function get($id){
        
        $data['compte'] = $tdb->getCompte($id);
        
        return $this->view->load("compte/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/liste
     */
    public function liste(){
        $tdb = new CompteRepository();
        
        $data['comptes'] = $tdb->listeCompte();
        return $this->view->load("compte/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Compte/add
     */
    public function add(){
        $tdb = new CompteRepository();
        if(isset($_POST['envoyer']))
        {
            extract($_POST);
            $data['ok'] = 0;
           
                
                $compteObject = new Compte();
                $compteObject->setNumeroCompte($_POST["NumeroCompte"]);
                $compteObject->setCleRib($_POST["CleRib"]);
                $compteObject->setEtatCompte($_POST["EtatCompte"]);
                $compteObject->setDepotInitial($_POST["DepotInitial"]);
                $compteObject->setDateOuverture($_POST["DateOuverture"]);
       

                $ok = $tdb->addCompte($compteObject);
                $data['ok'] = $ok;
            
            return $this->view->load("compte/addCompte", $data);
        }else{
            return $this->view->load("compte/addCompte");
        }
    }
    
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/update
     */
    public function update(){
        $tdb = new CompteRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
         
                $compteObject = new Compte();
                $compteObject->setId($id);
                $compteObject->setValeur1($valeur1);
                $compteObject->setValeur2($valeur2);
                $ok = $tdb->updateCompte($compteObject);
            
        }
        
        return $this->liste();
    }
    
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/delete/value
     */
    public function delete($id){
        
        $tdb = new CompteRepository();
        $tdb->deleteCompte($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Compte/edit/value
     */
    public function edit($id){
        
        $tdb = new CompteRepository();
        
        $data['compte'] = $tdb->getCompte($id);
        var_dump($tdb->getCompte($id));
        return $this->view->load("compte/edit", $data);
    }
}
?>





