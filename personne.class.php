<?php
class Personne{

    private $nom;
    private $prenom;
    private $adresse;

    public function __Construct(string $nom, string $prenom, string $adresse){
                $this->nom=$nom;
                $this->prenom=$prenom;
                $this->adresse=$adresse;
    }

        //Destructeur
    public function __destruct()
    {
    echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\nest supprimée de vos contacts')</script>";
    }
    
    public function getPersonne(){
        $texte="Votre nom est ".$this->nom.", votre prénom est ".$this->prenom.", votre adresse est ".$this->adresse.".";
        return $texte;
    }

    public function setAdresse(string $adresse){
        $this->adresse=$adresse;
    }
}
 
$personne1=new Personne("Yassine","BEN ALI","65 Avenue jules guesde");
echo $personne1->getPersonne();
$personne1->setAdresse("AAA");
echo $personne1->getPersonne();
var_dump($personne1);

//Suppression explicite du client, donc appel du destructeur
unset($personne1);
//Fin du script
echo "Fin du script";
