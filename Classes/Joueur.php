<?php

class Joueur{

    // attributs
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private Pays $nomPays;
    private array $contrats =[];
 

// méthodes
// fonction constructeur

    public function __construct(string $nom, string $prenom, string $dateNaissance, Pays $nomPays){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->nomPays =$nomPays;
        $nomPays->addJoueur($this);
        $this->contrats =[];
    }

// getter et setter

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNomPays()
    {
        return $this->nomPays;
    }

    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getContrats()
    {
        return $this->contrats;
    }
 
    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }


 // fonction ajouter un contrat
    public function addContrat(Contrat $contrat){
        $this->contrats []= $contrat;
    }

   // fonction afficher Contrats du joueur
   public function afficherContrat(){
        $result= $this->getInfos() ."<br>";

        foreach ($this->contrats as $contrat){
            $result.= $contrat."<br>";
        }
        return $result;
    }

// fonction calculer age
    public function calculerAge(){
        $aujourdhui = new DateTime();
        $age = $aujourdhui->diff($this->getDateNaissance())->y;
        
        return $age." ans <br>";
    }

// fonction afficher age
    public function getAge(){
        return $this ." a " . $this->calculerAge() ."<br>";
    }

// fonction getInfos
    public function getInfos(){
        return $this ."<br>". $this-> getNomPays()." - " .$this->calculerAge();
    }


    // fonction __toString
    public function __toString(){
        return $this->getNom(). " " . $this->getPrenom();
    }





 
}