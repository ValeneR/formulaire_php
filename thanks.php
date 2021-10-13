<?php
    echo "Merci " . $_GET[ 'user_name'] . " " . $_GET[ 'user_firstname'] . " de nous avoir contacté à propos de '" . $_GET['subject'] . "'. " . 
  "Un de nos conseiller vous contactera soit à l'adresse " . $_GET[ 'user_email'] .  " ou par téléphone au " . $_GET['user_phone'] . " dans les plus brefs délais pour traiter votre demande :" . 
  $_GET['user_message'];
?>