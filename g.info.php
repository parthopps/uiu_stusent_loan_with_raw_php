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
		<link rel="stylesheet" type="text/css" href="css/g.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

	</head>

	<body>
	  
	 <section class="easy">
	    <div class="loan">
		   
		   <div class="container">
		   <div class="row">
		   <div class="col-md-12">
		   <div class="g">
				<h3>Student Signup</h3>
 	           <form  action="registration1.php"   method="post">
				<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $id;?>">

				<div class="form-group">
				<label>Student ID<label>
				 <input type="text" name="sid" class="form-control"  required>
				</div>
 
				
				
				<div class="form-group">
				<label>Phonenumber<label>
				 <input type="text" name="number" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Username<label>
				 <input type="text" name="user" class="form-control" required>
				</div>
			
				<button type="submit" class="btn btn-primary"> signup </button>
					
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