<!DOCTYPE html>
<?php
Session_start();
//include config file for database connection
require_once 'config.php';

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
else {
    header("location: login.php");
    exit;
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
//get input from user and insert into table
  $name = mysqli_real_escape_string($link, $_POST['firstname']);
  $description = mysqli_real_escape_string($link, $_POST['aboutme']);
  $htmlSkill = mysqli_real_escape_string($link, $_POST['htmlSkill']);
  $cssSkill = mysqli_real_escape_string($link, $_POST['cssSkill']);
  $jsSkill = mysqli_real_escape_string($link, $_POST['jsSkill']);
  $javaSkill = mysqli_real_escape_string($link, $_POST['javaSkill']);
  $phpSkill = mysqli_real_escape_string($link, $_POST['phpSkill']);
  $cSkill = mysqli_real_escape_string($link, $_POST['cSkill']);
  $cppSkill = mysqli_real_escape_string($link, $_POST['cppSkill']);
  $sqlSkill = mysqli_real_escape_string($link, $_POST['sqlSkill']);
  $project1 = mysqli_real_escape_string($link, $_POST['project1']);
  $project2 = mysqli_real_escape_string($link, $_POST['project2']);
  $project3 = mysqli_real_escape_string($link, $_POST['project3']);
  
  //check for empty input before inserting into db
  if(empty($name_err) && empty($description_err)){
        
    // Prepare an insert statement
    $sqli = "UPDATE users SET name = ? , description = ?, htmlskill = ?, cssskill = ?, jsskill = ?, javaskill = ?, phpskill = ?, cskill = ?, cppskill = ?, sqlskill = ?, p1link = ?, p2link = ?, p3link = ? WHERE username = ?";

    if($stmt = mysqli_prepare($link, $sqli)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssssssssssss", $param_name, $param_desc, $param_htmlskill, $param_cssskill, $param_jsskill, $param_javaskill, $param_phpskill, $param_cskill, $param_cppskill, $param_sqlskill, $param_p1link, $param_p2link, $param_p3link, $param_username);

        
        // Set parameters
        $param_name = $name;
        $param_desc = $description;
        $param_username = $username;
        $param_htmlskill = $htmlSkill;
        $param_cssskill = $cssSkill;
        $param_jsskill = $jsSkill;
        $param_javaskill = $javaSkill;
        $param_phpskill = $phpSkill;
        $param_cskill = $cSkill;
        $param_cppskill = $cppSkill;
        $param_sqlskill = $sqlSkill;
        $param_p1link = $project1;
        $param_p2link = $project2;
        $param_p3link = $project3;


        
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
<meta name="viewport" content="width=device-width" />
<style type="text/css">
        body{ font: 14px sans-serif; background-color: #0275d8;}
    </style>
<script defer src="js/fontawesome-all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="js/bootstrap.min.js"></script>
<script src="js/browse.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/skillstack.css">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><i class="fas fa-th-large"></i> SkillStack</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li>
      <a href="deleteprofile.php" class="btn btn-danger" id="deleteprofile" role="button">Delete profile</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="wrapper" id="profileinfoform">
        <i class="fa fa-cog fa-spin fa-2x"></i><h2>Edit your profile information</h2>
        <?php
        if (file_exists("profile/$username.php")){
            echo "<label>Public profile URL: <a href='http://1601551.azurewebsites.net/profile/$username.php' target='_blank'>1601551.azurewebsites.net/profile/$username.php</a></label>";
        } else {
        echo "<br><form action='profile/generatepublic.php' method='POST'>
        
            <label>Click Generate to enable your SkillStack public profile link</label>
            <input type='submit' class='btn btn-success' value='Generate'>
            
        </form><br>";
        }
         ?>
        
        <label>Choose your profile image:</label>
        <form enctype="multipart/form-data"
        action="editimage.php" method="POST">
        <div class="input-group">
        <label class="input-group-btn">
        <span class="btn btn-primary">
            Browse&hellip;
        <input type="file" style="display:none;" name="photo" multiple>
        </span>
        </label>
        <input type="text" class="form-control" readonly>
        </div>
        <br>
        <input type="submit" style="margin-bottom: 10px;" class="btn btn-success" id="uploadbutton" value="Upload picture">   </form>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Your name:<sup>*</sup></label>
                <input type="text" name="firstname"class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                <label>Let others know what makes you special!<sup>*</sup></label>
                <textarea rows="5" type="text" name="aboutme" class="form-control" value="<?php echo $description; ?>"></textarea>
                <span class="help-block"><?php echo $description_err; ?></span>
            </div>
            <div class="form-group">
            <label>Add some of your skills!<sup>*</sup></label>
            <ul id="skills">
                <li>HTML <select name="htmlSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>CSS <select name="cssSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>Javascript <select name="jsSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>Java <select name="javaSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>PHP <select name="phpSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>C <select name="cSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>C++ <select name="cppSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                <li>SQL <select name="sqlSkill">
                <option value="0">Your skill level</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select></li>
                
            </ul>
            
            </div>
            <div class="form-group">
                <label>Here you can add links to your projects</label>
                <br>
                <label>Project link 1</label>
                <input type="text" name="project1" class="form-control" value="">
                <br>
                <label>Project link 2</label>
                <input type="text" name="project2" class="form-control" value="">
                <br>
                <label>Project link 3</label>
                <input type="text" name="project3" class="form-control" value="">
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
    <?php include 'footer.php'; ?>
</div>
</div>
</footer>
    
</body>
</html>