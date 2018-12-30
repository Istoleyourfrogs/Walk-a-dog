<?php
require "includes/header.inc.php";
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Newsletter</h1>
        </div>
        <div class="col-sm-12">
            <form method="post" action="includes/sendMail.inc.php">
                <label>Subject</label>
                <input type="text" name="subject">
                <label>Message</label>
                <textarea name="txt"></textarea>
                <button type="submit" name="submit">Send</button>
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_SESSION['username'])) {
            echo "<h1>HELLO <span style=\"color: red\"> ".$_SESSION['username']."</span></h1>";
            echo "<form action=\"includes/logout.inc.php\" method=\"post\">
                <button type=\"submit\" name=\"submit\">Logout</button>
                </form>";
        if(isset($_GET['login'])){
            if($_GET['login'] == 'success')
            $success = $_GET['login'];
            echo 'GUD JOB';
        }
        echo "
        <form>
        </form>
            
        
        ";
        //ADMIN SESSION ENDS
    }else{
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-4\">
            <form class=\"login-form m\" style=\"background: #440381; margin: 100px auto; border-radius: 15px;\" method=\"post\" action=\"includes/login.inc.php\">
                <input  class=\"form-control\" style=\"margin-bottom: 10px\" type=\"text\" name=\"username\" placeholder=\"Username\">
                <input class=\"form-group form-control\" type=\"password\" name=\"password\" placeholder=\"password\">
                <button class=\"btn-primary btn-group-justified\" type=\"submit\" name=\"submit\">Login</button>";

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
            if($_GET['login'] === 'char'){
                echo "<div class=\"text-center text-light\">Only letters nothing else</div>";
            }
        }

       echo"</form>
        </div>
    </div>
    <div>
    
</div>
</div>";
    }



