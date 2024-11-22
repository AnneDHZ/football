<?php

Class Pays{

// attributs
    private string $nomPays;
    private array $joueurs =[];
    private array $equipes =[];

// méthodes

// fonction constructeur
    public function __construct(string $nomPays){
        $this->nomPays = $nomPays;
        $this->joueurs = [];
        $this->equipes = [];
    }


// getter et setter

    public function getNomPays()
    {
        return $this->nomPays;
    }

    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getEquipes()
    {
        return $this->equipes;
    }

    public function setEquipes($equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

    public function getJoueurs()
    {
        return $this->joueurs;
    }

    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }
    
    
    // fonction ajouter un joueur
    public function addJoueur(Joueur $joueur){
        $this->joueurs []= $joueur;
    }

    // fonction ajouter une équipe
    public function addEquipe(Equipe $equipe){
        $this->equipes []= $equipe;
    }

    //  fonction afficher équipes
    public function afficherEquipe(){
        $result= $this ."<br>";

        foreach ($this->equipes as $equipe){
            $result.= $equipe."<br>";
        }
        return $result;
    }

       // fonction afficherJoueur
       public function afficherJoueur(){
        $result= $this ."<br>";

        foreach ($this->joueurs as $joueur){
            $result.= $joueur."<br>";
        }
        return $result;
    }

// fonction toString
 
   public function __toString(){

        return $this->getNomPays();
    }

}