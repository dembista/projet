<?php 
namespace App\Controllers;

use App\Core\Role;
use App\Core\Request;
use App\Core\Session;
use App\Core\AbstractController;
use App\Repository\ChambreRepository;
use App\Repository\EtudiantRepository;
use App\Repository\PavillonRepository;
use App\Repository\PersonneRepository;

class SecurityController extends AbstractController{

    private PersonneRepository $persRepo;
    private EtudiantRepository $etuRepo;
    public function __construct()
    {
          parent::__construct();
          $this->persRepo=new PersonneRepository;
          $this->etuRepo=new EtudiantRepository;
          $this->chambre=new ChambreRepository;
          $this->pavillon=new PavillonRepository;
    }
    public function login(){
          $this->layout="layout.connexion";
          $this->render("security/login.html.php");
    }
    public function ins(){
        $this->layout="layout.connexion";
        $this->render("inscription/Add.rp.html.php");
  }
    public function seConnecter(Request $request){
       $arrErr=[];
        if($request->isPost()){
          extract($request->request());
          $this->validator->isVide($login,"login");
          $this->validator->isVide($password,"password");
          if($this->validator->valid()){
            $user= $this->persRepo->findPersonneByLoginAndPassword($login,$password);
            if($user==false){
                $arrErr["connexion"]="Login ou Mot de Passe Incorrect";
                Session::setSession("errors",$arrErr);
                $this->redirect("security");
            }else{
                Session::setSession(Role::KEY_SESSION_USER, $user);
                $this->redirect("security/showUsers");
            } 
        }else{
                Session::setSession("errors",$this->validator->getErreurs() );
                $this->redirect("security");
        }
        
       }
        $this->render("security/login.html.php");
    }
    public function logout(){
        Session::destroySession();
        $this->redirect("security");
    }
    public function showEtudiantChambre(){
        $etu=$this->etuRepo->findEtudiantByChambre();
        $this->render("security/filtreEtudiant.html.php",["etu"=>$etu]);
    }
    public function showChambresPavillons(){
        $cham=$this->chambre->findChambreByPavillon();
        $this->render("security/filtreChambre.html.php",["cham"=>$cham]);
    }
    
    public function showUsers(){
        
        $users=$this->persRepo->findAll();
        $this->render("security/users.html.php",["users"=>$users]);
    }
    public function showEtudiants(){
        $users=$this->etuRepo->findAll();
        $this->render("security/users.html.php",["users"=>$users]);
    }
    public function showChambre(){
        //$nbre_elements_page=5;
        $chambre=$this->chambre->findAll();
        //$nbre_de_pages=$chambre[0]['cpt']/$nbre_elements_page;
        $this->render("security/chambre.html.php",["chambre"=>$chambre]);
    }
    public function showPavillon(){
        $pavillon=$this->pavillon->findAll();
        $this->render("security/pavillon.html.php",["pavillon"=>$pavillon]);
    }

}