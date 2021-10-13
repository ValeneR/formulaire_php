<?php
$firstname = $_GET['firstname'];
$name = $_GET['name'];
$subject = $_GET['subject'];
$email = $_GET['courriel'];
$phone_number = $_GET['phone_number'];
$message = $_GET['message'];

echo "Merci $firstname $name de nous avoir contacté à propos de '$subject'.

Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone_number dans les plus brefs délais pour traiter votre demande : 

$message"
?>