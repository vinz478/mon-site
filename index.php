<?php
$title = 'Accueil';
$description =' ';
 ?>





<?php include_once('layouts/header.php'); ?>

<main id="content">

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <div class="main">
          Vide-Greniers et Brocantes
      </div>
    </div>
      <div class="col-lg-4">
        <aside class="sidebar">
          dans la région nantaise et ses alentours
        </aside>
      </div>
  </div>
</div>
<script>
    $(function() {

  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
  })

});
    </script>
<?php include_once("layouts/footer.php"); ?>