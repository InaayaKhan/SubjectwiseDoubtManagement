<?php

include "config.php";
session_start();
if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `am-iii`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: am-iii_chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>