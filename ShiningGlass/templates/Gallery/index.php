<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Gallery</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->

    <?= $this->Html->css('styles.css') ?>
</head>
<body id="page-top">
<!-- Navigation-->
<div
    style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-family: 'Segoe Print'; font-weight: bold">
    The Artworks of Sam Smith
</div>
<!--<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            Menu-->
<!--            <i class="fas fa-bars ms-1"></i>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">-->
<!--                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<!-- Footer-->
<div class="container">
    <div class="row" style="margin-top: 60px">
        <?php $i = 1; ?>
        <?php foreach ($results as $artwork): ?>
        <div class="col">
            <div class="card card shadow mb-4">
                <?= $this->Html->image($artwork->image, ['class' => 'card-img-top']) ?>
                <div class="card-body">
                    <h5 class="card-title"><?= h($artwork->descriptions) ?></h5>
                    <p class="card-text"><?= h($artwork->descriptions) ?></p>
                    <!--                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Read-->
                    <!--                        More</a>-->
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal-<?php echo $i; // Displaying the increment ?>">
                        View More
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal-<?php echo $i; // Displaying the increment ?>" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-xl modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLongTitle">View Individual Artwork</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                                        <div class="col-lg-7"><?= $this->Html->image($artwork->image, ['style' => 'max-height: 900px; max-width: 400px']) ?>
                                            <div style="max-width: 900px; margin-top: 15px";>
                                                <?= $this->Html->image($artwork->image, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <?= $this->Html->image($artwork->image, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <?= $this->Html->image($artwork->image, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                                <?= $this->Html->image($artwork->image, ['style' => 'max-height: 150px; max-width: 150px']) ?>
                                        </div>
                                        </div>


                                        <div class="col-lg-5">
                                            <h1 class="font-weight-light"><?= h($artwork->name) ?></h1>
                                            <h4><?= h($artwork->descriptions) ?></h4>
                                            <hr>
                                            <br>
                                            <p style="text-align: left">Size: <?= h($artwork->size) ?><br>
                                            Price: <?= h($artwork->price) ?><br>
                                            Item Weight: <?= h($artwork->weight) ?></p>
                                            <hr>
                                            <br>
                                            <p>This is a template that is great for small businesses. It doesn't have
                                                too much fancy flare to it, but it makes a great use of the standard
                                                Bootstrap core components. Feel free to use this template for any
                                                project you want!</p>
                                            <hr>
                                            <br>

                                            <a class="btn btn-primary text-center" href="#!">Coming Soon</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
    </div>
<br>
<hr>

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

