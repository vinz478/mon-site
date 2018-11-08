<?php

include_once('php/db.php')

if(isset($user_id))
    $id = $user_id

$sql = 'SELECT * FROM users
        WHERE id = $_SESSION['id']';

$stmt = $connexion->prepare($sql);
$stmt->execute();
$user=$stmt->fetchAll();

var_dump($user);
die();


 ?>
