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
            <!-- HUMAN FORM SECTION -->
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
                                            <option  value="0">Number of Dogs</option>
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
            <!-- HUMAN FORM SECTION END-->

            <!-- DOG FORM SECTION-->
            <div class="row">
                <div class="contact-page-inner">

                    <div class="col-md-12 contact-right-form">
                        <div class="contact-page-title">
                            <h4>Enter your dogs information below</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 none" dog="1">
                                <h4>First dog</h4>
                            </div>
                            <div class="col-sm-4 none" dog="2">
                                <h4>Second dog</h4>
                            </div>
                            <div class="col-sm-4 none" dog="3">
                                <h4>Third dog</h4>
                            </div>
                        </div>
                        <hr>
                        <form method="post" action="">
                            <div id="dog" class="row">
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label>Name First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label>Name Second</label>
                                        <input type="text"  class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group ">
                                        <label>Name Third</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label>Age First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label>Age Second</label>
                                        <input type="text"  class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group ">
                                        <label>Age Third</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label>Breed First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label>Breed Second</label>
                                        <input type="text"  class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group ">
                                        <label>Breed Third</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label class="headingDog">Vaccinated First</label><br>
                                        <label for="vacYes1">YES</label>
                                        <input type="radio" id="vacYes1" name="vac1"><br>
                                        <label for="vacNo1">NO</label>
                                        <input type="radio" id="vacNo1" name="vac1"><br>
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label class="headingDog">Vaccinated Second</label><br>
                                        <label for="vacYes2">YES</label>
                                        <input type="radio" id="vacYes2" name="vac2"><br>
                                        <label for="vacNo2">NO</label>
                                        <input type="radio" id="vacNo2" name="vac2"><br>
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group">
                                        <label class="headingDog">Vaccinated Third</label><br>
                                        <label for="vacYes3">YES</label>
                                        <input type="radio" id="vacYes3" name="vac3"><br>
                                        <label for="vacNo3">NO</label>
                                        <input type="radio" id="vacNo3" name="vac3"><br>
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label class="headingDog">Trained First</label><br>
                                        <label for="t11">Not agressive</label>
                                        <input type="radio" id="t11" name="trained1"><br>
                                        <label for="t12">Little agressive</label>
                                        <input type="radio" id="t12" name="trained1"><br>
                                        <label for="t13">Agressive</label>
                                        <input type="radio" id="t13" name="trained1">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label class="headingDog">Trained Second</label><br>
                                        <label for="t21">Not agressive</label>
                                        <input type="radio" id="t21" name="trained2"><br>
                                        <label for="t22">Little agressive</label>
                                        <input type="radio" id="t22" name="trained2"><br>
                                        <label for="t23">Agressive</label>
                                        <input type="radio" id="t23" name="trained2">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group ">
                                        <label class="headingDog">Trained Third</label><br>
                                        <label for="t31">Not agressive</label>
                                        <input type="radio" id="t31" name="trained3"><br>
                                        <label for="t32">Little agressive</label>
                                        <input type="radio" id="t32" name="trained3"><br>
                                        <label for="t33">Agressive</label>
                                        <input type="radio" id="t33" name="trained3">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label class="headingDog">Agression First</label><br>
                                        <label for="ag11">Not agressive</label>
                                        <input type="radio" id="ag11" name="agression1"><br>
                                        <label for="ag12">Little agressive</label>
                                        <input type="radio" id="ag12" name="agression1"><br>
                                        <label for="ag13">Agressive</label>
                                        <input type="radio" id="ag13" name="agression1">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label class="headingDog">Agression Second</label><br>
                                        <label for="ag21">Not agressive</label>
                                        <input type="radio" id="ag21" name="agression2"><br>
                                        <label for="ag22">Little agressive</label>
                                        <input type="radio" id="ag22" name="agression2"><br>
                                        <label for="ag23">Agressive</label>
                                        <input type="radio" id="ag23" name="agression2">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group ">
                                        <label class="headingDog">Agression Third</label><br>
                                        <label for="ag31">Not agressive</label>
                                        <input type="radio" id="ag31" name="agression3"><br>
                                        <label for="ag32">Little agressive</label>
                                        <input type="radio" id="ag32" name="agression3"><br>
                                        <label for="ag33">Agressive</label>
                                        <input type="radio" id="ag33" name="agression3">
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="1">
                                    <div class="form-group ">
                                        <label class="headingDog">Other First</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="2">
                                    <div class="form-group ">
                                        <label class="headingDog">Other Second</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 none" dog="3">
                                    <div class="form-group ">
                                        <label class="headingDog">Other Third</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- DOG FORM SECTION END-->
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



    </footer>
<!--Footer Bottom-->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="text text-left">Copyrights &copy; <a href="#">ripplethemes</a>. All Rights Reserved</div>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul class="social-links text-right">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <video></video>
            </div>
        </div>
    </div>
</div>

<!-- scroll top -->
<a class="scroll-top" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
<!-- srolltop end -->


<!-- js library start -->
<script  src="js/jquery-3.2.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/owl.carousel.min.js"></script>
<script  src=js/jquery.mixitup.min.js></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/waypoints.min.js"></script>
<script  src="js/jquery.counterup.min.js"></script>
<script  src=js/wow.js></script>
<script  src="js/script.js"></script>
<script src="js/scroll.js"></script>

<script>
$(document).ready(function () {
    var valueSelect = $('select');
    var dog = $('#dog');
//Changes the amount of dog forms based on dropdown number
    valueSelect.on('change', function () {
        var dog0 = $('div[dog="0"]');
        var dog1 = $('div[dog="1"]');
        var dog2 = $('div[dog="2"]');
        var dog3 = $('div[dog="3"]');

        if(valueSelect.val() === '0'){
            dog.addClass('noneDog');
            dog1.addClass('none');
            dog2.addClass('none');
            dog3.addClass('none');
        }

        if(valueSelect.val() === '1'){
            dog.removeClass('noneDog');
            dog1.removeClass('none');
            dog2.addClass('none');
            dog3.addClass('none');

        }
        if(valueSelect.val() === '2'){
            dog.removeClass('noneDog');
            dog1.removeClass('none');
            dog2.removeClass('none');
            dog3.addClass('none');
        }
        if(valueSelect.val() === '3'){
            dog.removeClass('noneDog');
            dog1.removeClass('none');
            dog2.removeClass('none');
            dog3.removeClass('none');
        }

    });

}) ;
</script>

<!-- js library end -->


</body>

</html>

