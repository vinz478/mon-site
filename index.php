<?php
$title = 'Accueil';
$description =' ';
 ?>





<?php include_once('layouts/header.php'); ?>

<main id="content">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-80 " src="img/vg1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-80" src="img/vg2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-80" src="img/vg3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <div class="main">
          CECI EST UN CONTENU DE TYPE NUL
      </div>
    </div>
      <div class="col-lg-4">
        <aside class="sidebar">
          CECI EST UNE SIDEBAR SANS GRAND INTÉRÊT
        </aside>
      </div>
  </div>
</div>
  <button class="button btn-dark my-2 my-sm-0 btn-lg btn-block">
    CLIQUE MOI, JE NE SERS À RIEN
  </button>
</menu>

</main>


<?php include_once('layouts/footer.php');  ?>
