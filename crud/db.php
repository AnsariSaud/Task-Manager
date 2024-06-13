<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_operation";

    $conn = mysqli_connect("$servername","$username","$password","$database");
    if($conn){
        echo "DB is connected";
    }
    else{
        echo "DB is not connected";
    }
?>