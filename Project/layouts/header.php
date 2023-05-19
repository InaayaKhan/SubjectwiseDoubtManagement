<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>College Classroom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    body{
        background-image:url('images/tcet.jpg');
        background-repeat: no-repeat;
        width:100%;
        min-width: 1024px;
    }
    .navbar-inverse {
        background-color: rgba(58, 58, 58, 0.6);
        border-color: rgba(58, 58, 58, 0.6); 
    }
    .navbar-inverse .navbar-brand {
        color: white;
    }
    a:hover{
        color: #50546d;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="images/logo.jpg" href="index.php" class="navbar-brand">
      <a class="navbar-brand" href="index.php">College Classroom</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="tregister.php"><span class="glyphicon glyphicon-user"></span>Teacher Sign Up</a></li>
        <li><a href="tlogin.php"><span class="glyphicon glyphicon-log-in"></span>Teacher Login&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="sregister.php"><span class="glyphicon glyphicon-user"></span>Student Sign Up</a></li>
        <li><a href="slogin.php"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  