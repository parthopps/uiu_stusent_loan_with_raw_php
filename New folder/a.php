<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uiu_students_loan');
$id=0;
$sid=$_POST["sid"];
$l_pass=$_POST['l_pass'];
$pay=$_POST['pay'];
$pps=$_SESSION['sid'];
$pps1=$_SESSION['l_pass'];


	$reg="insert into payment (sid,l_pass,pay) values ('$pps','$pps1','$pay')";
	echo $reg;
	mysqli_query($con,$reg);
	echo "reg succ";
	header('location:aa.php');


?>