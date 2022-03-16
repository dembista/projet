<?php
namespace App\Manager;
use App\Core\Orm\AbstractManager;

class PavillonManager extends AbstractManager{
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName="pavillon";
        $this->primaryKey="id_pavillon";
    }
   

    public function insert(array $model):int{
         $sql="insert into  $this->tableName (numero_pavillon,nombre_etage) values(?,?)";
        return $this->dataBase->executeUpdate($sql,$model);
    }
      public  function update(array $model):int{
        $sql="update  $this->tableName set numero_pavillon=?,nombre_etage=?where $this->primaryKey=?";
        return $this->dataBase->executeUpdate($sql,$model);
      }
}