<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uiu_students_loan');
$id=0;
$sid=$_POST["sid"];
$l_pass=$_POST['l_pass'];


$s=("select * from loan where l_pass='$l_pass' and sid='$sid'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
	
{
		
	//$_SESSION['sid']=$sid;
	$_SESSION['l_pass']=$l_pass;
	header('location:student.php');	
}
else{
	header('location:enroll.php');
}

?>