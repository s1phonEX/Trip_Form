<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip_form";
$con = mysqli_connect($servername, $username, $password, $database,3306);
if (!$con) {
    die("error".mysqli_error($con));
}
else {
    echo "SUCCESS";
}
?>