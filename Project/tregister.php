<?php include "layouts/header.php"; ?>
<style>
  h2{
color:white;
  }

  h3 {
  color: white;
}
  label{
color:white;
  }
  .container {
    margin-top: 2%;
    width: 50%;
    height: 75%;
    background-color: rgba(58, 58, 58, 0.9);
    padding-top:2%;
    padding-bottom:2%;
  }
  

select { 
                appearance: none; 
                outline: 0; 
                background: #f1f1f1; 
                background-image: none; 
                width: 100%; 
                height: 100%; 
                color: black; 
                cursor: pointer; 
                border:1px solid black; 
                border-radius:3px; 
                text-align: center;
                text-align-last: center;

            } 
            .select { 
                position: relative; 
                display: block; 
                width: 100%; 
                height: 3.5em; 
                line-height: 3; 
                overflow: hidden; 
                border-radius: .25em; 
                padding-bottom:10px; 
                text-align: center;
                text-align-last: center;
                  
            } 
            h1 { 
                color:green; 
            } 

.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
    background-color: #212121;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
  </style>

<div class="container">

  <center><h2>Teacher Registration Form</h2></center></br>
  <form class="form-horizontal" method="post" action="add_teacher.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Number:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" required>
      </div>
    </div>

<hr>

      <center><h3 color: white>Choose your Subject</h3></center></br>
      
    <div class="select">  
            <select name="subject" id="subject"> 
                <option>&nbsp&nbsp&nbspSelect Subject</option> 
                <option value="EDC-I">&nbsp&nbsp&nbspEDC-I</option> 
                <option value="DLD">&nbsp&nbsp&nbspDLD</option> 
                <option value="AM-III">&nbsp&nbsp&nbspAM-III</option>
                <option value="PBL">&nbsp&nbsp&nbspPBL</option>  
                <option value="IC">&nbsp&nbsp&nbspIC</option> 

                
            </select> 
        </div>


    <div class="wrapper">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="button">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
