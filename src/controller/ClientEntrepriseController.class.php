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
use src\model\ClientEntrepriseRepository;

class ClientEntrepriseController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/
     */

    public function index(){

        return $this->view->load("clientEntreprise/index");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("clientEntreprise/get_id", $data);
    }
    
    public function get($id){
        
        $data['clientEntreprise'] = $tdb->getClientEntreprise($id);
        
        return $this->view->load("clientEntreprise/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/liste
     */
    public function liste(){
        $tdb = new ClientEntrepriseRepository();
        
        $data['clientEntreprises'] = $tdb->listeClientEntreprise();
        return $this->view->load("clientEntreprise/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/add
     */
    public function add(){
        $tdb = new ClientEntrepriseRepository();
        if(isset($_POST['envoyer']))
        {
            extract($_POST);
            $data['ok'] = 0;
           
                
                $clientEntrepriseObject = new ClientEntreprise();
                $clientEntrepriseObject->SetNomEntreprise($_POST["nomEntreprise"]);
                $clientEntrepriseObject->SetNinea($_POST["ninea"]);
                $clientEntrepriseObject->SetAdresse($_POST["adresse"]);
                $clientEntrepriseObject->setRaison_Sociale($_POST["raisonSociale"]);
                $clientEntrepriseObject->SetTelephone($_POST["telephone"]);
                $clientEntrepriseObject->SetEmail($_POST["email"]);
                $clientEntrepriseObject->SetRegistreCom($_POST["registreCom"]);
                
       

                $ok = $tdb->addClientEntreprise($clientEntrepriseObject);
                $data['ok'] = $ok;
            
            return $this->view->load("clientEntreprise/addClientEntreprise", $data);
        }else{
            return $this->view->load("clientEntreprise/addClientEntreprise");
        }
    }
    
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/update
     */
    public function update(){
        $tdb = new ClientEntrepriseRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
         
                $clientEntrepriseObject = new ClientEntreprise();
                $clientEntrepriseObject->setId($id);
                $clientEntrepriseObject->setValeur1($valeur1);
                $clientEntrepriseObject->setValeur2($valeur2);
                $ok = $tdb->updateClientEntreprise($clientEntrepriseObject);
            
        }
        
        return $this->liste();
    }
    
     /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/delete/value
     */
    public function delete($id){
        
        $tdb = new ClientEntrepriseRepository();
        $tdb->deleteClientEntreprise($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Clientparticulier/edit/value
     */
    public function edit($id){
        
        $tdb = new ClientEntrepriseRepository();
        
        $data['clientEntreprise'] = $tdb->getClientEntreprise($id);
        var_dump($tdb->getClientEntreprise($id));
        return $this->view->load("clientEntreprise/edit", $data);
    }
}
?>





