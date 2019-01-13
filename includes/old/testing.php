<?php
require "includes/header.inc.php";
?>
<form method="post" action="../booking.inc.php">
    <section class="booking section" id="booking">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center">
                    <h2>Booking</h2>
                    <p>
                        <?php
                        //error displaying for the booking form
                        if(isset($_GET['error'])){
                            $error = $_GET['error'];
                            if($error == 'empty')
                                echo "Please fill in all fields";
                            if($error == 'notValid')
                                echo "Oops you did not fill in the fields appropriately";
                            if($error == 'fatalError')
                                echo "Oops there was an error. Please try again!";
                            if($error == 'success')
                                echo "Thank you for registering. We have sent you a confirmation email.";
                        }
                        ?>
                    </p>
                    <span class="colorborder"></span>
                </div>
            </div>
            <div class="row">
                <div class="contact-page-inner">
                    <div class="col-sm-12 contact-right-form">
                        <div class="contact-page-title">
                            <h4>Enter you information down below! Every filed  with * is required</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>*First Name:</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="firstName" required maxlength="25">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>*Last Name:</label>
                                    <input type="text"  class="form-control" placeholder="Last Name" name="lastName" required maxlength="25">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>*Email:</label>
                                    <input type="email" class="form-control" placeholder="email" name="email" required maxlength="30">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>*Address:</label>
                                    <input type="text" class="form-control" placeholder="Address" required name="address" maxlength="50">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>*Phone Number:</label>
                                    <input type="text"  class="form-control" placeholder="Phone Number" required name="phone" maxlength="20">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="typeOfWalk">*Type of walk:</label>
                                    <select id="typeOfWalk" name="typeOfWalk" required>
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
                                    <label for="date">*Date of walk:</label>
                                    <input id="date" class="form-control" type="date" name="date" min="<?php echo date("Y-m-d") ?>">
                                </div>
                            </div>
                            <div class="col-sm-2 none" walk="time">
                                <div class="form-group">
                                    <label for="time">*Time of walk:</label>
                                    <input id="time" class="form-control" type="time" name="time" min="09:00:00" max="16:00:00">
                                </div>
                            </div>
                            <div class="col-sm-10 none" walk="day">
                                <div class="btn-group" id="weekly_walk" data-toggle="buttons">
                                    <label>*Which day: </label>
                                    <br>
                                    <?php
                                    $daysOfWeek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
                                    foreach ($daysOfWeek as $key => $value){
                                        echo "
                                    <label for=\"$value\" class=\"btn btn-primary day_button\">$value
                                    <input id=\"$value\" type=\"radio\" name=\"day\" value=\"$value\" class=\"\">
                                    </label>
                                    ";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="numberOfDogs">*Number of Dogs:</label>
                                    <select id="numberOfDogs"  name="numberOfDogs">
                                        <option  value="">Number of Dogs</option>
                                        <?php
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

                <!-- DOG FORM SECTION START -->
                <div class="row">
                    <div class="contact-page-inner">

                        <div class="col-sm-12 contact-right-form">
                            <div class="contact-page-title enter_dog_info">
                                <h4>Enter your dogs information below</h4>
                            </div>
                            <!-- FIRST DOG -->
                            <div id="dog" class="row">
                                <div class="col-sm-4" dog="1">
                                    <h4>First dog</h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label>*Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="dogNameOne">
                                    </div>
                                    <div class="form-group">
                                        <label>*Age</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-check-inline" placeholder="Years" name="dogYearOne">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-check-inline" placeholder="Months" name="dogMonthOne">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>*Breed</label>
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
                                        <textarea class="form-control textarea" placeholder="Enter text here" rows="5" name="dogOtherOne"></textarea>
                                    </div>
                                    <hr>
                                </div>
                                <!-- SECOND DOG -->
                                <div id="dog" class="row">
                                    <div class="col-sm-4" dog="2">
                                        <h4>Second dog</h4>
                                        <hr>
                                        <div class="form-group ">
                                            <label>*Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="dogNameTwo">
                                        </div>
                                        <div class="form-group">
                                            <label>*Age</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-check-inline" placeholder="Years" name="dogYearTwo">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-check-inline" placeholder="Months" name="dogMonthTwo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label>*Breed</label>
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
                                            <textarea class="form-control textarea" placeholder="Enter text here" rows="5" name="dogOtherTwo"></textarea>
                                        </div>
                                        <hr>
                                    </div>
                                    <!-- THIRD DOG -->
                                    <div id="dog" class="row">
                                        <div class="col-sm-4" dog="3">
                                            <h4>Third dog</h4>
                                            <hr>
                                            <div class="form-group ">
                                                <label>*Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="dogNameThree">
                                            </div>
                                            <div class="form-group">
                                                <label>*Age</label>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-check-inline" placeholder="Years" name="dogYearThree">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-check-inline" placeholder="Months" name="dogMonthThree">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label>*Breed</label>
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
                                                <textarea class="form-control textarea" placeholder="Enter text here" rows="5" name="dogOtherThree"></textarea>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-group-justified booking_register">Register now!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DOG FORM SECTION END -->
            </div>
        </div>
    </section>
</form>