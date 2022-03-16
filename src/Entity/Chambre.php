<?php
namespace App\Entity;

class Chambre implements EntityInterface{
    private int $id_chambre;
    private string $numero_chambre;
    private string $numero_etage;
    private string $type_chambre;
    private int|null $id_pavillon;
    private Etudiant $etudiant;


    public function __construct()
    {
    }
   
    public static function fromArray(object $obj): array
    {
         $array=array_values((array)$obj);
         $array[]=null;
         return array_values($array);
    }
    public static function fromArrayUpdate(object $obj): array
    {
         $array=array_values((array)$obj);
         
         
        //  $array[]=$array[0];
        //   $array[]=$array[1];
        //   $array[]=$array[2];
        //   $array[]=$array[3];
        //   unset($array[0]);
        //   unset($array[1]);
        //   unset($array[2]);
        //   unset($array[3]);
          $array[]=null;
          //var_dump($array);die();
         return array_values($array);
    }
    /**
     * Get the value of etudiant
     */ 
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */ 
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get the value of numero_chambre
     *
     * @return string
     */
    public function getNumeroChambre(): string
    {
        return $this->numero_chambre;
    }

    /**
     * Set the value of numero_chambre
     *
     * @param string $numero_chambre
     *
     * @return self
     */
    public function setNumeroChambre(string $numero_chambre): self
    {
        $this->numero_chambre = $numero_chambre;

        return $this;
    }

    

    /**
     * Get the value of numero_etage
     *
     * @return string
     */
    public function getNumeroEtage(): string
    {
        return $this->numero_etage;
    }

    /**
     * Set the value of numero_etage
     *
     * @param string $numero_etage
     *
     * @return self
     */
    public function setNumeroEtage(string $numero_etage): self
    {
        $this->numero_etage = $numero_etage;

        return $this;
    }

    /**
     * Get the value of type_chambre
     *
     * @return string
     */
    public function getTypeChambre(): string
    {
        return $this->type_chambre;
    }

    /**
     * Set the value of type_chambre
     *
     * @param string $type_chambre
     *
     * @return self
     */
    public function setTypeChambre(string $type_chambre): self
    {
        $this->type_chambre = $type_chambre;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_chambre
     *
     * @return int
     */
    public function getIdChambre(): int
    {
        return $this->id_chambre;
    }

    /**
     * Set the value of id_chambre
     *
     * @param int $id_chambre
     *
     * @return self
     */
    public function setIdChambre(int $id_chambre): self
    {
        $this->id_chambre = $id_chambre;

        return $this;
    }

    /**
     * Get the value of id_pavillon
     *
     * @return int
     */
    public function getIdPavillon(): int
    {
        return $this->id_pavillon;
    }

    /**
     * Set the value of id_pavillon
     *
     * @param int $id_pavillon
     *
     * @return self
     */
    public function setIdPavillon(int $id_pavillon): self
    {
        $this->id_pavillon = $id_pavillon;

        return $this;
    }
}