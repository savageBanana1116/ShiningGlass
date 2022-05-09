<?= $this->Html->script('vendor/jquery/jquery.min.js'); ?>
<?= $this->Html->script('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>


<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/team18-app_fit3047/ShiningGlass/index.php">Shining Glass</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/team18-app_fit3047/ShiningGlass/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/team18-app_fit3047/ShiningGlass/Gallery">Gallery</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/team18-app_fit3047/ShiningGlass/Blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="/team18-app_fit3047/ShiningGlass/AdminPortal">Admin
                        Portal</a></li>
                <li class="nav-item"><a class="nav-link" href="/team18-app_fit3047/ShiningGlass/Users/login">Login</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal"
                                        data-target="#orangeModalSubscription" role="button">
                        SIGN IN
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center" style="background-color: #333333">
                <h4 class="modal-title text-white w-100 font-weight-bold py-2">ADMIN LOGIN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <form method="post" action="Users/login">
                    <!-- Email input -->
                    <div class="form-outline mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" id="email" class="form-control form-control-md"
                               placeholder="Enter a valid email address"/>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label">Password</label>
                        <label for="form3Example3"></label><input type="password" id="password"
                                                                  class="form-control form-control-md"
                                                                  placeholder="Enter a valid password"/>
                    </div>
            </div>
            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-success" onclick="location.href = 'Users/login';">Login</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>


<!--Nav code for cPanel-->


<!--<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="/index.php">Shining Glass</a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"-->
<!--                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            Menu-->
<!--            <i class="fas fa-bars ms-1"></i>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">-->
<!--                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="/Gallery">Gallery</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="/Blog">Blog</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="/AdminPortal">Admin Portal</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

