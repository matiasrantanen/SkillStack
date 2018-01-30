<!DOCTYPE html>

<html lang="en">
<head>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container" id="cont1">
  <div class="row">
  <!-- Profile picture -->
    <div class="col-md-4" id="profilepicture">
     <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
  <!-- Profile information -->
    <div class="col-md-8" id="profileinfo">
      <h3> Name </h3>
      <p> Write something about yourself! </p>
    </div>
  </div>
</div>
<div class="container" id="cont2">
  <h2> Skills </h2>
  <div class="row" id="p1">
    <div class="col">
      <div class="progress" style="height: 20px;">
         <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
  <div class="row" id="p2">
    <div class="col">
      <div class="progress" style="height: 20px;">
         <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
  <div class="row" id="p3">
    <div class="col">
      <div class="progress" style="height: 20px;">
         <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
</div>
<div class="container" id="cont3">
  <h2> Projects </h2>
  <div class="row">
    <div class="col-md-4">
    <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
    <div class="col-md-4">
    <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
    <div class="col-md-4">
    <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x250"></a>
    </div>
  </div>
</div>
<div class="container" id="cont4">
  
  <h2>Contact</h2>

      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a href="#" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
        </li>
        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        </li>
         <li class="list-inline-item">
          <a href="#" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#" target="_blank"><i class="fab fa-codepen fa-2x"></i></a>
        </li>
      </ul>
</div>
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