<?php

declare(strict_types=1);

class Ville{

    private $nom;
    private $departement;

    public function __construct(string $nom, string $departement)
    {
        $this->nom=$nom;
        $this->departement=$departement;
    }

    public function getInfo(){
            $texte= "La ville de ".$this->nom." est dans le département ".$this->departement;
            return $texte;
    }
}

//Création d'objets
$ville1 = new ville("Nantes","Loire Atlantique");
$ville2 = new ville("Lyon","Rhône");
echo $ville1->getinfo();
echo $ville2->getinfo();