<?php
session_start();
/*var_dump($_POST);
die();*/

// Si le formulaire est soumis...
if(isset($_POST)) {
  //On crée des variables plus lisibles
  $title          = $_POST['title'];
  $description    = $_POST['description'];
  $start_at       = $_POST['start_at'];
  $end_at         = $_POST['end_at'];
  $address        = $_POST['address'];
  $city           = $_POST['city'];
  $zip_code       = $_POST['zip_code'];
  $url            = $_POST['url'];
  $user_id        = $_SESSION['user']['id'];

echo $title.' DESCRPTION'.$description.' COMMENCE '.$start_at.' SE TERMINE'.$end_at.' LIEU'.$address.' VILLE'.$city.' CODE POSTAL'.$zip_code.' URL'.$url.' USER ID'.$user_id;

var_dump($_SESSION['user']);

  //On connecte la DB
  include_once('db.php');

  //On sollicite la base de données
  $sql = "INSERT INTO events (title, description, start_at, end_at, address, city,
     zip_code, created_at, url, user_id)
  VALUES ( :title, :description, :start_at, :end_at, :address, :city,
 :zip_code, NOW(), :url, :user_id)";

  $stmt = $connexion->prepare($sql);

  $stmt->execute([

    'title'              => $title,
    'desription'         => $description,
    'start_at'           => $_POST['start_at'],
    'end_at'             => $_POST['end_at'],
    'address'            => $address,
    'city'               => $city,
    'zip_code'           => $zip_code,
    'url'                => $url,
    'user_id'            => $user_id

  ]);

//echo "ça fonctionne";
//die();
  //Traitement des erreurs
  if (!$_POST['title']){
  $_SESSION['errors']['title']       = 'Entrez le nom de l\'événement';
  }

  if (!$_POST['description']){
  $_SESSION['errors']['description'] = 'Décrivez l\'évenement';
  }

  if (!$_POST['start_at']){
  $_SESSION['errors']['start_at']   = 'Entrez la date et l\'heure de début de l\'événement';
  }

  if (!$_POST['end_at']){
  $_SESSION['errors']['end_at']     = 'Entrez la date et l\'heure de fin de l\'événement';
  }

  if (!$_POST['address']){
  $_SESSION['errors']['address']    = 'Entrez l\'adresse exacte de l\'événement';
  }

  if (!$_POST['city']){
  $_SESSION['errors']['city']       = 'Entrez la ville où se situera l\'événement';
  }





  //On redirige
  die();
  header('Location: ../events.php');
  unset($db);
}
