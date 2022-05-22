<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shining Glass Admin Portal</title>

    <!-- Custom fonts for this template-->
    <!--    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.min.css') ?>
    <!--    <link href="css/sb-admin-2.min.css" rel="stylesheet">-->

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-dark bg-gradient-dark topbar mb-4 static-top shadow">
                <h1 class="text-white">Shining Glass Admin Portal</h1>

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow" >
                        <a href="users/logout" role="button" class="nav-link dropdown-toggle" onclick="return confirm('Are you sure you want to log out?');">Logout</a>
                    </li>
                </ul>


            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-right: 5%">
                    <h1 class="h3 mb-0 text-gray-800" style="margin-left: 15%">Admin Dashboard</h1>
                    <div class="card bg-gradient-dark text-white shadow" >
                        <div class="card-body "
                             onclick="location.href='index.php#';" style="cursor: pointer;">
                            <a class="text-white" href="index.php">Navigate back to main website</a>
                            <div class="text-white-50 small">Currently used to navigate back to the
                                client-side landing (home) page
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row"></div>

                <!-- Content Row -->
                <div class="row"></div>

                <!-- Content Row -->
                <div class="row" style="margin-top: 50px">

                    <!-- Content Column -->
                    <div class="col-lg-6" >

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4" style="width: 50%; margin-left: 40%;">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"> Artworks and Collections Management Systems</h6>
                            </div>

                            <div class="card-body">
                                <div class="card bg-gradient-primary text-white shadow"
                                     onclick="location.href='categories#';" style="cursor: pointer;">
                                    <div class="card-body">
                                        <a class="text-white" href="categories#">Collection Management System</a>
                                        <div class="text-white-50 small">Can be used to add, view and remove collections
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="card bg-gradient-primary text-white shadow"
                                     onclick="location.href='artworks#';" style="cursor: pointer;">
                                    <div class="card-body">
                                        <a class="text-white" href="artworks#">Artwork Management System</a>
                                        <div class="text-white-50 small">Can be used to add, view and remove
                                            artworks
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <!-- Approach -->
                        <div class="card shadow mb-4" style="width: 50%; margin-left:10%">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Website Content Management System</h6>
                            </div>
                            <div class="card-body">
                                <div class="card bg-gradient-primary text-white shadow"
                                     onclick="location.href='abouts#';" style="cursor: pointer;">
                                    <div class="card-body">
                                        <a class="text-white" href="abouts#">About Page Content Management System</a>
                                        <div class="text-white-50 small">Use this to edit the content shown on the About Page
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card bg-gradient-primary text-white shadow"
                                     onclick="location.href='enquiries#';" style="cursor: pointer;">
                                    <div class="card-body">
                                        <a class="text-white" href="enquiries#">Artwork Enquiries From Customers</a>
                                        <div class="text-white-50 small">Use this to view all active customer enquiries
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>f
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-light">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Shining Glass 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('vendor/jquery/jquery.min.js'); ?>
<?= $this->Html->script('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>
<!--    <script src="vendor/jquery/jquery.min.js"></script>-->
<!--    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

<!-- Core plugin JavaScript-->
<?= $this->Html->script('vendor/jquery-easing/jquery.easing.min.js'); ?>
<!--    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for all pages-->
<?= $this->Html->script('sb-admin-2.min.js'); ?>
<!--    <script src="js/sb-admin-2.min.js"></script>-->

<!-- Page level plugins -->
<?= $this->Html->script('vendor/chart.js/Chart.min.js'); ?>
<!--    <script src="vendor/chart.js/Chart.min.js"></script>-->

<!-- Page level custom scripts -->
<?= $this->Html->script('demo/chart-area-demo.js'); ?>
<!--    <script src="js/demo/chart-area-demo.js"></script>-->
<?= $this->Html->script('demo/chart-pie-demo.js'); ?>
<!--    <script src="js/demo/chart-pie-demo.js"></script>-->

</body>

</html>
