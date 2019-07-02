 <?php
session_start();
$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));

$id=0;
$update=false;
$sid='';
$p_phn='';
$o_phn='';
$taka='';
$cgpa='';
$e_date='';
$l_date='';
$status='';
$l_pass='';


$pps=$_SESSION['sid'];


if(isset($_POST['save'])){
	
	
	
	$sid=$_POST['sid'];
	$p_phn=$_POST['p_phn'];
	$o_phn=$_POST['o_phn'];
	$taka=$_POST['taka'];
	$cgpa=$_POST['cgpa'];
	$e_date=$_POST['e_date'];
	$l_date=$_POST['l_date'];
	$status=$_POST['status'];
	$l_pass=$_POST['l_pass'];
	
	if(empty($taka)|| empty($e_date)||empty($l_date)||empty($status)||empty($l_pass))
	{
		$_SESSION['message']="check your all record and some record is  empty";
	   $_SESSION['msg_type']="success";
	    header("location:loan_admin.php");
	} 
	else{
	 
	$mysqli->query("insert into loan (sid,p_phn,o_phn,taka,cgpa,l_date,status,l_pass) values ('$pps','$p_phn','$o_phn','$taka','$cgpa','$l_date','$status','$l_pass')")  or die($mysqli->error);
	$_SESSION['message']="record has been saved";
	$_SESSION['msg_type']="success";
	 header("location:loan_admin.php");
	}
}

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM loan WHERE id=$id") or die($mysqli->error());
		$_SESSION['message']="record has been deleted";
	     $_SESSION['msg_type']="success";
	header("location:loan_admin.php");
}


if(isset($_GET['edit'])){

	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("select * FROM loan WHERE id=$id")	or die($mysqli->error());
	if($result->num_rows >0)
	{
		$row=$result->fetch_array();
	$sid=$row['sid'];
	$p_phn=$row['p_phn'];
	$o_phn=$row['o_phn'];
	$taka=$row['taka'];
	$cgpa=$row['cgpa'];
	$e_date=$row['e_date'];
	$l_date=$row['l_date'];
	$status=$row['status'];
	$l_pass=$row['l_pass'];
		
	}


}


if(isset($_POST['update'])){

	$id=$_POST['id'];	
	$sid=$_POST['sid'];
	$p_phn=$_POST['p_phn'];
	$o_phn=$_POST['o_phn'];
	$taka=$_POST['taka'];
	$cgpa=$_POST['cgpa'];
	$e_date=$_POST['e_date'];
	$l_date=$_POST['l_date'];
	$status=$_POST['status'];
	$l_pass=$_POST['l_pass'];
	$mysqli->query("UPDATE loan SET sid='$sid', p_phn='$p_phn',o_phn='$o_phn',taka='$taka',cgpa='$cgpa',e_date='$e_date',l_date='$l_date',status='$status',l_pass='$l_pass' WHERE id=$id")	or die($mysqli->error());
	$_SESSION['message']="record has been updated";
	$_SESSION['msg_type']="warning";
	header("location:loan_admin.php");	
	
}




?>