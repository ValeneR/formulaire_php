<?php
$firstname = $_POST['firstname'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['courriel'];
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];

echo "Merci $firstname $name de nous avoir contacté à propos de '$subject'.

Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone_number dans les plus brefs délais pour traiter votre demande : 

$message"
?>