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
		<link rel="stylesheet" type="text/css" href="css/p.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

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
	
	  
	<?php require_once 'per.php';?> 

		<?php
		if(isset($_SESSION['message'])):?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
		echo $_SESSION['message'];
		unset( $_SESSION['message']);

		?>

</div>
 <?php endif ?>
	
	<div class="container">
	<?php
	$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT * FROM students_account") or die($mysqli->error);
	?>
	
	<div class="row justify-content-center">
	     <table class="table">
		   <thead>
		       <tr>
			     <th>STUDENT ID</th>
				 <th>EMAIL</th>
				 <th>PHONE NUMBER</th>
				 <th>USERNAME</th>
				 <th>password</th>
				 <th>CURRENT_TRI</th>
				 <th>CREDIT_COM</th>
				 <th colspan="2">Action</th>
				 
				 
			   </tr>
	         </thead>
	
	        <?php
			$pps=$_SESSION['sid'];
			   while($row=$result->fetch_assoc()):?>
			   <?php if($pps == $row['STUDENT_ID']): ?>
	             <tr>
				   <td><?php echo $row['STUDENT_ID'];?></td>
				   <td><?php echo $row['EMAIL'];?></td>
				   <td><?php echo $row['PHONE_NUMBER'];?></td>
				   <td><?php echo $row['Username'];?></td>
				   <td><?php echo $row['Password'];?></td>
				   <td><?php echo $row['Current_Trimester'];?></td>
				   <td><?php echo $row['Credit_Com'];?></td>
				   <td>
				   <a href="personal.php?edit=<?php echo $row['id'];?>"
                      class="btn btn-info">Edit </a> 
                    <a href="per.php?delete=<?php echo $row['id'];?>"
                      class="btn btn-danger">Delete </a>					  
				   
				   </td>
				 </tr>
				 <?php endif;?>
				 <?php endwhile;?>
				 </table>
	                </div>
	
	
	
	
	
	
	<div class="row justify-content-center">
       <form action="per.php" method="POST">
	   
	   <input type="hidden" name="id" value="<?php echo $id;?>"
	   
	             <div class="form-group">
				 <input type="hidden" name="STUDENT_ID"  class="form-control" value="<?php echo $STUDENT_ID; ?>" placeholder="Enter your id">
				 </div>
				 
				 <div class="form-group">
			<label>EMAIL</label>
				 <input type="text" name="EMAIL"  class="form-control" value="<?php echo $EMAIL; ?>" placeholder="Enter your email">
				</div>
				 
				 
				 <div class="form-group">
			<label>USERNAME</label>
				 <input type="text" name="Username"  class="form-control" value="<?php echo $Username; ?>" placeholder="Enter your name">
				</div>
				 
				 <div class="form-group">
	        <label>Phone Number</label>
				 <input type="text" name="PHONE_NUMBER"  class="form-control" value="<?php echo $PHONE_NUMBER; ?>" placeholder="Enter your number">
				 </div>
				 
				 
				
				
				<div class="form-group">
				 <label>Password</label>
				 <input type="password" name="Password"  class="form-control" value="<?php echo $Password; ?>" placeholder="Enter your id">
				 </div>
				
				
				<div class="form-group">
	        <label>CURRENT_TRI</label>
				 <input type="text" name="Current_Trimester"  class="form-control" value="<?php echo $Current_Trimester; ?>" placeholder="Enter your CURRENT_TRIMESTER">
				 </div>
				 
				 <div class="form-group">
	        <label>CREDIT_COM</label>
				 <input type="text" name="Credit_Com"  class="form-control" value="<?php echo $Credit_Com; ?>" placeholder="Enter your CREDIT_COM">
				 </div>
				 
				<div class="form-group">
					  <?php
					  if($update == true):
					  ?>
					  <button type="submit" class="btn btn-info" name="update">update</button>
					  <?php else: ?>
					  <button type="submit" class="btn btn-info" name="save">save</button>
					  <?php endif; ?>
				</div>
				<div class="form-group">
					 
					<a href="index.php"><button type="button" class="btn btn-info">logout</button></a>
					  
				</div>
				</form>
				</div>
				</div>
	</body>


</html>