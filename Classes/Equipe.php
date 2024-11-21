<?php

class Equipe{

// attributs
private string $nomEquipe;
private Pays $nomPays;
private array $contrats=[];

// méthodes 
// fonction construct
public function __construct(string $nomEquipe, Pays $nomPays){
    $this->nomEquipe = $nomEquipe;
    $this->nomPays = $nomPays;
    $nomPays->addEquipe($this);
    $this->contrats =[];
}

// getter et setter

    public function getNomEquipe() :string
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    public function getPays() :string
    {
        return $this->nomPays;
    }

    public function setPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getContrats() :array
    {
        return $this->contrats;
    }

    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

//   fonction 
    
    // fonction ajouter contrat
    public function addcontrat(Contrat $contrat){
        $this->contrats []= $contrat;
    }
    
// fonction toString
    public function __toString(){
        return $this->getNomEquipe();
    }





 

}