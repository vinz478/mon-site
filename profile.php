<?php include_once('layouts/header.php') ?>
<?php include_once('php/get_user.php') ?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-6>";
                        <img src="http://placehold.it/380x500" alt="Photo de Profil" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $_SESSION['user']['username']; ?></h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $_SESSION['user']['email']; ?>
                            <br />
                            Compte créé le <?php echo $_SESSION['user']['created_at']; ?>
                            <br />
                          
                </div>
            </div>
        </div>
    </div>
</div>





<?php include_once('layouts/footer.php');  ?>
