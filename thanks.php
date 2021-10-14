<?php

$retour = "Merci " . $_GET[ 'name'] . " " . $_GET[ 'firstname'] . " de nous avoir contacté à propos de '" . $_GET['subject'] . "'. " . 
"Un de nos conseiller vous contactera soit à l'adresse " . $_GET[ 'email'] .  " ou par téléphone au " . $_GET['phone_number'] . " dans les plus brefs délais pour traiter votre demande :" . 
$_GET['message'];
$nameErr = $firstnameErr = $emailErr = $phone_numberErr = $subjectErr = $messageErr = "";
$name = $firstname = $email = $phone_number = $subject = $message = "";

if (empty($_POST[])) {
    $nameErr = "Ce champ est requis";
  } else {
    $name = test_input($_POST[]);
  }

$email = test_input(($_POST['email']));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Adresse mail invalide!"
}