<?php

class Clients
{

    public string $nom;
    public string $prenom;
    public string $email;

    /**
     * @param string $nom
     * @param string $prenom
     * @param string $email
     */
    public function __construct(string $nom, string $prenom, string $email)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Clients
     */
    public function setNom(string $nom): self
    {
        $this->nom = strtoupper($nom);
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return Clients
     */
    public function setPrenom(string $prenom): Clients
    {
        $this->prenom = ucfirst($prenom);
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Clients
     */
    public function setEmail(string $email): Clients
    {
         if(filter_var($email, FILTER_VALIDATE_EMAIL)){
         $this->email = $email;
    } else{
        $this->email = "l'email n'est pas valide !";
    }
        return $this;
    }




}