 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>

    <!-- Favicon -->
    <link type="image/gif" href="images/" sizes="32x32">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/trd.css">
  </head>

  <body>
  

  
		  <header class="head">
   <div class="container">
    <div class="row">
	 <div class="col-md-6">
	 </div>
	<div class="col-md-6">
	<div class="button-x">
	<a href="home.php"><button type="button" class="b1-x">Home</button></a>
				<a href="enroll.php"><button type="button" class="b1-x">Loan</button></a>				
				<a href="g.php"><button type="button" class="b1-x">G.Info</button></a>
				<!--<a href="loan_admin.php"><button type="button" class="b1">Status</button></a> --->
				<a href="personal.php"><button type="button" class="b1-x">settings</button></a>
				<a href="index.php"><button type="button" class="b1-x">Logout</button></a>
				</div>
	</div>
	</div>
   </div>
  </header>
  
  <section class="head2">
   <div class="container">
    <div class="row">
	 <div class="col-md-6">
	 <h1>Happy Education</h1>
	 <p>Life is sort but your education make you alive in your hole life</p> 
      </div>
	  <div class="col-md-6">
	  
	  <img src="images/loan.jpg" alt="psd Logo" class="img-fluid">
	  </div>
  
    </div>
   </div>
  </section>
  
    	<?php require_once 'l.php';?> 

		<?php
		if(isset($_SESSION['message'])):?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset( $_SESSION['message']);

?>

</div>
 <?php endif ?>
  
  <section class="head3">
   <div class="container">
   
  
   
    <div class="row">
	  <div class="col-md-12">
	    <h1> loan Statues</h1>
	  <img src="images/cap.jpg" alt="psd Logo" class="img-fluid">
	
	  </div>
    </div>
	
	<?php
	$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT * FROM loan") or die($mysqli->error);
	?>
	
	<div class="row justify-content-center">
	     <table class="table">
		   <thead>
		       <tr>
			      <th>STUDENT ID</th>
				 <th>GUARDIAN NUMBER</th>
				 <th>STUDENT NUMBER</th>
				 <th>APPLY MONEY</th>
				 <th>STUDENT CGPA</th>
				 <th>APPLY DATE</th>
				 <th>LAST DATE</th>
				 <th>STATUS</th>
				 <th>ENROLL KEY</th>
				 
				 <th colspan="2">Action</th>
				 
				 
			   </tr>
	         </thead>
	
	        <?php
			$pps=$_SESSION['sid'];
			$trd=$_SESSION['l_pass'];
			   while($row=$result->fetch_assoc()):?>
			   <?php if($pps == $row['sid'] && $trd == $row['l_pass']): ?>
	             <tr>
				   <td><?php echo $row['sid'];?></td>
				   <td><?php echo $row['p_phn'];?></td>
				   <td><?php echo $row['o_phn'];?></td>
				   <td><?php echo $row['taka'];?></td>
				   <td><?php echo $row['cgpa'];?></td>
				   <td><?php echo $row['e_date'];?></td>
				   <td><?php echo $row['l_date'];?></td>
				   <td><?php echo $row['status'];?></td>
				   <td><?php echo $row['l_pass'];?></td>
				   <td>
				   <a href="loan_admin.php?edit=<?php echo $row['id'];?>"
                      class="btn btn-info">Edit </a> 
                    <a href="l.php?delete=<?php echo $row['id'];?>"
                      class="btn btn-danger">Delete </a>					  
				   
				   </td>
				 </tr>
				 <?php endif;?>
				 <?php endwhile;?>
				 </table>
	                </div>
	
   </div>
  </section>
  
    <footer class="foot">
	  <div class="container">
	  <div class="row">
	    <div class="col-md-12">
	    <p>HelloWorld 2.O.com © 2019 All Rights Reserved by PPS</p>
	    
	   </div>
	   </div>
     </div>
	  </footer>
  
  
  
  
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Bootstrap JS FIle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Counter Up JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Theme Main JS File -->
    <script src="js/main.js"></script>
  </body>
</html>
	 