<?php
session_start();
header("location:ginfo.php");

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uiu_students_loan');


$id=0;
$sid=$_POST["sid"];
$name=$_POST["user"];
$number=$_POST["number"];






$s=("select * from baper_info where sid='$sid'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo "user allre";	
}
else{
	$reg="insert into baper_info (sid,g_name,g_number) values ('$sid','$name','$number')";
	echo $reg;
	mysqli_query($con,$reg);
	echo "reg succ";
}
             

?>