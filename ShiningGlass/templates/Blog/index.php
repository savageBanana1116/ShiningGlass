<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Blog</title>
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
<?= $this->element('nav') ?>
<div style="padding-top: 80px; background-color: #272a2e"></div>
<div
    style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-weight: bold">
    Stay up to date on Sam Smith and Shining Glass News
</div>

<div class="container">
    <div class="row" style="margin-top: 60px">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card shadow mb-4">
                <img class="img-fluid rounded"
                     src="img/artwork-img/Water Dance sculpture.jpg" width="900px" height="400px"
                     alt="..."/>
                <div class="card-body">
                    <h5 class="card-title">Newest Artwork Released</h5>
                    <p class="card-text">After a small hiatus Sam is back with his latest amazing art piece!</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Read
                        More</a>
                </div>
            </div>
        </div>
<!--        <div class="col-12 col-md-6 col-lg-4">-->
<!--            <div class="card card shadow mb-4">-->
<!--                <img class="img-fluid rounded"-->
<!--                     src="https://dummyimage.com/900x500/dee2e6/6c757d.jpg"-->
<!--                     alt="..."/>-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Blog Post 2</h5>-->
<!--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor-->
<!--                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation-->
<!--                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                    <a href="#" class="btn btn-primary">Read More</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 col-md-6 col-lg-4">-->
<!--            <div class="card card shadow mb-4">-->
<!--                <img class="img-fluid rounded"-->
<!--                     src="https://dummyimage.com/900x500/dee2e6/6c757d.jpg"-->
<!--                     alt="..."/>-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Blog Post 3</h5>-->
<!--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor-->
<!--                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation-->
<!--                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                    <a href="#" class="btn btn-primary">Read More</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Newest Artwork Released</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                This piece was inspired by Sam's time living along the beaches of Noosa. Find out more about this piece on the Gallery Page
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
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

