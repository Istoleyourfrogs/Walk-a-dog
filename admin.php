<?php
//require database and header
require "includes/database.inc.php";
require "includes/header.inc.php";
    //if the $_SESSION has started you can seee the admin panel
    if(isset($_SESSION['username']) and $_SESSION='lukaku') {
            //gets all the emails from the table mail
            $sql = "SELECT * FROM newsletter";
            $query = mysqli_query($connect,$sql);
            //error checking for the newsletter form

            if(isset($_GET['login'])){
                if($_GET['login'] == 'success')
                    $success = $_GET['login'];
            }

/***************************************NEWSLETTER**************************************************/
?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <h1 class="text-center">Newsletter</h1>
            </div>
            <div class="col-sm-6 col-sm-offset-3 mb-5">
                <form method="post" action="includes/sendMail.inc.php">
                    <label>Subject</label>
                    <input type="text" name="subject">
                    <label>Message</label>
                    <textarea name="txt"></textarea>
                    <button class="btn btn-primary btn-group-justified" type="submit" name="submit">Send</button>
                </form>
                    <?php
                        if(isset($_GET['mail'])){
                            $mail = $_GET['mail'];
                            if($mail == 'success'){
                                echo "<span class=\"text-center\">Newsletter sent successfully</span>";
                            }
                            if($mail == 'error'){
                                echo "<span class=\"text-center\">There was an error! Please try again</span>";
                            }
                        }
                    ?>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-3 table-scroll">
                <table class="table table-striped table-danger">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>email</th>
                            <th>update/delete</th>
                        <tr>
                    </thead>
                    <tbody>
            <?php
            /*displays every emial from table mail
            inside is a form where you can delete or update the email*/
            while($result = mysqli_fetch_assoc($query)) {
                echo"
                        <tr>
                            <td>{$result['id']}</td>
                            <td>{$result['mail']}</td>
                            <td>
                                <form method=\"post\" action=\"includes/editMail.inc.php\">
                                    <input type=\"hidden\" name=\"id\" value=\"{$result['id']}\">
                                    <button type=\"submit\" name=\"update\" value=\"update\" class=\"btn btn-primary\">UPDATE</button>
                                    <button onclick=\"return confirm('Are you sure you wish to delete this item?');\"  
                                    type=\"submit\" name=\"delete\" value=\"delete\" class=\"btn btn-primary ml-3\">DELETE</button>
                                </form>
                            </td>
                        </tr>
                ";
            }
            ?>
                        </tbody>
                    </table>
                </div>
            <div class="col-sm-5 col-sm-offset-3 mt-5">
                <form action="includes/adminNewsletter.inc.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="hidden">
                        <input type="text" name="email" placeholder="Email Address..." >
                    </div>
                    <div>
                        <span>
                            <?php
                                if(isset($_GET['mail'])){
                                    $mail = $_GET['mail'];
                                    if($mail == 'error'){
                                        echo "Error! Please fill in the field!";
                                    }
                                    if($mail == 'mail'){
                                        echo "Please enter a valid email!";
                                    }
                                    if($mail == 'fatalError'){
                                        echo "Oops something went wrong. Please try again!";
                                    }
                                    if($mail == 'success'){
                                        echo "Thank you for sigin up to our newsletter";
                                    }
                                    if($mail == 'same'){
                                        echo "You are already subscribed";
                                    }
                                }
                                ?>
                            </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                    </div>
                    <div class="col-sm-12">
                        <hr>
                    </div>
            </div>
        <?php
/***************************************NEWSLETTER**************************************************/

/******************************************REVIEWS**************************************************/
            $sql = "SELECT review_id, code_fk, comment FROM reviews WHERE verified=0;";
            $query = mysqli_query($connect,$sql);
        ?>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <h1 class="text-center">REVIEWS</h1>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 mb-5">
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1 table-scroll">
                <table class="table table-striped table-danger">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>code</th>
                            <th>comment</th>
                            <th>approve</th>
                        <tr>
                    </thead>
                    <tbody>
        <?php
            //displays every email from table mail inside is a form where you can delete or update the email
            while($result = mysqli_fetch_assoc($query)) {
                echo"
                    <tr>
                        <td>{$result['review_id']}</td>
                        <td>{$result['code_fk']}</td>
                        <td>{$result['comment']}</td>
                        <td>
                            <form method=\"post\" action=\"includes/approve.inc.php\">
                                <button type=\"submit\" name=\"approve\" value=\"{$result['review_id']}\" class=\"btn btn-primary\">VERIFY</button>
                                <button onclick=\"return confirm('Are you sure you wish to delete this item?');\"  
                                type=\"submit\" name=\"delete\" value=\"{$result['review_id']}\" class=\"btn btn-primary ml-3\">DELETE</button>
                            </form>
                        </td>
                    </tr>
                ";
            }
        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-5 col-sm-offset-1 mt-5"></div>
                <div class="col-sm-12">
                <hr>
                </div>
            </div>
        <?php
        //if the admin is not logged in it will display a login form
    }else{
        ?>
        echo "<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form class="login-form login"  method="post" action="includes/login.inc.php">
                <input  class="form-control mb-10"  type="text" name="username" placeholder="Username">
                <input class="form-group form-control" type="password" name="password" placeholder="password">
                <button class="btn btn-primary btn-group-justified" type="submit" name="submit">Login</button>";
        <?php
        //error checking for the admin form
        if(isset($_GET['login'])){
            if($_GET['login'] === 'empty'){
                echo "<div class=\"text-center text-light\">Please fill in all fields</div>";
            }
            if($_GET['login'] === 'error'){
                echo "<div class=\"text-center text-light\">Wrong information</div>";

            }
            if($_GET['login'] === 'fatalError'){
                echo "<div class=\"text-center text-light\">Oops something went wrong</div>";

            }

        }
    }
        ?>

       </form>
        </div>
    </div>
    <div>
    
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>



