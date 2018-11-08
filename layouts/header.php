<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include_once('layouts/head.php'); ?>
  </head>
  <body>
    <?php include_once('./components/debugger.php'); ?>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">La Confrérie des Chineurs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>

<?php if(empty($_SESSION['user'])){ ?>

<li class="nav-item">
  <a class="nav-link" href="register.php">Inscription</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="login.php">Connexion</a>
</li>

<?php } else { ?>

<li class="nav-item">
  <a class="nav-link" href="profile.php">Mon Profil</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="add_event.php">Ajouter un événement</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="php/logout.php">Se déconnecter</a>
</li>

<?php } ?>

<li class="nav-item">
  <a class="nav-link" href="#debuger"
  data-toggle="collapse" role="button">
  Debuger </a>
</li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher quelque chose</button>
      </form>
    </div>
  </nav>
</header>
  </body>
</html>
