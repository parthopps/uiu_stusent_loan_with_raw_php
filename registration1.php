<?php
session_start();
header("location:signup.php");

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'uiu_students_loan');


$id=0;
$sid=$_POST["sid"];
$Email=$_POST["email"];
$number=$_POST["number"];
$user=$_POST["user"];
$pass=$_POST["password"];
$tri=$_POST["tri"];
$cre=$_POST["cre"];




$s=("select * from students_account where EMAIl='$Email'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo "user allre";	
}
else{
	$reg="insert into students_account (STUDENT_ID,EMAIL,PHONE_NUMBER,Username,Password,Current_Trimester,Credit_Com) values ('$sid','$Email','$number','$user','$pass','$tri','$cre')";
	echo $reg;
	mysqli_query($con,$reg);
	echo "reg succ";
}
             

?>