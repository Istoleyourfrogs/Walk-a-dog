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
<form method="post" action="includes/booking.inc.php">
    <div class="contact-page page">
        <div class="container">
            <!-- HUMAN FORM SECTION -->
            <div class="row">
                <div class="contact-page-inner">

                    <div class="col-md-12 contact-right-form">
                        <div class="contact-page-title">
                            <h4>Enter you information and something something something</h4>
                        </div>
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
                                        <label for="typeWalk">Type of walk:</label>
                                        <select id="typeWalk" name="typeWalk" class="form-control">
                                            <option>Select the type of walk</option>
                                            <option>One time</option>
                                            <option>Daily</option>
                                            <option>Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            <div class="row">

                                <div class="col-md-2 none" walk="date">
                                    <div class="form-group">
                                        <label for="numberOfDogs">Date of walk:</label>
                                        <input type="date" name="date">
                                    </div>
                                </div>
                                <div class="col-md-2 none" walk="time">
                                    <div class="form-group">
                                        <label for="time">Time of walk:</label>
                                        <input type="time" name="time">
                                    </div>
                                </div>
                                <div class="col-md-8 none" walk="day">
                                    <div class="form-group">
                                        <label>Which day: </label><br>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Monday</label>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Tuesday</label>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Wednesday</label>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Thursday</label>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Friday</label>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Saturday</label>
                                        <input type="radio"  class="" placeholder="email">
                                        <label>Sunday</label>
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
                            <div id="dog" class="row">
                                <div class="col-md-4 none" dog="1">
                                    <h4>First dog</h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label>Name First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>

                                    <div class="form-group ">
                                        <label>Age First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>



                                    <div class="form-group ">
                                        <label>Breed First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>


                                    <div class="form-group ">
                                        <label class="headingDog">Vaccinated First</label><br>
                                        <label for="vacYes1">YES</label>
                                        <input type="radio" id="vacYes1" name="vac1"><br>
                                        <label for="vacNo1">NO</label>
                                        <input type="radio" id="vacNo1" name="vac1"><br>
                                    </div>



                                    <div class="form-group ">
                                        <label class="headingDog">Trained First</label><br>
                                        <label for="t11">Not agressive</label>
                                        <input type="radio" id="t11" name="trained1"><br>
                                        <label for="t12">Little agressive</label>
                                        <input type="radio" id="t12" name="trained1"><br>
                                        <label for="t13">Agressive</label>
                                        <input type="radio" id="t13" name="trained1">
                                    </div>

                                    <div class="form-group ">
                                        <label class="headingDog">Agression First</label><br>
                                        <label for="ag11">Not agressive</label>
                                        <input type="radio" id="ag11" name="agression1"><br>
                                        <label for="ag12">Little agressive</label>
                                        <input type="radio" id="ag12" name="agression1"><br>
                                        <label for="ag13">Agressive</label>
                                        <input type="radio" id="ag13" name="agression1">
                                    </div>


                                    <div class="form-group ">
                                        <label class="headingDog">Other First</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                    <hr>
                                </div>



                                <div class="col-md-4 none" dog="2">
                                    <h4>Second dog</h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label>Name First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>

                                    <div class="form-group ">
                                        <label>Age First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>



                                    <div class="form-group ">
                                        <label>Breed First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>


                                    <div class="form-group ">
                                        <label class="headingDog">Vaccinated First</label><br>
                                        <label for="vacYes1">YES</label>
                                        <input type="radio" id="vacYes1" name="vac1"><br>
                                        <label for="vacNo1">NO</label>
                                        <input type="radio" id="vacNo1" name="vac1"><br>
                                    </div>



                                    <div class="form-group ">
                                        <label class="headingDog">Trained First</label><br>
                                        <label for="t11">Not agressive</label>
                                        <input type="radio" id="t11" name="trained1"><br>
                                        <label for="t12">Little agressive</label>
                                        <input type="radio" id="t12" name="trained1"><br>
                                        <label for="t13">Agressive</label>
                                        <input type="radio" id="t13" name="trained1">
                                    </div>

                                    <div class="form-group ">
                                        <label class="headingDog">Agression First</label><br>
                                        <label for="ag11">Not agressive</label>
                                        <input type="radio" id="ag11" name="agression1"><br>
                                        <label for="ag12">Little agressive</label>
                                        <input type="radio" id="ag12" name="agression1"><br>
                                        <label for="ag13">Agressive</label>
                                        <input type="radio" id="ag13" name="agression1">
                                    </div>


                                    <div class="form-group ">
                                        <label class="headingDog">Other First</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                    <hr>
                                </div>

                                <div class="col-md-4 none" dog="3">
                                    <h4>Third dog</h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label>Name First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>

                                    <div class="form-group ">
                                        <label>Age First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>



                                    <div class="form-group ">
                                        <label>Breed First</label>
                                        <input type="text" class="form-control" placeholder="name first">
                                    </div>


                                    <div class="form-group ">
                                        <label class="headingDog">Vaccinated First</label><br>
                                        <label for="vacYes1">YES</label>
                                        <input type="radio" id="vacYes1" name="vac1"><br>
                                        <label for="vacNo1">NO</label>
                                        <input type="radio" id="vacNo1" name="vac1"><br>
                                    </div>



                                    <div class="form-group ">
                                        <label class="headingDog">Trained First</label><br>
                                        <label for="t11">Not agressive</label>
                                        <input type="radio" id="t11" name="trained1"><br>
                                        <label for="t12">Little agressive</label>
                                        <input type="radio" id="t12" name="trained1"><br>
                                        <label for="t13">Agressive</label>
                                        <input type="radio" id="t13" name="trained1">
                                    </div>

                                    <div class="form-group ">
                                        <label class="headingDog">Agression First</label><br>
                                        <label for="ag11">Not agressive</label>
                                        <input type="radio" id="ag11" name="agression1"><br>
                                        <label for="ag12">Little agressive</label>
                                        <input type="radio" id="ag12" name="agression1"><br>
                                        <label for="ag13">Agressive</label>
                                        <input type="radio" id="ag13" name="agression1">
                                    </div>


                                    <div class="form-group ">
                                        <label class="headingDog">Other First</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-group-justified">Register now!</button>
            </div>
        </div>
    </div>
</form>      <!-- DOG FORM SECTION END-->


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
    var valueSelect = $('#numberOfDogs');
    var valueSelect2 = $('#typeWalk');
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
    valueSelect2.on('change',function () {
        var date = $('div[walk="date"]');
        var time = $('div[walk="time"]');
        var day = $('div[walk="day"]');

        if(valueSelect2.val() === 'One time'){
            date.removeClass("none");
            time.removeClass("none");
            day.addClass("none");
            date.removeClass("none");
        }
        if(valueSelect2.val() === 'Daily'){
            date.removeClass("none");
            time.removeClass("none");
            day.addClass("none");
            date.addClass("none");
        }
        if(valueSelect2.val() === 'Weekly'){
            date.removeClass("none");
            time.removeClass("none");
            day.removeClass("none");
            date.addClass("none");
        }

})

}) ;
</script>

<!-- js library end -->


</body>

</html>

