<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About</title>
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


<!-- Title of About Page-->
<div style="padding-top: 80px; background-color: #272a2e" ></div>
<div style="padding-top: 30px; background-color: #d5d8db ;font-size: 20px ;text-align: center ; padding-bottom: 30px ; font-family: 'Segoe Print'; font-weight: bold"> About Page
</div>


<!--Image -->
    <div class="container" >
        <div class ="row">
        <div class="col-12 col-md-6 col-lg-4" style="margin-top: 50px" >

             <div class="card" >
                 <div class="card-body">
                     <img src="assets/img/SamSmith.png" class="card-img-top" alt="SamSmith">
                    <h5 class="card-title">Artist: Sam Smith</h5>
                </div>
             </div>
         </div>

        <div class="col-12 col-md-6 col-lg-6" style="margin-top: 50px">
            <div class="card" >
                <h5 class="card-header">Who is Sam Smith?</h5>
                    <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
            </div>
            <div class="card" style="margin-top: 20px" >
                <h5 class="card-header">What is Shining Glass?</h5>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum rhoncus est pellentesque elit ullamcorper. Risus pretium quam vulputate dignissim. Ultrices eros in cursus turpis massa tincidunt. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px" >
                <h5 class="card-header">Achievements/Recommendations</h5>
                <div class="card-body">
                    <p class="card-text">Egestas tellus rutrum tellus pellentesque eu tincidunt. Sit amet aliquam id diam maecenas ultricies mi.</p>
                </div>
            </div>
        </div>
       </div>
    </div>





<div class="container">
    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
