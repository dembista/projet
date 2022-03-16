<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class ChambreManager extends AbstractManager{
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName="chambre";
        $this->primaryKey="id_chambre";
    }
   

    public function insert(array $model):int{
         $sql="insert into  $this->tableName (numero_chambre,numero_etage,type_chambre,id_pavillon) values(?,?,?,?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set numero_chambre=?,numero_etage=?,type_chambre=?,id_pavillon=?where $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }

      // public  function update(array $model):int{
      //   $sql="update  $this->tableName set num_chambre=?,num_etage=?,id_type_chambre=?,id_pavillon=? where $this->primaryKey=?";
      //   return $this->dataBase->executeUpdate($sql,$model);
      // }
}

