<?php
namespace App\Controllers;
use App\Core\AbstractController;
use App\Core\Request;
use App\Entity\Etudiant;
use App\Core\Session;
use App\Manager\EtudiantManager;
class EtudiantController extends AbstractController{

    private Request $request;
    private Etudiant $etudiant;

    public function __construct()
{
        parent::__construct();
        $this->request=new Request;
        $this->etudiant=new Etudiant;
}

public function voirAddEtudiant()
{
   // $pavillon=$this->pavillon->findAll();
    $this->render("inscription/Add.etudiant.html.php");
}
public function editEtudiant(){
        
}
public function deleteEtudiant(){
    
}
public function filtre(){
    $id=$this->request->query();
    $etu=$this->etuRepo->etudiantByChambre($id[0]);
    $this->render("security/filtreEtudiant.html.php",["etu",$etu]);
}
public function addEtudiant(){
    //die('rrrr');
    if ($this->request->isPost()) {
        $post=$this->request->request();
        //var_dump($post); die;
        extract($post);
        $this->validator->isVide($nom,"nom");
            $this->validator->isVide($prenom,"prenom");
            $this->validator->isVide($login,"login");
            //$this->validator->isVide($matricule,"matricule");
            $this->validator->isVide($telephone,"telephone");
            //$this->validator->isVide($naissance,"date_naisse");
            if($this->validator->valid()){
                $insert=$this->etudiant;
                //var_dump($post); die;
                $insert->setNom($nom)
                    ->setPrenom($prenom)
                    ->setLogin($login);
                $insert->setTelephone($telephone)
                    ->setMatricule(uniqId())
                    ->setType($type)
                    ->setEtat($etat)
                    ->setDateNaiss($date_naisse)
                    ->setAdresse($adresse)
                    ->setIdChambre(2)
                    ;
                    $insertEtudiant=new EtudiantManager;
                    $upetudiant=$this->etudiant->fromArray($insert);
                    //var_dump($upetudiant);die;
                //var_dump($upchambre); die;
                //  
                $insertEtudiant->insert($upetudiant);
                //var_dump($insertEtudiant);die;
                $this->render("inscription/Add.etudiant.html.php");
            }else{
                Session::setSession("errors",$this->validator->getErreurs() );
                $this->render("security/ajouEtudiant.html.php");
    
            }
        

            
    }
}
}
