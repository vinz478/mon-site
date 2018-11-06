<?php
//Montrer toutes les infos relatives à POST


//Si le formulaire est soumis...
if(isset($_POST)){
    $email    = $_POST['email'];
    $password = $_POST['password'];
}


//On cherche l'utilisateur dans la base de données en fonction de son Email

require("db.php");

        $sql = "SELECT *
                FROM users
                WHERE email = :email";

        $stmt = $connexion->prepare($sql);
        $stmt ->bindValue(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch();

//Si on a trouvé un résultat
if(isset($user)) {
    //Alors on vérifie son mot de passe
      session_start();
      $_SESSION['user'] = $user;
}
