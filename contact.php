<?php
require "includes/header.inc.php";
?>

    <div class="clearfix"></div>
    <!-- breadcrumb start -->
    <section class="bizface-breadcrumb" style="background: url(images/dogBoneBackground.jpg) no-repeat center;">
        <div class="bizface-breadcrumb-title">
            <h1>Booking</h1>
        </div>
    </section>
    <!-- breadcrumb end -->
    
    <!--contact-page-->
    <div class="contact-page page">
        <div class="container">
            <div class="row">
                <div class="contact-page-inner">

                    <div class="col-md-12 contact-right-form">
                        <div class="contact-page-title">
                            <h4>Enter you information and something something something</h4>
                        </div>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        <input type="text"  class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number:</label>
                                        <input type="text"  class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="numberOfDogs">Number of Dogs:</label>
                                        <select id="numberOfDogs" class="form-control" name="numberOfDogs">
                                            <?php
                                                for($i=1; $i<=3; $i++){
                                                    echo "<option id=\"{$i}dog\" value=\"$i\" name=\"numberOfDogs\">$i</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773233.339938879!2d-123.12537827003614!3d47.251094484829885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485e5ffe7c3b0f9%3A0x944278686c5ff3ba!2sWashington%2C+USA!5e0!3m2!1sen!2snp!4v1519881669271" height="450"  allowfullscreen></iframe>
        </div>
    </div>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-widget">
                        <h3>Bizface</h3>
                        <div class="widget-content">
                            <div class="text">Lorem ipsum dolor sit amet, consects adipiscing elit enean commodo ligula.</div>
                            <address>
                                <p><a href="#"><i class="fa fa-map-marker"></i></a> USA, America</p>
                                <p><a href="#"><i class="fa fa-phone"></i></a>+977-9746390089</p>
                                <p><a href="#"><i class="fa fa-envelope"></i></a> ripplethemes@gmail.com</p>
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <h3>Explore</h3>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-sm-12">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">projects</a></li>
                                <li><a href="#">contact</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sm-12">
                            <ul>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Trade</a></li>
                                <li><a href="#">Investment</a></li>
                                <li><a href="#">projects</a></li>
                                <li><a href="#">contact</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget subscribe-widget">
                        <h3>Newsletter</h3>
                        <div class="widget-content">
                            <div class="text">Lorem ipsum dolor sit amet, adipiscing </div>
                            <div class="newsletter-form">
                                <form>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">suscribe now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require "includes/footer.inc.php";
?>