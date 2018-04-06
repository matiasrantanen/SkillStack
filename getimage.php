<?php
Session_start();
//include config file for database connection
require_once 'config.php';

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

$target = "images/"; 

$target = $target . basename( $_FILES['photo']['name']);
$pic=($_FILES['photo']['name']); 

$sqli = "UPDATE users SET picture = '$pic' WHERE username = '$username'";
if (mysqli_query($link, $sqli)) {
    header("location: createprofile.php");
} else {
    echo "Error!!!" . mysqli_error($link);
    header("location: createprofile.php");
}
if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) 

{ 
}
?>