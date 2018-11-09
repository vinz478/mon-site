<?php
// Si le formulaire est soumis...
if(isset($_POST)) {
  //On crée des variables plus lisibles
  $username = $_POST['username'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  // On crypte le mot de passe
  $password = hash('md5', $password);

  //On connecte la DB
  include_once('db.php');

  //On sollicite la base de données
  $sql = "INSERT INTO users (username, email, password, created_at, updated_at)
  VALUES (:username, :email, :password, :created_at, :updated_at)";
  $stmt = $connexion->prepare($sql);
  $stmt ->bindValue(":username", $username);
  $stmt ->bindValue(":email", $email);
  $stmt ->bindValue(":password", $password);

  $stmt->execute([
    'username'      => $username,
    'email'         => $email,
    'password'      => $password,
    'created_at'    => date('Y-m-d H:i:s'),
    'updated_at'    => date('Y-m-d H:i:s'),
  ]);

  //On connecte l'utilisateur
  session_start();
  $_SESSION['connected'] = true;

  $_SESSION['user_id'] = $user_id;
  $_SESSION['email'] = $email;
  $_SESSION['email'] = $email;

  //Traitement des erreurs
  if (!$_POST['username']){
  $_SESSION['errors']['username']     = 'Veuillez entrer votre nom';
  }

  if (!$_POST['email']){
  $_SESSION['errors']['email']        = 'Veuillez entrer une adresse email valide';
  }

  if (!$_POST['password']){
  $_SESSION['errors']['password']     = 'Veuillez entrer un mot de passe valide';
  }

  $_SESSION['fields']['username']     = $username;
  $_SESSION['fields']['email']        = $email;

  //On redirige
  header('Location: ../');
  unset($db);
}