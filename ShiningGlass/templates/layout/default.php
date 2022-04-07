<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css('styles.css') ?>
</head>
<body id="page-top">
<!-- Navigation-->
<?= $this->element('nav')?>
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
<!-- Masthead-->
<header class="masthead">
    <div class="container">
<!--        <div class="masthead-subheading">Welcome To Our Studio!</div>-->
<!--        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>-->
<!--        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>-->
    </div>
</header>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Shining Glass</div>
                    <div class="col-lg-4 text-lg-middle">
                        <a class="link-dark text-decoration-none me-3" href="#!">Email: Lisa@shiningglass.com.au</a>
                        <a class="link-dark text-decoration-none" href="#!">Mobile: 04451267432</a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
