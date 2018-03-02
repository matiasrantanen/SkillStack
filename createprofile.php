<!DOCTYPE html>
<?php
Session_start();
//include config file for database connection
require_once 'config.php';

if(isset($_SESSION['username'])){
    echo "welcome {$_SESSION['username']}";
    $username = $_SESSION['username'];
}
else {
    echo "no user set";
}

$name = $description = "";
$name_err = $description_err = "";




if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  // Validate name
  if(empty(trim($_POST["firstname"]))){
      $name_err = "Please enter your name.";
  }
  if(empty(trim($_POST["aboutme"]))){
    $description_err = "Tell us something about yourself!";
}
if(empty(trim($_POST["skills"]))){
    $skills_err = "Add at least 1 skill :)";
}
//get input from user and insert into table
  $name = mysqli_real_escape_string($link, $_POST['firstname']);
  $description = mysqli_real_escape_string($link, $_POST['aboutme']);
  
  //check for empty input before inserting into db
  if(empty($name_err) && empty($description_err)){
        
    // Prepare an insert statement
    $sqli = "UPDATE users SET name = ? , description = ? WHERE username = ?";

    if($stmt = mysqli_prepare($link, $sqli)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_desc, $param_username);

        
        // Set parameters
        $param_name = $name;
        $param_desc = $description;
        $param_username = $username;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Redirect to profile page
            header("location: index.php");
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($link);
}
?>
<html lang="en">
<head>
<style type="text/css">
        body{ font: 14px sans-serif; background-color: #0275d8;}
        .wrapper{ width: 500px; padding: 20px; margin: auto; border: 2px solid white; border-radius: 10px; background-color: white; margin-top: 8%; margin-bottom: 8%; }
    </style>
<script defer src="js/fontawesome-all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/skillstack.css">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><i class="fas fa-th-large"></i> SkillStack</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
  </div>
</nav>
<div class="wrapper" id="profileinfoform">
        <h2>Time to create your SkillStack profile!</h2>
        <p>Please fill this form to create an account.</p>
        <form enctype="multipart/form-data"
        action="getimage.php" method="POST">
        <input type="file" name="photo"><br>
        <input type="submit" value="Add">   </form>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Your name:<sup>*</sup></label>
                <input type="text" name="firstname"class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                <label>Let others know what makes you special!<sup>*</sup></label>
                <input type="text" name="aboutme" class="form-control" value="<?php echo $description; ?>">
                <span class="help-block"><?php echo $description_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($skills_err)) ? 'has-error' : ''; ?>">
            <label>Add some of your skills!<sup>*</sup></label>
            <ul id="languages">
                <li>HTML &emsp; 1<input type="radio" name="HTML" value="1">2<input type="radio" name="HTML" value="2">3<input type="radio" name="HTML" value="3">4<input type="radio" name="HTML" value="4">5<input type="radio" name="HTML" value="5"></li>
                <li>CSS &emsp; 1<input type="radio" name="CSS" value="1">2<input type="radio" name="CSS" value="2">3<input type="radio" name="CSS" value="3">4<input type="radio" name="CSS" value="4">5<input type="radio" name="CSS" value="5"></li>
                <li>Javascript &emsp; 1<input type="radio" name="JS" value="1">2<input type="radio" name="JS" value="2">3<input type="radio" name="JS" value="3">4<input type="radio" name="JS" value="4">5<input type="radio" name="JS" value="5"></li>
                <li>Java &emsp; 1<input type="radio" name="JAVA" value="1">2<input type="radio" name="JAVA" value="2">3<input type="radio" name="JAVA" value="3">4<input type="radio" name="JAVA" value="4">5<input type="radio" name="JAVA" value="5"></li>
                <li>NodeJS &emsp; 1<input type="radio" name="NODE" value="1">2<input type="radio" name="NODE" value="2">3<input type="radio" name="NODE" value="3">4<input type="radio" name="NODE" value="4">5<input type="radio" name="NODE" value="5"></li>
                <li>C &emsp; 1<input type="radio" name="C" value="1">2<input type="radio" name="C" value="2">3<input type="radio" name="C" value="3">4<input type="radio" name="C" value="4">5<input type="radio" name="C" value="5"></li>
                <li>C++ &emsp; 1<input type="radio" name="C++" value="1">2<input type="radio" name="C++" value="2">3<input type="radio" name="C++" value="3">4<input type="radio" name="C++" value="4">5<input type="radio" name="C++" value="5"></li>
                <li>SQL &emsp; 1<input type="radio" name="SQL" value="1">2<input type="radio" name="SQL" value="2">3<input type="radio" name="SQL" value="3">4<input type="radio" name="SQL" value="4">5<input type="radio" name="SQL" value="5"></li>
                
            </ul>
            
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            
        </form>
    </div>
<footer class="footer">
  <div class="container" id="foot">
    <div class="row" id=copy>
      <p id="copy"><i class="far fa-copyright"></i>SkillStack</p>
</div>
</div>
</footer>
    
</body>
</html>