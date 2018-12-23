<?php
require "includes/database.inc.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            border: 2px solid deepskyblue;
        }
        button {
            border: 1px solid darkblue;
            border-radius: 10px;
            background: #1b6d85;
            padding: 10px;
            font-size: 20px;
            color: #fff;
        }
        button:hover{
            cursor: crosshair;
        }
    </style>
</head>
<body>
<form method="post" action="includes/form.inc.php">
    <label for="first">First</label>
    <input type="text" id="first" name="first">
    <label for="last">Last</label>
    <input type="text" id="last" name="last">
    <label for="address">Adress</label>
    <input type="text" id="address" name="address">
    <label for="pussy">Pussy?</label>
    <input type="checkbox" id="pussy" name="pussy">
    <button type="submit" name="submit">Send</button>
</form>

<?php
$sql = "SELECT * FROM KKK";
$select = mysqli_query($connect,$sql);
$resultCheck =  mysqli_num_rows($select);
echo "$resultCheck";
$test = mysqli_fetch_assoc($select);
var_dump($test);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($select))
        echo $row['KKK_Member_Name']." ";
}

?>

</body>
</html>