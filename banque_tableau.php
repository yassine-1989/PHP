<?php

$comptes=[];


function creercompte(&$comptes){
    /*while (true){*/
        $nom=readline("*** Entrez un nom :  ");
        $prenom=readline("*** Entrez un prénom :  ");
        $solde=readline("*** Entrez le solde du compte ");
        $comptes[]=[
                
            "nom"=>$nom,
            "prenom"=>$prenom,
            "solde"=>$solde
        
        ];
        print_r($comptes);
       /* $action=readline("*** Voulez-vous ajouter un autre compte ?  ");
        if($action==='n'){
            break;
        } */
    }
    
    //print_r($comptes);
    function allcomptes($comptes){
        $i=0;
        $texte="";
        foreach($comptes as $key=>$compte){
            $i++;
            $texte.= "<=>Données du téléphone numero $i :"."\n";
            $texte.= " =>Nom et Prenom : ".$compte["nom"]." ".$compte["prenom"]."\n";
            $texte.= " =>Numero de téléphone : "." ".$key."\n";
            $texte.= " =>Le solde est : "." ".$compte["solde"]."\n";
        }
        return $texte;
    }



function depot(array &$comptes,$key,$montant){
    $comptes[$key]["solde"]+=$montant;
    echo "Depôt de $montant effectuée. Le nouveau solde du compte est ". $comptes[$key]["solde"]." \n";
}

function virement(&$comptes,$compte1,$compte2,$montant){
    $comptes[$compte1]["solde"]-=$montant;
    $comptes[$compte2]["solde"]+=$montant;
    echo "virement effectué, le nouveau solde du compte n° $compte1 est : ". $comptes[$compte1]["solde"]. ". Le nouveau solde du compte n° $compte2 est : ".$comptes[$compte2]["solde"].".\n";
}

while(true){
    echo "***** LA BANQUE DE FRANCE *****"."\n";
    echo("1.Créer un compte :"."\n");
    echo("2.Dépot espéce"."\n");
    echo("3.Effectuer un virement"."\n");
    echo("4.Quitter"."\n");
    $action=(int)readline("Veuillez choisir une option : "."\n");
    if($action==1){
        creercompte($comptes);
    }else if ($action==2){
        $key=(int)readline("*** Quel est le numero de compte ? "."\n");
        $montant=(int)readline("*** Combien voulez-vous déposer ?"."\n");
        depot($comptes,$key,$montant);
    }
    else if($action==3){
        $compte1=(int)readline("*** Entrez le compte à débiter"."\n");
        $compte2=(int)readline("*** Entrez le compte à créditer"."\n");
        $montant=(int)readline("*** Entrez le solde à débiter "."\n");
        virement($comptes,$compte1,$compte2,$montant);
    }else if($action==4){
        break;
    }
    else{
        echo"erreur";
    }
}



