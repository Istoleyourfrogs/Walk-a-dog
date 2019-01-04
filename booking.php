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

                    <div class="col-sm-12 contact-right-form">
                        <div class="contact-page-title">
                            <h4>Enter you information and something something something</h4>
                        </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        <input type="text" class="form-control" placeholder="First Name" name="firstName">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        <input type="text"  class="form-control" placeholder="Last Name" name="lastName">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" placeholder="email" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Phone Number:</label>
                                        <input type="text"  class="form-control" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="typeWalk">Type of walk:</label>
                                        <select id="typeWalk" name="typeWalk" class="form-control">
                                            <option value="">Select the type of walk</option>
                                            <option value="oneTime">One time</option>
                                            <option value="daily">Daily</option>
                                            <option value="weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-2 none" walk="date">
                                    <div class="form-group">
                                        <label for="date">Date of walk:</label>
                                        <input id="date" class="form-control" type="date" name="date">
                                    </div>
                                </div>
                                <div class="col-sm-2 none" walk="time">
                                    <div class="form-group">
                                        <label for="time">Time of walk:</label>
                                        <input id="time" class="form-control" type="time" name="time">
                                    </div>
                                </div>
                                <div class="col-sm-10 none" walk="day">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label>Which day: </label><br>
                                        <label for="monday" class="btn btn-primary">Monday
                                        <input id="monday" type="radio" name="day" value="monday" class="">
                                        </label>
                                        <label for="tuesday" class="btn btn-primary">Tuesday
                                        <input id="tuesday" type="radio"   name="day" value="tuesday" class="">
                                        </label>
                                        <label for="wednesday" class="btn btn-primary">Wednesday
                                        <input id="wednesday" type="radio" name="day" value="wednesday" class="">
                                        </label>
                                        <label for="thursday" class="btn btn-primary">Thursday
                                        <input id="thursday" type="radio"   name="day" value="thursday">
                                        </label>
                                        <label for="friday" class="btn btn-primary">Friday
                                        <input id="friday" type="radio"   name="day" value="friday">
                                        </label>
                                        <label for="saturday" class="btn btn-primary">Saturday
                                        <input id="saturday" type="radio"   name="day" value="saturday">
                                        </label>
                                        <label for="sunday" class="btn btn-primary">Sunday
                                        <input id="sunday" type="radio"  name="day" value="sunday">
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                            <div class="col-sm-4">
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

                            <div class="col-sm-8 pt-5" align="center">
                                <img class="mr-5" src="images/cute-dog.svg" alt="dog" width="100">
                                <img class="mr-5" src="images/cute-dog.svg" alt="dog" width="100">
                                <img class="mr-5" src="images/cute-dog.svg" alt="dog" width="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HUMAN FORM SECTION END-->



            <!-- DOG FORM SECTION-->
            <div class="row">
                <div class="contact-page-inner">

                    <div class="col-sm-12 contact-right-form">
                        <div class="contact-page-title">
                            <h4>Enter your dogs information below</h4>
                        </div>
                            <div id="dog" class="row">
                                <div class="col-sm-4 none" dog="1">
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
                                    <div class="btn-group-vertical mb-4 form-group" data-toggle="buttons">
                                        <label class="headingDog">Vaccinated First</label><br>
                                        <label class="btn btn-primary" for="vacYes1">YES
                                        <input type="radio" id="vacYes1" name="vac1"><br>
                                        </label>
                                        <label class="btn btn-primary" for="vacNo1">NO
                                        <input type="radio" id="vacNo1" name="vac1"><br>
                                        </label>
                                    </div>
                                    <div class="btn-group-vertical mb-4 form-group" data-toggle="buttons">
                                        <label class="headingDog">Trained First</label><br>
                                        <label class="btn btn-primary" for="t11">Not agressive
                                        <input type="radio" id="t11" name="trained1"><br>
                                        </label>
                                        <label class="btn btn-primary" for="t12">Little agressive
                                        <input type="radio" id="t12" name="trained1"><br>
                                        </label>
                                        <label class="btn btn-primary" for="t13">Agressive
                                        <input type="radio" id="t13" name="trained1">
                                        </label>
                                    </div>
                                    <div class="btn-group-vertical mb-4 form-group" data-toggle="buttons">
                                        <label class="headingDog">Agression First</label><br>
                                        <label class="btn btn-primary" for="ag11">Not agressive
                                        <input type="radio" id="ag11" name="agression1"><br>
                                        </label>
                                        <label class="btn btn-primary" for="ag12">Little agressive
                                        <input type="radio" id="ag12" name="agression1"><br>
                                        </label>
                                        <label class="btn btn-primary" for="ag13">Agressive
                                        <input type="radio" id="ag13" name="agression1">
                                        </label>
                                    </div>
                                    <div class="form-group ">
                                        <label class="headingDog">Other First</label>
                                        <textarea placeholder="Enter text here" rows="5"></textarea>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-sm-4 none" dog="2">
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

                                <div class="col-sm-4 none" dog="3">
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

        if(valueSelect2.val() === ''){
            date.addClass("none");
            time.addClass("none");
            day.addClass("none");
            date.addClass("none");
        }
        if(valueSelect2.val() === 'oneTime'){
            date.removeClass("none");
            time.removeClass("none");
            day.addClass("none");
            date.removeClass("none");
        }
        if(valueSelect2.val() === 'daily'){
            date.removeClass("none");
            time.removeClass("none");
            day.addClass("none");
            date.addClass("none");
        }
        if(valueSelect2.val() === 'weekly'){
            date.removeClass("none");
            time.removeClass("none");
            day.removeClass("none");
            date.addClass("none");

        }

    });



}) ;
</script>

<!-- js library end -->


</body>

</html>

