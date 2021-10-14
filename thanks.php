<?php

$errors = [];

function test_input($datas) {{
  $datas = trim($datas);
  $datas = stripslashes($datas);
  $datas = htmlspecialchars($datas);
  return $datas;
}}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $errors[] ="Ce champ est requis";
    } 
    else {
    $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $errors[] = "Seuls les lettres et les espaces sont autorisés";
        }
    }
}

if (empty($_POST["firstname"])) {
    $errors[] = "Ce champ est requis";
} 
else {
    $prenom = test_input($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $errors[] = "Seuls les lettres et les espaces sont autorisés";
    }
}

if (empty($_POST["email"])) {
    $errors[] = "Ce champ est requis";
} 
else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Adresse mail invalide!";
    }
}

if (empty($_POST["phone_number"])) {
    $errors[] = "Ce champ est requis";
} 
else {
    $tel = test_input($_POST["phone_number"]);
    if (!preg_match("/.0[1-9]{1}(([0-9]{2}){4})|((\s[0-9]{2}){4})|((-[0-9]{2}){4})$/",$tel)) {
        $errors[] = "Numéro de téléphone invalide!";
    }
}

if (empty($_POST["subject"])) {
    $errors[] = "Ce champ est requis";
} 
else {
    $sujet = test_input($_POST["subject"]);
}

if (empty($_POST["message"])) {
    $errors[] = "Ce champ est requis";
} 
else {
    $message = test_input($_POST["message"]);
    }
}

if (empty($errors)) {
    echo "Merci $name $firstname de nous avoir contacté à propos de $subject.
    Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone 
    au $phone_number dans les plus brefs délais pour traiter votre demande : $message";
} 
else {
    foreach($errors as $type => $errMess){
        echo $errMess;
    }
}