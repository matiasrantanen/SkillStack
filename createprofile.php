<!DOCTYPE html>
<?php
//include config file for database connection
require_once 'config.php';

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
//get input from user and insert into table
  $name = $_POST['firstname'];
  $description = $_POST['aboutme'];
  $sqli = "INSERT INTO profiles (name,description) VALUES ('$name','$description')";
  if(mysqli_query($link, $sqli)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not execute $sqli. " . mysqli_error($link);
}
  /*creates table with $name to database when submitted

  $name = $_POST['firstname'];
    $sqli = "CREATE TABLE $name (
      name VARCHAR(10) NOT NULL,
      description VARCHAR(255) NOT NULL
      )";
      if(mysqli_query($link, $sql)){
        echo "Table created successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    */
  
  
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