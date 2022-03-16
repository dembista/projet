<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Etudiant extends Personne {
    
    private string $type;
    private string $etat;
    private string $telephone;
    private string $matricule;
    private string $dateNaiss;
    private string $adresse;
    private int $id_chambre;
    

   public function __construct()
   {
       parent::__construct();
       $this->role="ROLE_ETUDIANT";
   }
    
   /**
    * Get the value of inscriptions
    */ 
//    public function getInscriptions()
//    {
//       return $this->inscriptions;
//    }

//    /**
//     * Set the value of inscriptions
//     *
//     * @return  self
//     */ 
//    public function setInscriptions($inscriptions)
//    {
//       $this->inscriptions = $inscriptions;

//       return $this;
//    }

//   public function addInscription(Inscription $inscription):self{
//        if( !$this->inscriptions->contains($inscription)){

//            $this->inscriptions->add($inscription);
//            //Relation Inverse
//            $inscription->setEtudiant($this);
//        }
//        return $this;
//   }
//   public function removeInscription(Inscription $inscription):self{
//     if($this->inscriptions->contains($inscription)){
//         $inscription->setEtudiant(null);
//         $this->inscriptions->removeElement($inscription);
        
//     }
//     return $this;
// }

public static function  fromArray(object $personne):array{
    $arr=  array_values((array)$personne);
    //$arr[]="";
     return  array_values($arr);
  }


    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    

    /**
     * Get the value of adresse
     *
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @param string $adresse
     *
     * @return self
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }


    /**
     * Get the value of dateNaiss
     */ 
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @return  self
     */ 
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get the value of etat
     *
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @param string $etat
     *
     * @return self
     */
    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param string $telephone
     *
     * @return self
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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
}