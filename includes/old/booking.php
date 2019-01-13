<?php
require "includes/header.inc.php";
incl
?>

<div class="clearfix"></div>
<!-- breadcrumb start -->
<section class="bizface-breadcrumb" style="background: url(../../images/dogBoneBackground.jpg) no-repeat center;">
    <div class="bizface-breadcrumb-title">
        <h1>Booking</h1>
    </div>
</section>
<!-- breadcrumb end -->

<!--contact-page-->
<form method="post" action="../booking.inc.php">
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
                                    <label for="typeOfWalk">Type of walk:</label>
                                    <select id="typeOfWalk" name="typeOfWalk" class="form-control">
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
                                    <?php

                                    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
                                    foreach ($daysOfWeek as $key => $value){
                                        echo "
                                        <label for=\"$value\" class=\"btn btn-primary\">$value
                                        <input id=\"$value\" type=\"radio\" name=\"day\" value=\"$value\" class=\"\">
                                        </label>
                                        ";
                                    }

                                    ?>
                                    <!--
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
                                    -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="numberOfDogs">Number of Dogs:</label>
                                    <select id="numberOfDogs" class="form-control" name="numberOfDogs">
                                        <option  value="">Number of Dogs</option>
                                        <?php
                                        $numbers = ["","One","Two","Three"];
                                        for($i=1; $i<=3; $i++){
                                            echo "<option id=\"{$i}dog\" value=\"$i\" name=\"numberOfDogs\">$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-8 pt-5" align="center">
                                <img class="mr-5" src="../../images/cute-dog.svg" alt="dog1" width="100" >
                                <img class="mr-5" src="../../images/cute-dog2.svg" alt="dog2" width="100" >
                                <img class="mr-5" src="../../images/cute-dog3.svg" alt="dog3" width="100" >
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
                        <!-- FIRST DOG -->
                        <div id="dog" class="row">
                            <div class="col-sm-4" dog="1">
                                <h4>First dog</h4>
                                <hr>
                                <div class="form-group ">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="name first" name="dogNameOne">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                    <input type="text" class="form-check-inline" placeholder="years" name="dogYearOne">
                                        </div>
                                        <div class="col-sm-6">
                                    <input type="text" class="form-check-inline" placeholder="months" name="dogMonthOne">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label>Breed</label>
                                    <!--<input type="text" class="form-control" placeholder="name first">-->
                                    <select name="dogBreedOne">
                                        <option value="">Select the dog breed</option>
                                        <?php
                                        $sql = "SELECT breed FROM breeds;";
                                        $query = mysqli_query($connect,$sql);
                                        while($result = mysqli_fetch_assoc($query)){
                                            echo "<option value=\"{$result['breed']}\">{$result['breed']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <label class="container1">Vaccinated
                                    <input type="checkbox" id="vacinated1" class="custom-checkbox" name="dogVaccinatedOne" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="container1">Trained
                                    <input type="checkbox" id="trained1" class="custom-checkbox" name="dogTrainedOne" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <label class="container1">Aggressive
                                    <input type="checkbox" id="aggressive1" class="custom-checkbox" name="dogAggressionOne" value="1">
                                    <span class="checkmark"></span>
                                </label>

                                <div class="form-group ">
                                    <label class="headingDog">Other</label>
                                    <textarea placeholder="Enter text here" rows="5" name="dogOtherOne"></textarea>
                                </div>
                                <hr>
                            </div>
                            <!-- SECOND DOG -->
                            <div id="dog" class="row">
                                <div class="col-sm-4" dog="2">
                                    <h4>First dog</h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="name first" name="dogNameTwo">
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-check-inline" placeholder="years" name="dogYearTwo">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-check-inline" placeholder="months" name="dogMonthTwo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>Breed</label>
                                        <!--<input type="text" class="form-control" placeholder="name first">-->
                                        <select name="dogBreedTwo">
                                            <option value="">Select the dog breed</option>
                                            <?php
                                            $sql = "SELECT breed FROM breeds;";
                                            $query = mysqli_query($connect,$sql);
                                            while($result = mysqli_fetch_assoc($query)){
                                                echo "<option value=\"{$result['breed']}\">{$result['breed']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <label class="container1">Vaccinated
                                        <input type="checkbox" id="vacinated1" class="custom-checkbox" name="dogVaccinatedTwo" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <br>
                                    <label class="container1">Trained
                                        <input type="checkbox" id="trained1" class="custom-checkbox" name="dogTrainedTwo" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <br>
                                    <label class="container1">Aggressive
                                        <input type="checkbox" id="aggressive1" class="custom-checkbox" name="dogAggressionTwo" value="1">
                                        <span class="checkmark"></span>
                                    </label>

                                    <div class="form-group ">
                                        <label class="headingDog">Other</label>
                                        <textarea placeholder="Enter text here" rows="5" name="dogOtherTwo"></textarea>
                                    </div>
                                    <hr>
                                </div>
                                <!-- THIRD DOG -->
                                <div id="dog" class="row">
                                    <div class="col-sm-4" dog="3">
                                        <h4>First dog</h4>
                                        <hr>
                                        <div class="form-group ">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="name first" name="dogNameThree">
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-check-inline" placeholder="years" name="dogYearThree">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-check-inline" placeholder="months" name="dogMonthThree">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label>Breed</label>
                                            <!--<input type="text" class="form-control" placeholder="name first">-->
                                            <select name="dogBreedThree">
                                                <option value="">Select the dog breed</option>
                                                <?php
                                                $sql = "SELECT breed FROM breeds;";
                                                $query = mysqli_query($connect,$sql);
                                                while($result = mysqli_fetch_assoc($query)){
                                                    echo "<option value=\"{$result['breed']}\">{$result['breed']}</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <label class="container1">Vaccinated
                                            <input type="checkbox" id="vacinated1" class="custom-checkbox" name="dogVaccinatedThree" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="container1">Trained
                                            <input type="checkbox" id="trained1" class="custom-checkbox" name="dogTrainedThree" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <label class="container1">Aggressive
                                            <input type="checkbox" id="aggressive1" class="custom-checkbox" name="dogAggressionThree" value="1">
                                            <span class="checkmark"></span>
                                        </label>

                                        <div class="form-group ">
                                            <label class="headingDog">Other</label>
                                            <textarea placeholder="Enter text here" rows="5" name="dogOtherThree"></textarea>
                                        </div>
                                        <hr>
                                    </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-group-justified">Register now!</button>
                </div>

            </div>
        </div>
    </div>
</form>      <!-- DOG FORM SECTION END-->

<!-- js library start -->
<script  src="../../js/jquery-3.2.1.min.js"></script>
<script  src="../../js/bootstrap.min.js"></script>
<script  src="../../js/owl.carousel.min.js"></script>
<script  src=../../js/jquery.mixitup.min.js></script>
<script  src="../../js/jquery.magnific-popup.min.js"></script>
<script  src="../../js/waypoints.min.js"></script>
<script  src="../../js/jquery.counterup.min.js"></script>
<script  src=../../js/wow.js></script>
<script  src="../../js/script.js"></script>
<script src="scroll.js"></script>
<script src="../../js/booking.js"></script>

<!-- js library end -->


</body>

</html>

