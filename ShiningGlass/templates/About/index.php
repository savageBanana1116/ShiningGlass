<!DOCTYPE html>

<?php //App::import('Controller','Abouts');
$aboutController = new \App\Controller\AboutsController();
$artistController = new \App\Controller\ArtistsController();
$title1 = $aboutController->getAbout(1);
$title2 = $aboutController->getAbout(2);
$title3 = $aboutController->getAbout(3);
$title4 = $aboutController->getAbout(4);
$artist = $artistController->getArtistName(2);
?>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>About</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->

    <?= $this->Html->css('styles.css') ?>
</head>
<body id="page-top">

<!-- Navigation-->
<?= $this->element('nav') ?>


<!-- Title of About Page-->
<div style="padding-top: 80px; background-color: #272a2e"></div>
<div
    style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-weight: bold">
    <?=$title4 ->title?>
</div>
<style>
    .card-img-top{
        width: 100%;
        height: 18.5vw;
        object-fit: cover;
    }
</style>

<!--Image -->
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4" style="margin-top: 50px">

            <div class="card">
                <div class="card-body">
                    <img src="webroot/img/<?=$artist->image?>" class="card-img-top" alt="SamSmith">
                    <h5 class="card-title" align="center" style="margin-top:10px">Artist: <?= $artist->name?></h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="margin-top: 50px">
            <div class="card">
                <h5 class="card-header"> <?php echo $title1->title ?></h5>
                <div class="card-body">
                    <p class="card-text"><?php echo $title1->text?></p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px">
                <h5 class="card-header"><?php echo $title2->title ?></h5>
                <div class="card-body">
                    <p class="card-text"><?php echo $title2->text?></p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px">
                <h5 class="card-header"><?php echo $title3->title?></h5>
                <div class="card-body">
                    <p class="card-text"><?php echo $title3->text?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<br>
<?= $this->element('footer');
?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
