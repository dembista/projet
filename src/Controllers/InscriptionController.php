<?php 
namespace App\Controllers;

use App\Core\Role;
use App\Manager\ChambreManager;
use App\Core\Request;
use App\Core\Session;
use App\Entity\Chambre;
use App\Entity\Etudiant;
use App\Core\AbstractController;
use App\Manager\PersonneManager;

class InscriptionController extends AbstractController{
    private Request $request;
    private PersonneManager $insertEtu;
    private ChambreManager $insertChambre;
    private Etudiant $etudiant;
    private Chambre $chambre;
    public function __construct()
    {
          parent::__construct();
          $this->request=new Request;
          $this->insertEtu=new PersonneManager;
          $this->etudiant=new Etudiant;
          $this->chambre=new Chambre;
    }

    
    public function inscription(){
            //$this->render("inscription/Add.rp.html.php");
       
        
    }
    // public function addEtudiant(){
    //     if ($this->request->isPost()) {
    //         $post=$this->request->request();
    //         $this->etudiant->setMatricule('rttv')
    //                     ->setTelephone(779882564)
    //                     ->setType('')
    //                     ->setEtape("sdsd")
    //                     ->setDateNaiss("12-12-1997")
    //                     ->setNom("ndiaye")
    //                     ->setPrenom("issa")
    //                     ->setLogin("issa@gmail.com");
    //     }
    // }
    public function addPavillon(){
        
    }
    public function editPavillon(){
        
    }
    public function deletePavillon(){
        
    }
    
    

}