<?php
Session_start();
//include config file for database connection
require_once 'config.php';

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "$username";
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteAccount']))
    {
        deleteUser();
    }
    function deleteUser()
    {
        $username = $_SESSION['username'];
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $sqli = "DELETE FROM users WHERE username = '$username'";
        if(mysqli_query($link, $sqli)){
            
             header("location: login.php");
        }
      
    }
    mysqli_close($link);
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
<script src="js/browse.js"></script>
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
        <h2>We're sad to see you go :(</h2>
        <p>If you are sure you want to delete your account and all data from Skillstack, go ahead and click confirm.</p>
          
        <form action="deleteprofile.php" method="post">
    <input class="btn btn-primary" type="submit" name="deleteAccount" value="Confirm" />
    </form>
    </div>
<footer class="footer" id="delfooter">
  <div class="container" id="foot">
    <div class="row" id="delcopy">
    <?php include 'footer.php'; ?>
</div>
</div>
</footer>
    
</body>
</html>