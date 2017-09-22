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
            <form id="form" action="mailingList.php" method="post">
                <h3>	Contact Form	</h3>
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
                        <label for="email">Phone Number</label><small>&nbsp;&nbsp;we recommand potentials to leave their phone numbers for easier contact.</small>
                        <input class="form-control" type="text" name="phone" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <label for="comment">Comment</label>
                        <textarea name="comment" class="form-control" rows="5" placeholder="If you just want to get update about rush events, leave this section empty."></textarea>
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
                    <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">Different Image</a>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <label class="require-asterisk" for="captcha_code">I'm not a robot</label>
                    <input type="text" class="form-control" name="captcha_code" size="10" maxlength="8" required/>
                    <input class="btn" style="border-radius:10px; margin-top:5px" type="submit">
                  </div>
                </div>
            </form>
        </div>
        <div class="col-lg-1">

        </div>
        <div class="well col-lg-5  text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>
                        Visit Our National Fraternity Page
                        <br><a href="http://www.triangle.org">www.triangle.org</a>
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
                        <i class="fa fa-search" aria-hidden="true"></i> Brother Search
                        <br><a href="directory.php">Active Brother Directory</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p>
                        Like Us on  &nbsp;<a href="https://www.facebook.com/Triangle-Fraternity-Wisconsin-Chapter-382509701674" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">FACEBOOK</span></a>
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
                                <br><em>Steven Tang</em></p>
                            <p>Phone: (617) 335-5386
                                <br><a href="mailto:rtang37@wisc.edu">rtang37@wisc.edu</a></p>
                        </div>
                        <div class="col-lg-4">
                            <p>President
                                <br><em>Evan Schertz</em></p>
                            <p>Phone: 715-370-3949
                                <br><a href="mailto:eshertz@wisc.edu">eschertz@wisc.edu</a></p>
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

<!-- script -->
<?php printScripts(); ?>

</html>
