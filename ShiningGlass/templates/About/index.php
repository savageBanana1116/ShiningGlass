<!DOCTYPE html>
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
    The Company and its Owner
</div>


<!--Image -->
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4" style="margin-top: 50px">

            <div class="card">
                <div class="card-body">
                    <img src="assets/img/SamSmith.png" class="card-img-top" alt="SamSmith">
                    <h5 class="card-title" align="center" style="margin-top:10px">Artist: Sam Smith</h5>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="margin-top: 50px">
            <div class="card">
                <h5 class="card-header">Who is Sam Smith?</h5>
                <div class="card-body">
                    <p class="card-text">Sam is a 41 year old artist from Melbourne who specialises in Glass Sculptures. Sam loves to draw upon his past experiences and bring them to life through his artwork.</p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px">
                <h5 class="card-header">What is Shining Glass?</h5>
                <div class="card-body">
                    <p class="card-text">Established in 2018, Sam Smith wanted to share his artworks and vision with the world. Starting from selling out of his own garage, he has built Shining Glass from the ground up, owning his own glass artwork store in Melbourne CBD.</p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px">
                <h5 class="card-header">Achievements/Recommendations</h5>
                <div class="card-body">
                    <p class="card-text">- Freemantle Glass-Making Award 2020<br>
                    - Clemenger Contemporary Art Award 2021</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<br>
<?= $this->element('footer') ?>
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
