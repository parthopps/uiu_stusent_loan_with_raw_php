<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #ff9933; /* Orange */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #ff8c1a; /* Dark Orange */
    color: #ffffff;
  }
  
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Why UIU Student Loan?</h3>
  <img src="uiu.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h4>It is an easy way to get a study loan without interest,</h4> <h4> which is only applicable for UIU students.</h4> <h4>You need very minimum requirements to get this loan.</h4>
</div>



<!-- Second Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">What Are The Requirements?</h3>
  <h5>There Are Three Major Requirements To Apply For The Loan.</h5><br>
  <div class="row">
    <div class="col-sm-4">
      <p>1) Student applying for the loan must be a current student of UIU.</p>
      <img src="requirements.jpg" class="img-responsive margin" style="width:85%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>2) The student must have a minimum CGPA of 2.2 To apply for the loan.</p>
      <img src="cgpa.jpg" class="img-responsive margin" style="width:85%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>3) The student must have completed a minimum of 27 credits before applying for the loan.</p>
      <img src="requirements.jpg" class="img-responsive margin" style="width:85%" alt="Image">
    </div>
  </div>
</div>

<!-- Third Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">How To Apply For The Loan?</h3>
  <img src="stl.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h4>To apply for the loan you must have the above requirements first.</h4> <h4>If the requirements are met than you will have to create an account here and fill up the necessary forms and wait for the confirmation Email. Even if you fill the requirements the authority has the full control weither to grant you the loan or not. Do not give any false information as everything will be checked by the authority.</h4>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>United International University <a href="https://www.uiu.ac.bd/">www.uiu.ac.bd</a></p> 
</footer>

</body>
</html>
