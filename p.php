 <?php
session_start();
$mysqli=new mysqli('localhost','root','','uiu_students_loan') or die(mysqli_error($mysqli));

$id=0;
$update=false;
$sid='';
$g_name='';
$g_number='';
$pps=$_SESSION['sid'];


if(isset($_POST['save'])){
	
	
	
	$sid=$_POST['sid'];
	$g_name=$_POST['g_name'];
	$g_number=$_POST['g_number'];
	
	if(empty($sid)|| empty($g_name)||empty($g_number))
	{
		$_SESSION['message']="check your all record and some record is  empty";
	   $_SESSION['msg_type']="success";
	    header("location:g.php");
	} 
	else{
	 
	$mysqli->query("INSERT INTO baper_info (sid,g_name,g_number) VALUES ('$pps','$g_name','$g_number')")  or die($mysqli->error);
	$_SESSION['message']="record has been saved";
	$_SESSION['msg_type']="success";
	 header("location:g.php");
	}
}

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM baper_info WHERE id=$id") or die($mysqli->error());
		$_SESSION['message']="record has been deleted";
	     $_SESSION['msg_type']="success";
	header("location:g.php");
}


if(isset($_GET['edit'])){

	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("select * FROM baper_info WHERE id=$id")	or die($mysqli->error());
	if($result->num_rows >0)
	{
		$row=$result->fetch_array();
		$sid=$row["sid"];
		$g_name=$row["g_name"];
		$g_number=$row["g_number"];
		
	}


}


if(isset($_POST['update'])){

	$id=$_POST['id'];	
	$sid=$_POST["sid"];
	$g_name=$_POST["g_name"];
	$g_number=$_POST["g_number"];
	$mysqli->query("UPDATE baper_info SET sid='$sid', g_name='$g_name',g_number='$g_number' WHERE id=$id")	or die($mysqli->error());
	$_SESSION['message']="record has been updated";
	$_SESSION['msg_type']="warning";
	header("location:g.php");	
	
}




?>