<?php 
namespace App\Controllers;

use App\Core\Request;
use App\Entity\Pavillon;
use App\Manager\PavillonManager;
use App\Core\AbstractController;


class PavillonController extends AbstractController{
    private Request $request;
    private Pavillon $pavillon;
    
    public function __construct()
{
        parent::__construct();
      $this->request=new Request;
      $this->pavillon=new Pavillon;
}

public function voirAddPavillon()
{
   // $pavillon=$this->pavillon->findAll();
    $this->render("inscription/Add.pavillon.html.php");
}
public function editPavillon(){
    $id_chambre = $this->request->query();
    $pavillon=$this->repo->findById($id_chambre[0]);
    //var_dump($chambre);die();
    $this->render("inscription/Add.pavillon.html.php",['pavillon'=>$pavillon]);
}
// public function editPavillon(){
        
// }
public function deletePavillon(){
    
}
public function addPavillon(){
    //die('rrrr');
    if ($this->request->isPost()) {
        $post=$this->request->request();
        extract($this->request->request());
        $insert=$this->pavillon;
        $insert->setNumeroPavillon($numero_pavillon)
            ->setNombreEtage($nombre_etage);
            $insertPavillon=new PavillonManager;
            $upPavillon=$this->pavillon->fromArray($insert);
          //  var_dump($upPavillon); die;
          //  

           $insertPavillon->insert($upPavillon);
           $this->render("security/pavillon.html.php");

            
    }
}
}
