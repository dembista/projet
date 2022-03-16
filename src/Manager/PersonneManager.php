<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class PersonneManager extends AbstractManager{
    
    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="users";
        $this->primaryKey="id_user";
    }
   

    public function insert(array $model):int{
         $sql="insert into  $this->tableName (nom,prenom,login,telephone,matricule,type,etat,date_naisse,adresse,role,id_chambre) values(?,?,?,?,?,?,?,?,?,?,?,?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set nom_complet=?,login=?,telephone=?,matricule=?,type=?,etat=?,date_naisse=?,adresse=?,role=?,id_chambre=? where $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }
}