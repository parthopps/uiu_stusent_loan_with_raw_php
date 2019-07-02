 <?php
session_start();
$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));

$id=0;
$update=false;
$STUDENT_ID='';
$EMAIL='';
$Username='';
$Password='';
$PHONE_NUMBER='';
$Current_Trimester='';
$Credit_Com='';
$pps=$_SESSION['sid'];
$pps1=$_SESSION['password'];


if(isset($_POST['save'])){
	
	
	
	$STUDENT_ID=$_POST['STUDENT_ID'];
	$EMAIL=$_POST['EMAIL'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
	$Current_Trimester=$_POST['Current_Trimester'];
	$Credit_Com=$_POST['Credit_Com'];
	
	if(empty($STUDENT_ID)|| empty($EMAIL)||empty($PHONE_NUMBER)||empty($Username)||empty(Password)||empty($Current_Trimester)||empty($Credit_Com))
	{
		$_SESSION['message']="check your all record and some record is  empty";
	    $_SESSION['msg_type']="success";
	    header("location:personal.php");
	} 
	else{
	 
	$mysqli->query("INSERT INTO students_account (STUDENT_ID,EMAIL,PHONE_NUMBER,Username,Password,Current_Trimester,Credit_Com) VALUES ('$pps','$EMAIL','$PHONE_NUMBER','$Username','$Password','$Current_Trimester','$Credit_Com')")  or die($mysqli->error);
	$_SESSION['message']="record has been saved";
	$_SESSION['msg_type']="success";
	 header("location:personal.php");
	}
}

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM students_account WHERE id=$id") or die($mysqli->error());
		$_SESSION['message']="record has been deleted";
	     $_SESSION['msg_type']="success";
	header("location:personal.php");
}


if(isset($_GET['edit'])){

	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("select * FROM students_account WHERE id=$id")	or die($mysqli->error());
	if($result->num_rows >0)
	{
		$row=$result->fetch_array();
		$STUDENT_ID=$row['STUDENT_ID'];
		$EMAIL=$row['EMAIL'];
		$Username=$row['Username'];
		$Password=$row['Password'];
		$PHONE_NUMBER=$row['PHONE_NUMBER'];
		$Current_Trimester=$row['Current_Trimester'];
		$Credit_Com=$row['Credit_Com'];
		
	}


}


if(isset($_POST['update'])){

	$id=$_POST['id'];	
	$STUDENT_ID=$_POST['STUDENT_ID'];
	$EMAIL=$_POST['EMAIL'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
	$Current_Trimester=$_POST['Current_Trimester'];
	$Credit_Com=$_POST['Credit_Com'];
	$mysqli->query("UPDATE students_account SET STUDENT_ID='$STUDENT_ID' , EMAIL='$EMAIL', Username='$Username',Password='$Password',PHONE_NUMBER='$PHONE_NUMBER',Current_Trimester='$Current_Trimester',Credit_Com='$Credit_Com' WHERE id=$id")	or die($mysqli->error());
	$_SESSION['message']="record has been updated";
	$_SESSION['msg_type']="warning";
	header("location:personal.php");	
	
}




?>