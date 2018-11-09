<?php
include_once('php/db.php');


if(isset($_GET['user_id'])){
  $id = $_GET['user_id'];
} else {
  $id = $_SESSION['user']['id'];
}


$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $connexion->prepare($sql);
$stmt->execute();
$user=$stmt->fetch();
