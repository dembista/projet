<?php
namespace App\Entity;

class RP extends Personne implements EntityInterface{
    private string $password;

    public function __construct()
   {
       parent::__construct();
       $this->role="ROLE_ETUDIANT";
   }
    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}