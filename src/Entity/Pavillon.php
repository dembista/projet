<?php
namespace App\Entity;

class Pavillon implements EntityInterface{
    private string $numero_pavillon;
    private string $nombre_etage;
    private Etudiant $etudiant;


    public function __construct()
    {
    }
   
    public static function fromArray(object $obj): array
    {
        return $array=array_values((array)$obj);
          
    }
    


    /**
     * Get the value of numero_pavillon
     *
     * @return string
     */
    public function getNumeroPavillon(): string
    {
        return $this->numero_pavillon;
    }

    /**
     * Set the value of numero_pavillon
     *
     * @param string $numero_pavillon
     *
     * @return self
     */
    public function setNumeroPavillon(string $numero_pavillon): self
    {
        $this->numero_pavillon = $numero_pavillon;

        return $this;
    }

    /**
     * Get the value of nombre_etage
     *
     * @return string
     */
    public function getNombreEtage(): string
    {
        return $this->nombre_etage;
    }

    /**
     * Set the value of nombre_etage
     *
     * @param string $nombre_etage
     *
     * @return self
     */
    public function setNombreEtage(string $nombre_etage): self
    {
        $this->nombre_etage = $nombre_etage;

        return $this;
    }

    /**
     * Get the value of etudiant
     *
     * @return Etudiant
     */
    public function getEtudiant(): Etudiant
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @param Etudiant $etudiant
     *
     * @return self
     */
    public function setEtudiant(Etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }
}