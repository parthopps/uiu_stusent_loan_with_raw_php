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
        <link rel="stylesheet" type="text/css" href="css/g.css">

	</head>
	<body>
	  
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
	
	<div class="container">
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
			   while($row=$result->fetch_assoc()):?>
			   
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
				 
				 <?php endwhile;?>
				 </table>
	                </div>
	
	
	
	
	
	
	<div class="row justify-content-center">
       <form action="l.php" method="POST">
	   
	   <input type="hidden" name="id" value="<?php echo $id;?>"
	   
	   <div class="form-group">
         
				 <input type="hidden" name="sid"  class="form-control" value="<?php echo $sid; ?>" placeholder="Enter your id">
				 </div>
				 <div class="form-group">
			<label>parents number</label>
				 <input type="text" name="p_phn"  class="form-control" value="<?php echo $p_phn; ?>" placeholder="Enter your parents number">
				</div>
				<div class="form-group">
	        <label>Phone Number</label>
				 <input type="text" name="o_phn"  class="form-control" value="<?php echo $o_phn; ?>" placeholder="Enter your number">
				 </div>
				 <label>Amount Money</label>
				  <input type="text" name="taka"  class="form-control" value="<?php echo $taka; ?>" placeholder="Enter your taka">
				 </div>
				 <div class="form-group">
			<label>cgpa</label>
				 <input type="text" name="cgpa"  class="form-control" value="<?php echo $cgpa; ?>" placeholder="Enter your cgpa">
				</div>
				<div class="form-group">
	        <label>Apply Date</label>
				 <input type="text" name="e_date"  class="form-control" value="<?php echo $e_date; ?>" placeholder="Enter your Apply">
				 </div>
				  <label>last Date</label>
				  <input type="text" name="l_date"  class="form-control" value="<?php echo $l_date; ?>" placeholder="Enter your last Date">
				 </div>
				 <div class="form-group">
			<label>status</label>
				 <input type="text" name="status"  class="form-control" value="<?php echo $status; ?>" placeholder="Enter your status">
				</div>
				<div class="form-group">
	        <label>Give loan key</label>
				 <input type="text" name="l_pass"  class="form-control" value="<?php echo $l_pass; ?>" placeholder="Enter student enroll key">
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