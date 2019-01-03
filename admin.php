<?php
//require database and header
require "includes/database.inc.php";
require "includes/header.inc.php";
    //if the $_SESSION has started you can seee the admin panel
    if(isset($_SESSION['username']) and $_SESSION='lukaku') {
            //gets all the emails from the table mail
            $sql = "SELECT * FROM mail";
            $query = mysqli_query($connect,$sql);
            //error checking for the newsletter form
            if(isset($_GET['mail'])){
                $mail = $_GET['mail'];
            }
            if($mail == 'success'){
                $mailSuccess = "<span class=\"text-center\">Newsletter sent successfully</span>";
            }
            if($mail == 'error'){
                $mailSuccess = "<span class=\"text-center\">There was an error! Please try again</span>";
            }
            if(isset($_GET['login'])){
                if($_GET['login'] == 'success')
                    $success = $_GET['login'];
            }
            echo "
                <div class=\"container\">
                    <div class=\"row mt-5\">
                        <div class=\"col-sm-12\">
                            <h1 class=\"text-center\">Newsletter</h1>
                        </div>
                        <div class=\"col-sm-6 col-sm-offset-3 mb-5\">
                            <form method=\"post\" action=\"includes/sendMail.inc.php\">
                                <label>Subject</label>
                                <input type=\"text\" name=\"subject\">
                                <label>Message</label>
                                <textarea name=\"txt\"></textarea>
                                <button class=\"btn btn-primary btn-group-justified\" type=\"submit\" name=\"submit\">Send</button>
                            </form>
                            $mailSuccess
                        </div>
                    </div>
                    <div class=\"col-sm-10 col-sm-offset-1 table-scroll\">
                    <table class=\"table table-striped table-danger\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>#</th>
                                <th>email</th>
                                <th>hashed-email</th>
                                <th>update/delete</th>
                            <tr>
                        </thead>
                        <tbody>
                        ";
            /*displays every emial from table mail
            inside is a form where you can delete or update the email*/
            while($result = mysqli_fetch_assoc($query)) {
                echo "
                    <tr>
                        <td>{$result['id']}</td>
                        <td>{$result['mail']}</td>
                        <td>{$result['hashedMail']}</td>
                        <td><form method=\"post\" action=\"includes/editMail.inc.php\"><input type=\"hidden\" name=\"id\" value=\"{$result['id']}\"><button type=\"submit\" name=\"update\" value=\"update\" class=\"btn btn-primary\">UPDATE</button><button onclick=\"return confirm('Are you sure you wish to delete this item?');\"  type=\"submit\" name=\"delete\" value=\"delete\" class=\"btn btn-primary ml-3\">DELETE</button></form></td>
                    </tr>
                ";
            }
            echo "  
                    </tbody>
                    </table>
                    </div>
            <div class=\"col-sm-5 col-sm-offset-1 mt-5\">
                <form action=\"includes/adminNewsletter.inc.php\" method=\"post\">
                                        <div class=\"form-group\">
                                            <input type=\"hidden\" name=\"hidden\">
                                            <input type=\"text\" name=\"email\" placeholder=\"Email Address...\" >
                                        </div>
                                        <div>
                                            <span>";
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
                echo "
                                                </span>
                                        </div>
                                        <div class=\"form-group\">
                                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">suscribe now</button>
                                        </div>
                                    </form>
                                    </div>
                                    <div class=\"col-sm-12\">
                                    <hr>
                                    </div>
                                   
                                    </div>   
                                    ";

        //if the admin is not logged in it will display a login form
    }else{
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-4\">
            <form class=\"login-form login\"  method=\"post\" action=\"includes/login.inc.php\">
                <input  class=\"form-control mb-10\"  type=\"text\" name=\"username\" placeholder=\"Username\">
                <input class=\"form-group form-control\" type=\"password\" name=\"password\" placeholder=\"password\">
                <button class=\"btn btn-primary btn-group-justified\" type=\"submit\" name=\"submit\">Login</button>";
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

       echo"</form>
        </div>
    </div>
    <div>
    
</div>
</div>";
    }
    ?>

<script src="js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function () {
        //checking if the url has /admin.php and adds admin.css to the <head>
    if( (top.location.pathname === '/admin.php') || (top.location.pathname === '/admin')) {
        $('head').append('<link rel="stylesheet" type="text/css" href="css/admin.css">');
    }

    })
</script>




