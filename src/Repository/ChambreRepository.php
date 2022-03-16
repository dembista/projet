<?php
namespace App\Repository;
use App\Core\Orm\AbstractRepository;
class ChambreRepository extends AbstractRepository{
    public function __construct()
    {
        parent::__construct();
        $this->tableName="chambre";
        $this->primaryKey="id_chambre";
    }
    function findAll():array{
        $sql="select * from $this->tableName";
         return $this->dataBase->executeSelect($sql);
     }
    public function pagination():array{
        $sql="select count(id_chambre) as cpt from chambre";
        return $this->dataBase->executeSelect($sql);
    }
public function find():array|object|bool{
    $sql="select * from $this->tableName where $this->type_chambre like ?";
    return $this->dataBase->executeSelect($sql);
}
     public function findChambreByPavillon():array{
        $sql = "SELECT numero_chambre,numero_etage,pavillon.numero_pavillon FROM $this->tableName  LEFT JOIN pavillon ON $this->tableName.id_pavillon = pavillon.id_pavillon
        where $this->tableName.id_pavillon is not null";
        return $this->dataBase->executeSelect($sql);
     }
     public function filtre(int $id_pavillon):array {
         $sql ="SELECT * FROM 'chambre' WHERE id_pavillon =?";
         return $this->dataBase->executeSelect($sql,[$id_pavillon]);
     }
}