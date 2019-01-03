<?php
require "database.inc.php";

if(isset($_POST['submit'])) {
    //setting all variables from the newsletter form
    $mailFrom = mysqli_real_escape_string($connect,trim($_POST['email']));
    $empty = $_POST['hidden'];
    $hashedMail = md5($mailFrom);
    $sql = "SELECT * FROM mail WHERE mail='$mailFrom';";
    $query = mysqli_query($connect,$sql);
    $result = mysqli_fetch_assoc($query);
    $mailCheck = $result['mail'];
    //if the hidden input is not empty display error
    if(!empty($empty)){
        header("Location: ../index.php?mail=fatalError#newsletter");
        exit();
    }
    //if the input is empty display error
    if(empty($mailFrom)){
        header("Location: ../index.php?mail=error#newsletter");
        exit();
    }
    //if there is a mail in the database return back with an error
    if($mailCheck == $mailFrom) {
        header("Location: ../index.php?mail=same#newsletter");
        exit();
    }
    //validating an email
    if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
        header("Location: ../index.php?mail=mail#newsletter");
        exit();
    }
    //inserting the email into the database
    $sql = "INSERT INTO mail(mail,hashedMail) VALUES ('$mailFrom','$hashedMail');";
    $query = mysqli_query($connect,$sql);

    $txt = "<!-- THIS EMAIL WAS BUILT AND TESTED WITH LITMUS http://litmus.com -->
<!-- IT WAS RELEASED UNDER THE MIT LICENSE https://opensource.org/licenses/MIT -->
<!-- QUESTIONS? TWEET US @LITMUSAPP -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Kalam:400,700\">
    <style type=\"text/css\">

        /* CLIENT-SPECIFIC STYLES */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }

        /* RESET STYLES */
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px){
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*=\"margin: 16px 0;\"] { margin: 0 !important; }
    </style>
</head>
<body style=\"background-color: #51e5ff; margin: 0 !important; padding: 0 !important;\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <!-- LOGO -->
    <tr>
        <td bgcolor=\"#ffd6c0\" align=\"center\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
                <tr>
                    <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\" >
                <tr>
                    <td align=\"center\" valign=\"top\" style=\"padding: 40px 10px 40px 10px;\">
                        <a href=\"https://walkadog.secondsection.in.rs/index.php\" target=\"_blank\">
                            <img alt=\"Logo\" src=\"https://walkadog.secondsection.in.rs/images/dog.svg\" style=\"display: block; width: 400px; max-width: 400px; min-width: 400px;   color: #ffffff; font-size: 18px;\" border=\"0\">
                        </a>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- HERO -->
    <tr>
        <td bgcolor=\"#ffd6c0\" align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
                <tr>
                    <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\" >
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"center\" valign=\"top\" style=\"padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #ec368d;   font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;\">
                        <h1 style=\"font-size: 48px; font-weight: 400; color: #ec368d; margin: 0;\">Welcome!</h1>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
        <td bgcolor=#ffa5a5 align=\"center\" style=\"padding: 0px 10px 0px 10px;\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
                <tr>
                    <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\" >
                <!-- COPY -->
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 20px 40px 30px 40px; color: #ec368d;   font-size: 40px; font-weight: 400; line-height: 25px; border-radius: 4px 4px 4px 4px;\" >
                        <p style=\"margin: 0; font-size: 18px;\">Thank you for signing up for our newsletter service. We are happy to have you here!</p>
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <!-- BULLETPROOF BUTTON - ovo nije potrebno kod newsletter mail-a
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 20px 30px 60px 30px;\">
                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" style=\"border-radius: 3px;\" bgcolor=\"#FFA73B\"><a href=\"https://litmus.com\" target=\"_blank\" style=\"font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;\">Confirm Account</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>-->
                <!-- COPY
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 0px 30px; color: #666666;   font-size: 18px; font-weight: 400; line-height: 25px;\" >
                        <p style=\"margin: 0;\">If that doesn't work, copy and paste the following link in your browser:</p>
                    </td>
                </tr>
                 COPY
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 20px 30px 20px 30px; color: #666666;   font-size: 18px; font-weight: 400; line-height: 25px;\" >
                        <p style=\"margin: 0;\"><a href=\"http://litmus.com\" target=\"_blank\" style=\"color: #FFA73B;\">XXX.XXXXXXX.XXX/XXXXXXXXXXXXX</a></p>
                    </td>
                </tr>
                 COPY
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 20px 30px; color: #666666;   font-size: 18px; font-weight: 400; line-height: 25px;\" >
                        <p style=\"margin: 0;\">If you have any questions, just reply to this email—we're always happy to help out.</p>
                    </td>
                </tr>
                COPY
                <tr>
                    <td bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666;   font-size: 18px; font-weight: 400; line-height: 25px;\" >
                        <p style=\"margin: 0;\">Cheers,<br>The Ceej Team</p>
                    </td>
                </tr>-->
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- SUPPORT CALLOUT -->
    <tr>
        <td bgcolor=\"#51e5ff\" align=\"center\" style=\"padding: 30px 10px 50px 10px;\">
            <!--[if (gte mso 9)|(IE)]>
            <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
                <tr>
                    <td align=\"center\" valign=\"top\" width=\"600\">
            <![endif]-->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width: 600px;\" >
                <!-- HEADLINE -->
                <tr>
                    <td bgcolor=\"#ec368d\" align=\"center\" style=\"padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px;  font-size: 18px; font-weight: 400; line-height: 25px;\" >
                        <h2 style=\"font-size: 24px; font-weight: 400; color: #ffffff; margin: 0; text-transform: none;\">Got a question for us? </h2>
                        <p style=\"margin: 0; font-size: 30px; font-weight: 700;\"><a href=\"https://walkadog.secondsection.in.rs/index.php#contact\" target=\"_blank\" style=\"color: #ffffff;\">We&rsquo;re here, ready to talk</a></p>
                        <br>
                        <!-- UNSUBSCRIBE -->
                        <p style=\"margin: 0; color: #ffffff; font-size:16px\">if these emails get annoying, please feel free to <a href=\"https://walkadog.secondsection.in.rs/includes/unsubscribe.inc.php?key={$hashedMail}\" target=\"_blank\" style=\"color: #ffffff; font-weight: 700;\">unsubscribe</a>.</p>
                    </td>

                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>

</table>

</body>
</html>
";

    $subject = "Newsletter";
    $to = $mailFrom;
    /*$txt = "<html>
    <h1>Thank you for subscribing</h1>
    <a href=\"https://walkadog.secondsection.in.rs/includes/unsubscribe.inc.php?key={$result['hashedMail']}\">Unsubscribe</a>
";*/
    $headers = "From:  walk·a·dog <walkadog@secondsection.in.rs>" . " \r\n" .
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    mail($to, $subject, $txt, $headers);



    header("Location: ../index.php?mail=success#newsletter");
}else{
    header("Location: ../index.php?mail=fatalError#newsletter");
}