<?php

$creneaux=[];

while (true){
    $debut=(int)readline("Heure d'ouverture ");
    $fin=(int)readline("Heure de fermeture ");
    if($debut >= $fin){
        echo("L\'horaire ne peut pas être enregistré car l'horaire d'ouverture($debut) est supérieur à l'horaire de fermeture ($fin). ");       
    } 
    else{
        $creneaux[]=[$debut,$fin];
        $action=readline("Voulez-vous ajouter un autre créneau ? ");
        if($action==='n'){
            break;
        }
    }
}

foreach($creneaux as $key => $creneau){
    if($key>0){
        echo " et de {$creneau[0]}h à {$creneau[1]}h ";

    }
    else{
        echo "Le magasin est ouvert de {$creneau[0]}h à {$creneau[1]}h";
    }
}
/*
$heure=(int)readline("A quelle heure voulez vous visiter le magasin ? ");
$horaireTrouvee=false;
foreach($creneaux as $creneau){
    if( $heure>=$creneau[0]  &&  $heure <= $creneau[1] ) {
        $horaireTrouvee=true;
    }
}

if($horaireTrouvee){
    echo "***Le magasin sera ouvert****
    ";
}else{
    echo "***Le magasin sera fermé****
    ";
}*/
print_r($creneaux);
//3eme commit