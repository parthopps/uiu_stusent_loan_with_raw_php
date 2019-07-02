<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uiu_students_loan');

$sid=$_POST["sid"];
$pass=$_POST['password'];


$s=("select * from students_account where STUDENT_ID='$sid'&& password='$pass'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
	
{
		
	$_SESSION['sid']=$sid;
	$_SESSION['password']=$password;
	header('location:home.php');	
}
else{
	header('location:index.php');
}

?>