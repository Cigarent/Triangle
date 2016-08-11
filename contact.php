<!DOCTYPE html>

<html lang="en">

<?php include 'includes.php';
      printHead();?>

<body>

    <!-- Navigation -->
    <?php include 'header.php';
          printNav(3);?>

    <!-- Heading -->
    <div class="intro about-intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 text-background-intro">
                        <h1 class="brand-heading" style="margin-bottom:0">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-page" class="container history-intro">
        <div class="well col-lg-6">
            <!-- subscribe form -->
            <form id="form" action="#" method="post">
                <h3>
						Contact Form
					</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label class="require-asterisk" for="first_name">First Name</label>
                        <input class="form-control" type="text" name="first_name" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label class="require-asterisk" for="last_name">Last Name</label>
                        <input class="form-control" type="text" name="last_name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <label class="require-asterisk" for="email">Email</label>
                        <input class="form-control" type="text" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>
                </div>
                <hr>
                <input class="btn" style="border-radius:10px;" type="submit">

            </form>
        </div>
        <div class="col-lg-1">

        </div>
        <div class="well col-lg-5  text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>
                        Visit Our National Fraternity Page
                        <br><a href="#">www.triangle.org</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i> Newsletter
                        <br><a href="echoes.php">Echoes From 148</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>
                        For Recruitment Info
                        <br><a href="#">recruitment chair email@email</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>
                        Like Us on  &nbsp;<a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">FACEBOOK</span></a>
                    </p>
                </div>
            </div>
        </div>


        <!-- Contact Section -->
        <section id="contact" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Contact Us</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>Recruitment
                                <br><em>Stephen McManus</em></p>
                            <p>Phone: 843-709-4585
                                <br><a href="mailto:smcmanus2@wisc.edu">smcmanus2@wisc.edu</a></p>
                        </div>
                        <div class="col-lg-4">
                            <p>President
                                <br><em>Kevin Clark</em></p>
                            <p>Phone: 414-793-4032
                                <br><a href="mailto:kwclark@wisc.edu">kwclark@wisc.edu</a></p>
                        </div>
                        <div class="col-lg-4">
                            <p>Mailing Address</p>
                            <a href="https://goo.gl/maps/D1GhvEenRkQ2" target="_blank"><img src="images/pin.png" />148 N. Breese Terrace
                                <br> Madison WI, 53726</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php printFooter(); ?>

</body>

</html>
