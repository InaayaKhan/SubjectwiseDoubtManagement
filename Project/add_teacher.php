<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$subject = $_POST['subject'];
	
	$sql="INSERT INTO `teacher`(`name`, `email`, `password`, `number`, `subject`) VALUES ('".$name."','".$email."','".$password."','".$number."','".$subject."')";

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