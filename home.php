
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>UIU Students Loan</title>
		
		 <!-- Font Awesome CSS File -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

		<!-- Bootstrap CSS File -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Theme CSS File -->
		
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/fullstyle.css">

	</head>

	<body>

	<?php require_once 'p.php';?> 

		<?php
		if(isset($_SESSION['message'])):?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset( $_SESSION['message']);

?>

</div>
 <?php endif ?>
	
	 <section class="easy">
	    <div class="loan">
		
		   <div class="container">
	<?php
	$pps=$_SESSION['sid'];
	$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT sid,day(l_date)-day(CURRENT_TIMESTAMP) as p
	FROM loan
	where sid='$pps'") or die($mysqli->error);
	?>

	        <?php
			
			   while($row=$result->fetch_assoc()):?>
			   <?php if((7 > $row['p'])): ?>
	             <tr>
				   
				 <h1>Left date  :</h1>
				   <h1><?php echo $row['p'];?> - Please Pay your Money In UIU Account .</h1>
				   
				   <!---td>
				   <a href="g.php?edit=<?php echo $row['id'];?>"
                      class="btn btn-info">Edit </a> 
                    <a href="p.php?delete=<?php echo $row['id'];?>"
                      class="btn btn-danger">Delete </a>		--->			  
				   
				   </td>
				 </tr>
				 <?php endif;?>
				 <?php endwhile;?>
				 </table>

		   <div class="row">
	  <div class="col-md-5 logo">
	  
	  </div>
	
	 <div class="col-md-7">
	
	    <div class="button2-free">
		<a href="application.php"><button type="button" class="b2-free">Application Form</button></a>	
		
		</div>
	   </div>
	
	 </div>
		   
		   
		   <div class="row">
		   <div class="col-md-12">
		   <h1>Get <br>An <br>Easy Loan </h1>
		   
		   <div class="button">
		   
		   <a <?php 
     $pps=$_SESSION['sid'];
    $pps1=$_SESSION['password'];
      if($pps == "11161231") :?> href ="loan_admin.php"><button type="submit" class="b1">Admin Panel</button></a>
		
		
<?php endif;?>
				<a href="home.php"><button type="button" class="b1">Home</button></a>
				<a href="enroll.php"><button type="button" class="b1">Loan</button></a>				
				<a href="g.php"><button type="button" class="b1">G.Info</button></a>
				<!--<a href="loan_admin.php"><button type="button" class="b1">Status</button></a> --->
				<a href="personal.php"><button type="button" class="b1">settings</button></a>
				<a href="account.php"><button type="button" class="b1">Account</button></a>
				<a href="index.php"><button type="button" class="b1">Logout</button></a>
		
		</div>
		
		</div>
		</div>
		</div>
	 </div>
	 </section>
	 
	
	    <!-- JS/JQ Library File -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Bootstrap JS File -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Theme Main JS File -->
		<script type="text/javascript" src="js/main.js"></script> 
	</body>
</html>