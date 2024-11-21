<?php

class Contrat{

// attributs
    private DateTime $anneeEmbauche;
    private Equipe $nomEquipe;
    private Joueur $joueur;

// méthodes
// fonction constructeur
    public function __construct(string $anneeEmbauche, Equipe $nomEquipe, Joueur $joueur){
        $this->anneeEmbauche = new DateTime($anneeEmbauche);
        $this->joueur = $joueur;
        $this->nomEquipe = $nomEquipe;
        // ! $contrat->addcontrat($this); on pourrait vouloir l'ajouter comme ça mais ça ne fonctionnera pas, il faut mettre le addContrat sur joueur et sur equipe  
        $joueur->addContrat($this);
        $nomEquipe->addContrat($this);
    }


// getter et setter

    public function getAnneeEmbauche()
    {
        return $this->anneeEmbauche;
    }

    public function setAnneeEmbauche($anneeEmbauche)
    {
        $this->anneeEmbauche = $anneeEmbauche;

        return $this;
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function getEquipe()
    {
        return $this->nomEquipe;
    }

    public function setEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    // fonction

    // fonction
    
    // fonction

    // fonction __toString
    public function __toString(){
        return $this->getAnneeEmbauche();
    }
}