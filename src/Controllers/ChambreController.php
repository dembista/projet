<?php 
    namespace App\Controllers;

    use App\Core\AbstractController;
    use App\Core\Request;
    use App\Entity\Chambre;
    use App\Manager\ChambreManager;
    use App\Repository\ChambreRepository;


class ChambreController extends AbstractController{
    private Request $request;
    private Chambre $chambre;
    
    public function __construct()
{
        parent::__construct();
      $this->request=new Request;
      $this->chambre=new Chambre;
      $this->repo=new ChambreRepository;
}

public function voirAddChambre()
{
    //$pavillon=$this->pavillon->find();
    $this->render("inscription/Add.chambre.html.php");
}

public function editChambre(){
    $id_chambre = $this->request->query();
    $chambres=$this->repo->findById($id_chambre[0]);
    //var_dump($chambre);die();
    $this->render("inscription/Add.chambre.html.php",['chambres'=>$chambres]);
}
// public function editChambre(){
//     $id = $this->request->query();
   
//     //$chambre_by_id=$this->chambre->finPavillon($id[0]);
   
//    if (!$chambre_by_id[0]->id_pavillon==null) {
//        $chambre_by_id1=$this->pavillon ->findById($chambre_by_id[0]->id_pavillon);
//    }
  
//     $pavillon=$this->pavillon->findAll();
//     $this->render("chambre/ajout.chambre.html.php",['pavillon'=>$pavillon,"chambre_by_id"=>$chambre_by_id,"chambre_by_id1"=>$chambre_by_id1]);
// }
public function deleteChambre(){
    
}
public function filtreChambre(){
    $id_pavillon=$this->request->query();
    $cham = $this->chamb->filtre($id_pavillon[0]);
    $this->render("security/filtreChambre.html.php",["cham"=>$cham]);
}
public function addChambre(){
    //die('rrrr');
    if ($this->request->isPost()) {
        $post=$this->request->request();
        extract($this->request->request());
        $insert=$this->chambre;
        $insert->setNumeroChambre($numero_chambre)
            ->setNumeroEtage($numero_etage)
            ->setTypeChambre($type_chambre)
            //->setIdPavillon($id_pavillon)
            ;
            // if ($id_pavillon=="") {
            //     $this->chambre->setIdPavillon('null',null);
            // }else {
            //     $this->chambre->setIdPavillon(3);
            // }
            $insertChambre=new ChambreManager;
            $upchambre=$this->chambre->fromArray($insert);
        //var_dump($upchambre); die;
          //  
          if ($id_chambre==null) {
            $insertChambre->insert($upchambre);
            //die("Error");
          }else {
                
              $this->chambre->setIdChambre($id_chambre);
              //var_dump($this->chambre);die();
              $upchambre= Chambre::fromArrayUpdate($this->chambre);
              //var_dump($upchambre);die();
              $insertChambre->update($upchambre);
              //var_dump($insertChambre);die();

          }
          $this->render("inscription/Add.chambre.html.php");

            
    }
}
}
