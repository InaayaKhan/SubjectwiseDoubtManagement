<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$subject = $_POST['subject'];
	$year = $_POST['year'];
	$branch = $_POST['branch'];
	$division = $_POST['division'];
	$roll_no = $_POST['roll_no'];

	
	$sql="INSERT INTO `student`(`name`, `email`, `password`, `number`, `year`, `branch`, `division`, `roll_no`) VALUES ('".$name."','".$email."','".$password."','".$number."','".$year."','".$branch."','".$division."','".$roll_no."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['name'] = $name;
		header('Location: home.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>