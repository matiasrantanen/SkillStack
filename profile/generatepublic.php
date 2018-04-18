<?php 
Session_start();
//include config file for database connection
require_once '../config.php';

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
// Read file content for replacing strings
$file_content = file_get_contents('profile.php');

// Replace string from file
$file_content = str_replace('$username', "$username", $file_content);

// write the content to a new file to display public profile
if(file_put_contents("$username.php", $file_content)) {
    echo "Public profile link generated!";
    header("location:../editprofile.php");
}
else {
    echo "Oops, something went wrong!";
}
?>