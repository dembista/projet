<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class EtudiantManager extends AbstractManager{
    
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="users";
        $this->primaryKey="id_user";
    }
   

    public function insert(array $model):int{
      //var_dump($model);die;
         $sql="insert into  $this->tableName (nom,prenom,login,role,type,etat,telephone,matricule,date_naisse,adresse,id_chambre) values(?,?,?,?,?,?,?,?,?,?,?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set nom_complet=?,login=?,telephone=?,matricule=?,type=?,etat=?,date_naisse=?,adresse=?,role=?,id_chambre=? where $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }
}
// namespace App\Manager;
// use App\Core\Orm\AbstractManager;

// class EtudiantManager extends AbstractManager{
    
//     public function __construct()
//     {
//         parent::__construct();
//         $this->tableName="users";
//         $this->primaryKey="id_user";
//     }
   

//     public function insert(array $model):int{
//          $sql="insert into  $this->tableName (numero_chambre,numero_etage,type_chambre,id_pavillon) values(?,?,?,?)";
//         return $this->dataBase->executeUpdate($sql,$model);
//     }
//       public  function update(array $model):int{
//         $sql="update  $this->tableName set numero_chambre=?,numero_etage=?,id_pavillon=?where $this->primaryKey=?";
//         return $this->dataBase->executeUpdate($sql,$model);
//       }
// }