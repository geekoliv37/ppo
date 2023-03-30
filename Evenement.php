<?php
class Evenement
{
    public string $nom;
    public string $lieu;
    public int $places;
    private int $prix;
    public string $date;


public function __construct(string $nom, string $lieu, int $places, int $prix, string $date)
    {
        $this ->setNom($nom);
        $this ->setlieu($lieu);
        $this ->setPlaces($places);
        $this ->setPrix($prix);
        $this ->setDate($date) ;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function setLieu(string $lieu)
    {
        $this->lieu = $lieu;
    }
    public function getLieu(): string
    {
        return $this->lieu;
    }
    public function setPlaces(int $places)
    {
        $this->places = $places;
    }
    public function setPrix(int $prix)
    {
        if ($prix > 0) {
            $this->prix =$prix;
        } else {
            $this->prix =0;
        }
    }
    public function getPrix(): int
    {
        return $this->prix;
    }
    public function setDate(string $date)
    {
        $this->date = $date;
    }
    public function calculCoutRevient():int
    {
        return $this->prix * $this->places;
    }
    public function __toString(): string
    {
        return $this->nom. ' aura lieu le ' . $this->date . ' à ' . $this->lieu   ;//afficher le message : "nom de l'évenement" aura lieu le "date" à "lieu"
    }
}