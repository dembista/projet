<?php 
namespace App\Repository;



class EtudiantRepository extends PersonneRepository {
   
    public function __construct(){
        parent::__construct();
        $this->role="ROLE_ETUDIANT";
    }
    function findAll():array{
        $sql="select * from $this->tableName where role like ?  ";
         return $this->dataBase->executeSelect( $sql,[$this->role ]);
     }

     public function findEtudiantByChambre():array{
        $sql = "SELECT nom,prenom,login,chambre.numero_chambre FROM $this->tableName  LEFT JOIN chambre ON $this->tableName.id_chambre = chambre.id_chambre
         where $this->tableName.id_chambre is not null ";
           return $this->dataBase->executeSelect($sql);
        }
    public function etudiantByChambre(int $id):array {
        $sql = "SELECT * FROM 'users' WHERE id_chambre =?";
        return $this->dataBase->executeSelect($sql,[$id]);
    }

}