<!DOCTYPE html>
<html lang="en">

<?php include("includes.php");
      printHead('<link href="css/index.css" rel="stylesheet">');?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <?php include("header.php");
          printNav(0);?>


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 text-background-intro">
                      <h1 class="brand-heading">TRIANGLE﻿ FRATERNITY</h1>
                      <p class="intro-text">A FRATERNITY OF ENGINEERS, ARCHITECTS, AND SCIENTISTS</p>
                      <a href="#about" class="btn btn-circle page-scroll">
                          <i class="fa fa-angle-double-down animated"></i>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Triangle</h2>
                <p>Triangle is a social fraternity built upon the ideals of brotherhood and friendships.</p>
                <hr id="rush-hr">
                <p>Triangle brothers are engineers, architects, and scientists who hold themselves to high moral standards
                and strive to be the best men they can be in order build a better world for tomorrow.</p>
                <a href="about.php" class="btn btn-default btn-lg">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="rush" class="content-section text-center">
        <div class="rush-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Rush Triangle</h2>
                    <p>Triangle Fraternity is now accepting applications for membership for the Fall 2016 academic term. If you are looking to get involved on campus, serve the community, and develop effective leadership and professional networking experience, this is your opportunity to do so.</p>
                    <a href="#" class="btn btn-default btn-lg">Visit Rush Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <div class="row">
                  <div class="col-lg-4 col-lg-offset-2">
                    <p>Recruitment<br><em>Stephen McManus</em></p>
                    <p>Phone: 843-709-4585<br><a href="mailto:smcmanus2@wisc.edu">smcmanus2@wisc.edu</a></p>
                  </div>
                  <div class="col-lg-4">
                    <p>President<br><em>Kevin Clark</em></p>
                    <p>Phone: 414-793-4032<br><a href="mailto:kwclark@wisc.edu">kwclark@wisc.edu</a></p>
                  </div>
                </div>

                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">FACEBOOK</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-child fa-fw"></i> <span class="network-name">WIN Network</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map">
      <iframe width="100%" height="300" frameborder="0" style="border:0"
     src="https://www.google.com/maps/embed/v1/place?q=148%20N%20Breese%20Terrace%2C%20Madison%2C%20WI%2C%20United%20States&key=AIzaSyD9BIQXNjZN61o87Y-GLdTcDgU4DiT0Y68 " allowfullscreen></iframe>
    </div>

    <!-- Footer -->
    <?php printFooter(); ?>

    <!-- jQuery -->
    <script src="res/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="res/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/main.js"></script>

</body>

</html>
