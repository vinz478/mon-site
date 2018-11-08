<?php

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
  $user_id        = 'user_id';
  $created_at     = 'created_at';
  $updated_at     = 'updated_at';
  $published_at   = 'published_at';

  //On connecte la DB
  include_once('db.php');

  //On sollicite la base de données
  $sql = "INSERT INTO events (title, description, start_at, end_at, address, city,
     zip_code, created_at, updated_at, url, user_id, published_at)
  VALUES ( :title, :description, :start_at, :end_at, :address, :city,
 :zip_code, :created_at, :updated_at, :url, :user_id, :published_at)";

  $stmt = $connexion->prepare($sql);

  $stmt->execute([

    'title'              => $title,
    'desription'         => $description,
    'start_at'           => date('Y-m-d H:i:s'),
    'end_at'             => date('Y-m-d H:i:s'),
    'address'            => $address,
    'city'               => $city,
    'zip_code'           => $zip_code,
    'created_at'         => date('Y-m-d H:i:s'),
    'updated_at'         => date('Y-m-d H:i:s'),
    'url'                => $url,
    'user_id'            => $user_id,
    'published_at'       => $published_at,

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
  //header('Location: events.php');
  unset($db);
}
