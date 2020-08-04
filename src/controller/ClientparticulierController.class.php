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
use src\model\ClientparticulierRepository;

class ClientparticulierController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/
     */

    public function index(){

        return $this->view->load("clientparticulier/index");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("clientparticulier/get_id", $data);
    }
    
    public function get($id){
        
        $data['clientparticulier'] = $tdb->getClientparticulier($id);
        
        return $this->view->load("clientparticulier/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/liste
     */
    public function liste(){
        $tdb = new ClientparticulierRepository();
        
        $data['clientparticuliers'] = $tdb->listeClientparticulier();
        return $this->view->load("clientparticulier/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/add
     */
    public function add(){
        $tdb = new ClientparticulierRepository();
        if(isset($_POST['envoyer']))
        {
            extract($_POST);
            $data['ok'] = 0;
           
                
                $clientparticulierObject = new Clientparticulier();
                $clientparticulierObject->setNom($_POST["nom"]);
                $clientparticulierObject->setPrenom($_POST["prenom"]);
                $clientparticulierObject->setTelephone($_POST["telephone"]);
                $clientparticulierObject->setGenre($_POST["Genre"]);
                $clientparticulierObject->setEmail($_POST["Email"]);
                $clientparticulierObject->setAdresse($_POST["Adresse"]);
                $clientparticulierObject->setProfession($_POST["Profession"]);
                $clientparticulierObject->setSalarie($_POST["salarie"]);
                $clientparticulierObject->setSalaireActuel($_POST["salaire_actuel"]);
                $clientparticulierObject->setNomEmployeur($_POST["nom_employeur"]);
                $clientparticulierObject->setCni($_POST["cni"]);
       

                $ok = $tdb->addClientparticulier($clientparticulierObject);
                $data['ok'] = $ok;
            
            return $this->view->load("clientparticulier/addClientparticulier", $data);
        }else{
            return $this->view->load("clientparticulier/addClientparticulier");
        }
    }
    
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/update
     */
    public function update(){
        $tdb = new ClientparticulierRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
         
                $clientparticulierObject = new Clientparticulier();
                $clientparticulierObject->setId($id);
                $clientparticulierObject->setValeur1($valeur1);
                $clientparticulierObject->setValeur2($valeur2);
                $ok = $tdb->updateClientparticulier($clientparticulierObject);
            
        }
        
        return $this->liste();
    }
    
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/delete/value
     */
    public function delete($id){
        
        $tdb = new ClientparticulierRepository();
        $tdb->deleteClientparticulier($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/edit/value
     */
    public function edit($id){
        
        $tdb = new ClientparticulierRepository();
        
        $data['clientparticulier'] = $tdb->getClientparticulier($id);
        var_dump($tdb->getClientparticulier($id));
        return $this->view->load("clientparticulier/edit", $data);
    }
}
?>





