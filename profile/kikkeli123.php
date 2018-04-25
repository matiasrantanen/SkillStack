<!DOCTYPE html>
<?php
require_once '../config.php';

//Get user data from table to display on page
$sqli = "SELECT * FROM users WHERE username = 'kikkeli123'";
$result = $link->query($sqli);

if ($result->num_rows > 0) {
    // output data of each row and select data to variables
    while($row = $result->fetch_assoc()) {
        $myname = $row["name"];
        $mydescription = $row["description"];
        $htmlskill = $row["htmlskill"] * 25;
        $cssskill = $row["cssskill"] * 25;
        $jsskill = $row["jsskill"] * 25;
        $javaskill = $row["javaskill"] * 25;
        $phpskill = $row["phpskill"] * 25;
        $cskill = $row["cskill"] * 25;
        $cppskill = $row["cppskill"] * 25;
        $sqlskill = $row["sqlskill"] * 25;
        $profilepic = $row["picture"];
        $linkedin = $row["linkedin"];
        $github = $row["github"];
        $codepen = $row["codepen"];


    }
} else {
    echo "0 results";
}
$link->close();
  
?>
<html lang="en">
<head>
<title>SkillStack | Your skills visualized.</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
<script defer src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/skillstack.css">
<link rel="icon" type="image/ico" href"images/favicon.ico">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar code -->
  <a class="navbar-brand" href="#"><i class="fas fa-th-large"></i> SkillStack</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container" id="cont1">
  <div class="row">
  <!-- Profile picture -->
    <div class="col-4" id="profilepicture">
   <?php
    echo "
     <img src='../$profilepic' height='250px' width='250px'> "
     ?>
    </div>
  <!-- Profile information -->
    <div class="col-8" id="profileinfo">
      <h3><?php echo $myname;?></h3>
      <p> <?php echo $mydescription;?> </p>
    </div>
  </div>
</div>
<div class="container" id="cont2">
  <h2> Skills </h2>
  <?php
  if ($htmlskill > 0) {

echo "  
  <div class='row' id='p1'>
  <div class='col' style='margin-top: 30px;'>
  <i class='fab fa-html5 fa-3x'></i><h5>HTML</h5><div class='progress' style='height: 20px;'>
       <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $htmlskill%;height: 20px' aria-valuenow='$htmlskill' aria-valuemin='0' aria-valuemax='100'>$htmlskill%</div>
    </div>
  </div>
</div>
";
  }
  if ($cssskill > 0) {

    echo "  
      <div class='row' id='p1'>
      <div class='col' style='margin-top: 30px;'>
      <i class='fab fa-css3 fa-3x'></i><h5>CSS</h5><div class='progress' style='height: 20px;'>
           <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $cssskill%;height: 20px;' aria-valuenow='$cssskill' aria-valuemin='0' aria-valuemax='100'>$cssskill%</div>
        </div>
      </div>
    </div>
    ";
      }
  if ($jsskill > 0) {

        echo "  
          <div class='row' id='p1'>
          <div class='col' style='margin-top: 30px;'>
          <i class='fab fa-js-square fa-3x'></i><h5>JAVASCRIPT</h5><div class='progress' style='height: 20px;'>
               <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $jsskill%;height: 20px;' aria-valuenow='$jsskill' aria-valuemin='0' aria-valuemax='100'>$jsskill%</div>
            </div>
          </div>
        </div>
        ";
          }
          if ($javaskill > 0) {

            echo "  
              <div class='row' id='p1'>
              <div class='col' style='margin-top: 30px;'>
              <img src='../images/java.png'><h5>JAVA</h5><div class='progress' style='height: 20px;'>
                   <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $javaskill%;height: 20px;' aria-valuenow='$javaskill' aria-valuemin='0' aria-valuemax='100'>$javaskill%</div>
                </div>
              </div>
            </div>
            ";
              }
              if ($phpskill > 0) {

                echo "  
                  <div class='row' id='p1'>
                  <div class='col' style='margin-top: 30px;'>
                  <i class='fab fa-php fa-3x'></i><h5>PHP</h5><div class='progress' style='height: 20px;'>
                       <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $phpskill%;height: 20px;' aria-valuenow='$phpskill' aria-valuemin='0' aria-valuemax='100'>$phpskill%</div>
                    </div>
                  </div>
                </div>
                ";
                  }
                  if ($cskill > 0) {

                    echo "  
                      <div class='row' id='p1'>
                      <div class='col' style='margin-top: 30px;'>
                      <img src='../images/c.svg'><h5>C</h5><div class='progress' style='height: 20px;'>
                           <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $cskill%;height: 20px;' aria-valuenow='$cskill' aria-valuemin='0' aria-valuemax='100'>$cskill%</div>
                        </div>
                      </div>
                    </div>
                    ";
                      }
                      if ($cppskill > 0) {

                        echo "  
                          <div class='row' id='p1'>
                          <div class='col' style='margin-top: 30px;'>
                          <img src='../images/c++.svg'><h5>C++</h5><div class='progress' style='height: 20px;'>
                               <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $cppskill%;height: 20px;' aria-valuenow='$cppskill' aria-valuemin='0' aria-valuemax='100'>$cppskill%</div>
                            </div>
                          </div>
                        </div>
                        ";
                          }
                          if ($sqlskill > 0) {

                            echo "  
                              <div class='row' id='p1'>
                              <div class='col' style='margin-top: 30px;'>
                              <img src='../images/sql.png'><h5>SQL</h5><div class='progress' style='height: 20px;'>
                                   <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' style='width: $sqlskill%;height: 20px;' aria-valuenow='$sqlskill' aria-valuemin='0' aria-valuemax='100'>$sqlskill%</div>
                                </div>
                              </div>
                            </div>
                            ";
                              }
      
  ?>
</div>
<div class="container" id="cont3">
  <h2> Projects </h2>
  <div class="row">
    <div class="col-4">
    <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
    <div class="col-4">
    <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
    <div class="col-4">
    <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
  </div>
</div>
<div class="container" id="cont4">
  
  <h2>Contact</h2>

      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item"><a href="https://www.linkedin.com/in/<?echo $linkedin?>" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        </li>
         <li class="list-inline-item">
          <a href="https://github.com/<?echo $github?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="https://codepen.io/<?echo $codepen?>" target="_blank"><i class="fab fa-codepen fa-2x"></i></a>
        </li>
      </ul>
</div>
</div>
<footer class="footer">
  <div class="container" id="foot">
    <div class="row" id=copy>
      <?php include '../footer.php'; ?>
</div>
</div>
</footer>
    
</body>
</html>