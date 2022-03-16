<?php 
namespace App\Repository;
class PavillonRepository extends PersonneRepository {

    public function __construct(){
        parent::__construct();
        $this->tableName="pavillon";
        $this->primaryKey="id_pavillon";
    }
    function findAll():array{
        $sql="select * from $this->tableName";
         return $this->dataBase->executeSelect($sql);
     }

  

}