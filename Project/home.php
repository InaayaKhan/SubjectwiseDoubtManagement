<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `pbl`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	width: 100%


	}
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
<br><br>
  <center><h2>Welcome <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> !</span></h2>
  

	<br><br>
	<a href="edc-i_chatpage.php" class="btn btn-primary">EDC-I Classroom</a>


	<br><br>
	<a href="dld_chatpage.php" class="btn btn-primary">DLD Classroom</a>


	<br><br>
	<a href="am-iii_chatpage.php" class="btn btn-primary">AM-III Classroom</a>


	<br><br>
	<a href="pbl_chatpage.php" class="btn btn-primary">PBL Classroom</a>


	<br><br>
	<a href="ic_chatpage.php" class="btn btn-primary">IC Classroom</a>


	<br><br>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>