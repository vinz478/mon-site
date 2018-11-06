<?php
/*
//On fait appel à la base de données
require("db.php");
*/



// Si le formulaire est soumis...
if(isset($_POST)) {
    //On crée des variables plus lisibles
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
/*
    // On crypte le mot de passe
    $password ->hash('md5', $password);
*/
    //On réunit les possibles erreurs dans un tableau
    $error = [
      'username'  => 'erreur',
      'email'     => 'erreur',
      'password'  => 'erreur',
    ]};

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
