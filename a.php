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

$s=("select * from loan where l_pass='$l_pass' and sid='$sid'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
	
{
	$reg="insert into payment (sid,l_pass,pay) values ('$sid','$l_pass','$pay')";
	echo $reg;
	mysqli_query($con,$reg);
	echo "reg succ";
	$peg="UPDATE `loan` SET taka=taka-'$pay' WHERE sid='$pps'";
	mysqli_query($con,$peg);
	header('location:aa.php');
		
		
}
else{
	header('location:account.php');
}

	


?>