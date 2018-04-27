
<?php
Session_start();
require_once 'config.php';

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
	//Check if file is uploaded successfully
	if($_FILES['photo']['error'] > 0) { 
        echo 'Error during file upload, please try again';
        header("refresh:2; url=createprofile.php"); 
    }
	
	//Define valid filetypes  
	$extensionsAllowed = array( 'jpg', 'jpeg', 'png' );
	
	//Get file extension from uploaded file
    $extUpload = strtolower( substr( strrchr($_FILES['photo']['name'], '.') ,1) ) ;
    
	//Check if the uploaded file extension is allowed
	if (in_array($extUpload, $extensionsAllowed) ) { 
	
	//Upload the file to the images folder
	$name = "images/{$_FILES['photo']['name']}";
	$result = move_uploaded_file($_FILES['photo']['tmp_name'], $name);
	$sqli = "UPDATE users SET picture = '$name' WHERE username = '$username'";

	if($result){
        mysqli_query($link, $sqli);
        echo "Image uploaded successfully!";
        header("refresh:1; url=createprofile.php");
        
    }
		
	} else { 
        echo 'Only jpg, jpeg and png file formats are allowed. Please try again'; 
        header ("refresh:2; url=createprofile.php");
    }
	
?>