<?php
session_start();
header("location:application.php");

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uiu_students_loan');


$id=0;
$sid=$_POST["sid"];
$p_phn=$_POST["p_phn"];
$o_phn=$_POST["o_phn"];
$taka=$_POST["taka"];
$cgpa=$_POST["cgpa"];
$l_date=$_POST["l_date"];
$pps=$_SESSION['sid'];



$s=("select * from loan where sid='$pps'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo "user allre";	
}
else{
	$reg="insert into loan (sid,p_phn,o_phn,taka,cgpa,l_date) values ('$pps','$p_phn','$o_phn','$taka','$cgpa','$l_date')";
	echo $reg;
	mysqli_query($con,$reg);
	echo "reg succ";
}
             

?>