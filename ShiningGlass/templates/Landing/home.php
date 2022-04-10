<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shining Glass</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <?= $this->Html->css('styles.css') ?>
</head>
<body id="page-top">
<!-- Navigation-->
<?= $this->element('nav')?>
<div style="padding-top: 80px; background-color: #272a2e" ></div>
<div style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-family: 'Segoe Print'; font-weight: bold"> One sentence that catches the audience</div>


<!-- slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/img1.jpg" alt="First slide">
            <div class="carousel-caption">
                <h1>Artwork Title</h1>
                <p>Artwork Description</p>
                <div class="slider-btn">
                    <button class="btn btn-1"onclick="window.location.href='gallery'">View more collection</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/img2.jpg" alt="Second slide">
            <div class="carousel-caption">
                <h1>Artwork Title</h1>
                <p>Artwork Description</p>
                <div class="slider-btn">
                    <button class="btn btn-1" onclick="window.location.href='gallery'">View more collection</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/img3.jpg" alt="Third slide">
            <div class="carousel-caption">
                <h1 >Artwork Title</h1>
                <p>Artwork Description</p>
                <div class="slider-btn">
                    <button class="btn btn-1" onclick="window.location.href='gallery'">View more collection</button>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
 <?= $this->element('footer')?>
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
