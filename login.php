<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
?>

<?php include_once('layouts/header.php'); ?>

<main class="container">
  <div class="card" style="max-width: 600px; margin: 150px auto 0 auto;">
    <div class="card-header">
    Connexion
    </div>


<div class="card-body">
  <form action="php/login.php" method="POST">

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="email" id="email" name="email" value="" placeholder="" required>
        </div>


        <div class="form-group">
          <label for="password">Mot de Passe</label>
          <input class="form-control" type="password" id="password" name="password" value="" placeholder="" required>
        </div>


        <div class="form-group">
          <button class="btn btn-dark">Se Connecter</button>
        </div>

      </div>

    </div>
</main>



<?php include_once('layouts/footer.php'); ?>