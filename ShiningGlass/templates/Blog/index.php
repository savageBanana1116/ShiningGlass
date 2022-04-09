<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog</title>
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
<div style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-family: 'Segoe Print'; font-weight: bold"> Blog</div>
<div class="container" >
    <div class="row" style="margin-top: 120px">
        <div class="col-12 col-md-6 col-lg-4" >
            <div class="card">
                <img src="assets/img/img1.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" >
                <img src="assets/img/img2.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="assets/img/img3.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 120px">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="assets/img/img1.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" >
                <img src="assets/img/img2.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="assets/img/img3.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row"style="margin-top: 120px">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="assets/img/img1.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" >
                <img src="assets/img/img2.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="assets/img/img3.jpg" class="card-img-top" alt="first image">
                <div class="card-body">
                    <h5 class="card-title">Event Name</h5>
                    <p class="card-text">Some quick example text to build on the Event Name and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <?= $this->element('footer')?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Event Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
