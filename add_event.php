<?php include_once('layouts/header.php'); ?>

<main class="container">
<div class="card" style="max-width: 600px; margin: 150px auto 0 auto;">
  <div class="card-header">
    Ajouter un événement
  </div>


<div class="card-body">
  <form action="php/add_event.php" method="POST">

<div class="form-group">
  <label for="title">Nom de l'événement</label>
  <input class="form-control" type="text" id="title" name="title">
</div>

<div class="form-group">
  <label for="description">Description de l'événement</label>
  <textarea name="description" class="form-control" id="description" rows="3"></textarea>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="start_at">Date et heure du début</label>
    <input class="form-control" type="datetime-local" id="start_at" name="start_at" value="" placeholder="">
  </div>

  <div class="form-group col-md-6">
    <label for="end_at">Date et heure de fin</label>
    <input class="form-control" type="datetime-local" id="end_at" name="end_at" value="" placeholder="">
  </div>
</div>

<div class="form-group">
  <label for="address">Adresse de l'événement</label>
  <input class="form-control" type="address" id="address" name="address" value="" placeholder="">
</div>

<div class="form-row">
  <div class="form-group col-md-10">
    <label for="city">Ville de l'événement</label>
    <input name="city" type="text" class="form-control" id="city">
  </div>

  <div class="form-group col-md-2">
    <label for="zip_code">Code postal</label>
    <input name="zip_code" type="text" class="form-control" id="zip_code">
  </div>
</div>

<div class="form-group">
    <label for="url">Lien vers l'événement</label>
    <input class="form-control" type="url" id="url" name="url" value="" placeholder="">
</div>

<div class="form-group">
    <button class="btn btn-dark">Ajouter</button>
</div>

</div>

</main>

<?php include_once('layouts/footer.php'); ?>