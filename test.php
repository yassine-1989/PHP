<?php
include('form.class.php');
//***************************
$myform = new form("traitement.php","Accès au site","post");
$myform->settext("nom","Votre nom :  ");
$myform->settext("code","Votre code : ");

$myform->setsubmit();
$myform->getform();
$myform->getform();
?>