<?php   
  // Moyenne d'un tableau d'entiers
/*$tab=[15,13.5,17,1];
$moyenne=round(array_sum($tab)/(count($tab, 2)));
echo $moyenne;*/

$insultes=['con','merde'];
$astertique=[];
foreach($insultes as $insulte){
    $astertique[]=substr($insulte, 0, 1) . str_repeat('*',strlen($insulte)-1);
}
$phrase=readline('Entrez un mot : '."\n");
$phrase=str_replace($insultes,$astertique,$phrase);
echo $phrase;

//un commit////
