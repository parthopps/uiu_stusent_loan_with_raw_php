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
        <link rel="stylesheet" type="text/css" href="css/p.css">

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
	
	<div class="container">
	<?php
	$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));
	$result=$mysqli->query("SELECT a.sid,a.l_pass,a.pay as p ,a.date as t
	FROM payment as a,loan as b") or die($mysqli->error);
	?>
	
	<div class="row justify-content-center">
	     <table class="table">
		   <thead>
		       <tr>
			      <th>STUDENT ID</th>
				 <th>Enrollment Key</th>
				 <th>Given Money</th>
				 <th>Payment Date</th>
				 
				 
			   </tr>
	         </thead>
	
	        <?php
			$pps=$_SESSION['sid'];
			   while($row=$result->fetch_assoc()):?>
			   <?php if($pps == $row['sid']): ?>
	             <tr>
				   <td><?php echo $row['sid'];?></td>
				   <td><?php echo $row['l_pass'];?></td>
				   <td><?php echo $row['p'];?></td>
				   <td><?php echo $row['t'];?></td>
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
	                </div>
	
	
	
	
	
	
<!----	<div class="row justify-content-center">
       <form action="p.php" method="POST">
	   
	   <input type="hidden" name="id" value="<?php echo $id;?>"
	   
	   <div class="form-group">
         
				 <input type="hidden" name="sid"  class="form-control" value="<?php echo $sid; ?>" placeholder="Enter your id">
				 </div>
				 <div class="form-group">
			<label>Name</label>
				 <input type="text" name="g_name"  class="form-control" value="<?php echo $g_name; ?>" placeholder="Enter your name">
				</div>
				<div class="form-group">
	        <label>Phone Number</label>
				 <input type="text" name="g_number"  class="form-control" value="<?php echo $g_number; ?>" placeholder="Enter your number">
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
				</div>--->
	</body>



</html>